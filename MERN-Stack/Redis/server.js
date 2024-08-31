const express = require("express");
const axios = require("axios").default;
const client = require("./client");

const app = express();

app.get("/", async (req, res) => {

    const catchVal = await client.get('posts');
    if(catchVal) return res.json(JSON.parse(catchVal));

    const { data } = await axios.get('https://jsonplaceholder.typicode.com/posts');
    await client.set("posts", JSON.stringify(data));
    await client.expire("posts", 60);
    return res.json(data);

});

app.listen(9000);