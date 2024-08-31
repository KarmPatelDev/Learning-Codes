<?php

/*

JSON => JavaScript Object Notation (JavaScript Object Literals) 
     => Used to Store and Exchange data

When to use JSON?
=> Client -> (Data Exchange Format)(JSON or XML) -> Server 

JSON => 
{"students":[
    {
        "name":"Ram","age":"23","city":"Agra"
    },
    {
        "name":"Sonam","age":"28","city":"Delhi"
    },
]}
=> JavaScript Object Notation
=> Text Based Format
=> Light Weight
=> Does not support comments and namespaces

In JavaScript
var person = {name:"Ram",age:"23",city:"Agra", "last name": "patel"}
In JSON
var person = {"name":"Ram","age":"23","city":"Agra", "last name": "patel"}
For Printing Syntax Same like person.name, person.age

JSNO allowed DataType -: String, Number, Boolean, Array, Object, NULL
{
    "name": "Patel Karm",
    "age": 25,
    "married": false,
    "hobbies": ["coding","cricket"],
    "kids":, //NULL
    "vehicle": {
    {
        "type":"car", "vname": "swift"
    },
    {
        "type":"bike", "vname": "pulsar"
    }
}
}

Advantages of JSON
=> Human Readable Format
=> Language Independent
=> Supports all popular programming languages
=> Easy to organised and access
=> It is light weight

Disadvantage => Can not use for transfer video, audio, images or any other binary information

What is API?
=> Application Program Interface
=> {Android app , Website, Iphone app} (<=) => JSON (<=) => API => Database(MYSQL etc)


XML =>
<students>
<student>
 <name>Ram</name><age>23</age><city>Agra</city>
</student>
<student>
 <name>Ram</name><age>28</age><city>Delhi</city>
</student>
</students>
=> Extensible Markup Language
=> Markup Language
=> Heavier
=> Supports comments and namespaces

*/

?>