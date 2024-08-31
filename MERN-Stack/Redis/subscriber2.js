const client = require("./client");

client.on('message', (channel, message) => {
    console.log(`Received the following message from ${channel}: ${message}`);
});

async function init(){

    const result = await client.subscribe("notification");
    console.log(result);

}

init();