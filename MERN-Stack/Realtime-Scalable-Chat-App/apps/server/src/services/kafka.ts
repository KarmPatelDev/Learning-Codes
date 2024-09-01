import { Kafka, Producer } from "kafkajs";
import prismaClient from "./prismaClient";

const kafka = new Kafka({
    clientId: "chat-app",
    brokers: ["192.168.234.202:9092"],
});

// async function init(){
//     const admin = kafka.admin();
//     admin.connect();
//     admin.createTopics({
//         topics: [
//             {
//                 topic: "MESSAGES",
//                 numPartitions: 1
//             }
//         ]
//     });
//     await admin.disconnect();
// }

let producer: null | Producer = null;

export async function createProducer(){
    // await init()
    if(producer)return producer;
    const _producer = kafka.producer();
    await _producer.connect();
    producer = _producer;
    return producer;
}

export async function produceMessage(message: string){
    const producer = await createProducer();
    producer.send({
        messages: [{key: `message-${Date.now()}`, value: message}],
        topic: "MESSAGES"
    });
    return true;
}

export async function startMessageConsumer(){
    const consumer = kafka.consumer({ groupId: "default"});
    await consumer.connect();
    await consumer.subscribe({ topic: "MESSAGES", fromBeginning: true });

    await consumer.run({
        autoCommit: true,
        eachMessage: async ({message, pause}) => {
            if(!message.value)return;
            try{
                await prismaClient.message.create({
                    data: {
                        message: message.value?.toString()
                    }
                });
                console.log("Now Message is in DB..", message.value?.toString());
            }
            catch(err){
                console.log("Something is wrong");
                pause();
                setTimeout(() => { consumer.resume([{topic: "MESSAGES"}]) }, 60*1000);
            } 
        }
    });
}