<?php

/*
What is API?
=> Application Program Interface
=> {Android, PHP, Iphone} => interaction in (JSON or XML) => API => MYSQL/Database 

Commonly Use of Web APIs
=> Login with Facebook / Google
=> Map
=> SMS => otp, ads etc.
=> Payment Gateways
=> Weather
=> Email
=> Courier / Shipping 
=> Booking System
=> Chatting
=> Videos/Images
=> Search Engines

Types Of APIs
Open APIs => It is free to use.
Partner APIs => It is paid APIs that we gather from Third Party
Internal APIs => It is created by our selves or company create for that to store privately

Web Services APIs
=> It is use HTTP Protocol
=> HTTP Protocol APIs => SOAP, XML-RPC, JSON-RPC, REST
=> We created XML and JSON APIs using PHP data in last few lessions.(it is simple)
=> SOAP(it is support only XML format) and REST API use more than other.

We Use REST API
=> REST => Representational State Transfer
=> JSON, XML, text, user-defined formate support
=> It is easy to use
=> HTTP Methods -: GET, PUT(we also use PATCH), POST, DELETE

Restful API = REST API
=> We have to also addition information pass that called header information
=> from that headers are
   header('Content-Type:application/json'); // data return in json format

   {OPTIONAL HEADERS (For Security)}

   header('Access-Control-Allow-Methods:PUT'); // => which method we use only
   header('Access-Control-Allow-Methods:PUT, DELETE'); // => For multiple method allow

   header('Access-Control-Allow-Origin: *') 
   // => For security who can access this api (* means anyone can use) if you have to give the permission to other then pass url instead of * (For Owner that have make API for their website don't write their website in header because it is already integrated)

   header('Access-Control-Allow-Headers: <header-name>');
   // it is use to allow which headers we have to pass in the website
   
*/

?>