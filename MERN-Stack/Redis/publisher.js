const client = require("./client");

async function init(){
    
    await client.publish("notification", "hello");
    console.log("Publish Success..");

    await client.disconnect();
    console.log("Publisher Disconnected...");

}

init();