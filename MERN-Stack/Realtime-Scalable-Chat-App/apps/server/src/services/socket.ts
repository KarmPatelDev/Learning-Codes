import { Server } from "socket.io";
import { Redis } from "ioredis";
import { produceMessage } from "./kafka";

const pub = new Redis();
const sub = new Redis();

class SocketService {

    private _io: Server;

    constructor(){
        console.log("Init Socket Server");
        this._io = new Server({
            cors: {
                allowedHeaders: ["*"],
                origin: "*"
            }
        });
        sub.subscribe("MESSAGES");
    }

    public initListeners(){
        const io = this.io;
        console.log("Init Listener");
        io.on("connect", (socket) => {
            console.log(`New Socket Connected`, socket.id);
            socket.on("event:message", async({message}: {message: string}) => {
                console.log("New Message Received", message);
                // publish message to redis
                await pub.publish('MESSAGES', JSON.stringify({ message }));
                console.log("success");
            });
        });  
        
        
        sub.on("message", async (channel, message) => {
            if(channel === "MESSAGES"){
                io.emit("event:message", message);
                await produceMessage(message);
                console.log("Message Produces To Kafka");
            }
        });
    }

    get io(){
        return this._io;
    }
}

export default SocketService;