import { Kafka } from "kafkajs";

async function init(){

    const kafka = new Kafka({
        clientId: "chat-app",
        brokers: ["192.168.234.202:9092"],
    });
    
    const admin = kafka.admin();
    console.log('Admin Connection');
    admin.connect();
    console.log('Admin Connected');


    console.log('Topic Creation');
    admin.createTopics({
        topics: [
            {
                topic: "MESSAGES"
            }
        ]
    });
    console.log('Topic Created');

    console.log('Admin Disconnection');
    await admin.disconnect();
}

init();