const client = require("./client");

async function init(){

    // await client.lpush("messages", 1);
    // await client.lpush("messages", 2);
    // await client.lpush("messages", 3);
    // await client.lpush("messages", 4);
    // await client.lpush("messages", 5);
    // await client.lpush("messages", 6);
    // await client.lpush("messages", 7);
    // const result = await client.blpop("messages", 10);
    // await client.lpush("messages", 8);
    // console.log("result => ", result);

    const result2 = await client.lrange("messages", 0, -1);
    console.log(result2);

    const result3 = await client.keys("user:*");
    console.log(result3);

}

init();