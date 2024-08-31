<?php

/*
JavaScript => XMLhttpRequest => more code
jQuery => AJAX => we have to attache one file jQuery
JavaScript ES6 => Fetch()

fetch('file.php).then(function(response){
    return response.data;
}).then(function(result){
    console.log(result);
}).catch(function(error){
    console.log(error);
});


Insert Data

fetch(file/url, {
    method: "POST",
    body: data, // => formData / JSON Data / Text
    header: { // info about data
        'Content-Type': 'application/json', // => for json
        'Content-Type': 'application/x-www-form-urlencoded', // for formdata
    }
});


Update Data

fetch(file/url, {
    method: "PUT",
    body: data, // => formData / JSON Data / Text
    header: { // info about data
        'Content-Type': 'application/json', // => for json
        'Content-Type': 'application/x-www-form-urlencoded', // for formdata
    }
});

Delete Data

fetch(file/URL, {
    method: "DELETE"
}).then(function(response){
   
}).then(function(result){

}).catch(function(error){
  
});

*/
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <title></title>
  <style>
    
    table th{
      background: orange;
    }
    table tr td{
      text-align: center;
    }
    input{
      margin: 2rem 0;
    }
    #success-message{
      background: #1dbf73;
      border-radius: 10px;
      color: #fff;
      padding: 10px;
      margin: 0 auto;
      display: none;
      position: absolute;
      top: 15px;
      right: 15px;
    }
    #error-message{
      background: #f76f65;
      border-radius: 10px;
      color: #fff;
      padding: 10px;
      margin: 0 auto;
      display: none;
      position: absolute;
      top: 15px;
      right: 15px;
    }
    .edit-btn{
        background: #1dbf73;
        color: #fff;
        border: 0;
        padding: 4px 10px;
        border-radius: 3px;
        cursor: pointer;
    }
    .delete-btn{
        background: red;
        color: #fff;
        border: 0;
        padding: 4px 10px;
        border-radius: 3px;
        cursor: pointer;
    }
    #modal{
        display: none;
        background: rgba(0, 0, 0, 0.7);
        position: fixed;
        left: 0;
        top: 0;
        width: 100%;
        height: 100%;
        z-index: 100;
    }
    #modal-form{
        background: #fff;
        width: 40%;
        position: relative;
        top: 20%;
        margin: 0 auto;
        padding: 15px;
        border-radius: 4px;
    }
    #modal h2{
        margin: 0 0 15px;
        padding-bottom: 10px;
        border-bottom: 1px solid #000;
    }
    #modal input{
        margin: 0;
    }
    #close-btn{
        background: red;
        color: #fff;
        width: 30px;
        height: 30px;
        line-height: 30px;
        text-align: center;
        border-radius: 50%;
        position:absolute;
        top: -15px;
        right: -15px;
        cursor: pointer;
    }
  </style>
</head>
<body>

<div id="search-bar">
<label>Search : </label><input type="text" onkeyup="load_search()" name="search" id="search" autocomplete="off"/>
</div>
  
<form id="addForm">
    Name : <input type="text" name="name" id="name"><br><br>

    Age : <input type="number" name="age" id="age"><br><br>

    City : <input type="text" name="city" id="city"><br><br>

    <button type="button" onclick="submit_data()" id="new-submit">Submit</button>
</form>

<div id="error-message"></div>
<div id="success-message"></div>

<div id="modal">
    <div id="modal-form">
        <h2>Edit Form</h2>
        <form id="editForm">
        <input type="text" name="edit_id" id="edit_id" hidden>
        Name : <input type="text" name="edit_name" id="edit_name"><br><br>

        Age : <input type="number" name="edit_age" id="edit_age"><br><br>

        City : <input type="text" name="edit_city" id="edit_city"><br><br>

        <button type="button" onclick="submit_edit_data()" id="edit-submit">Submit</button>
    </form>
        <div id="close-btn" onclick="hide_modal()">X</div>
    </div>
</div>


<table id="show-data" border="1" width="100%" cellspacing="0" cellpadding="10px">
    <thead>
        <tr>
            <td>Name</td>
            <td>Age</td>
            <td>City</td>
            <td>Edit</td>
            <td>Delete</td>
        </tr>
    </thead>
    <tbody id="tbody">

    </tbody>
</table>

<script src="js/fetch.js"></script>
</body>
</html>

