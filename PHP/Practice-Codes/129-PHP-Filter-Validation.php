<?php  

// Filter Validation : filter_var(var, filtername, options/flag);
// var => variable name
// filtername => FILTER_VALIDATE_INT such like many other 
// options/flag => it is depend on filtername

/*
$var = 29; // => if true pass then consider integer and if false then it is not a integer 
 
// var_dump(filter_var($var, FILTER_VALIDATE_INT));
// echo "<br>" . filter_var($var, FILTER_VALIDATE_INT) . "<br>"; // => if validate then value is printed and if not then it is not show and it is false bool value

if(filter_var($var, FILTER_VALIDATE_INT)){
    echo "It is Integer" . "<br>";
}

// problem -: in this 0 not count as integer so use below for this
if(filter_var($var, FILTER_VALIDATE_INT) || filter_var($var, FILTER_VALIDATE_INT) == 0){
    echo "It is Integer" . "<br>";
}

//for check number between the range use below for this
// if(filter_var($var, FILTER_VALIDATE_INT, array("options" => array("min_range" => 20, "max_range" => 30)))){ // range => [20, 30]
//     echo "It is Integer" . "<br>";
// }
//same as upper
$options = array(
              "options" => array(
                "min_range" => 20,
                "max_range" => 30
              )
);
if(filter_var($var, FILTER_VALIDATE_INT, $options)){ // range => [20, 30]
    echo "It is Integer" . "<br>";
}
*/

/*
$var = 20.9; // it get => with decimal or without decimal => if true pass then consider integer and if false then it is not a integer 

$options = array(
    "options" => array(
      "min_range" => 20,
      "max_range" => 30
    )
);
if(filter_var($var, FILTER_VALIDATE_FLOAT, $options)){ // range => [20, 30]
echo "It is Float" . "<br>";
}
*/

/*
$var = "true"; // => we can also use "yes", "off", "no", 1, "1", 0, "0","false"

// flag => FILTER_NULL_ON_FAILURE => return null on failure not true or false (string etc)

var_dump(filter_var($var, FILTER_VALIDATE_BOOLEAN, FILTER_NULL_ON_FAILURE));
if(filter_var($var, FILTER_VALIDATE_BOOLEAN)){ 
echo "It is Boolean" . "<br>";
}
*/

/*
$var = "hello@karm.com"; 

var_dump(filter_var($var, FILTER_VALIDATE_EMAIL));
if(filter_var($var, FILTER_VALIDATE_EMAIL)){ 
echo "It is Email" . "<br>";
}
*/

/*
// $var = "karm.com";  => not a url
$var = "http://karm.com";

var_dump(filter_var($var, FILTER_VALIDATE_URL));
if(filter_var($var, FILTER_VALIDATE_URL)){ 
echo "It is URL" . "<br>";
}

$var = "http://karm.com/test";
if(filter_var($var, FILTER_VALIDATE_URL, FILTER_FLAG_PATH_REQUIRED)){ 
    echo "It is URL with path" . "<br>";
}

$var = "http://karm.com/test/page.php?A=1&B=3";
if(filter_var($var, FILTER_VALIDATE_URL, FILTER_FLAG_QUERY_REQUIRED)){ 
    echo "It is URL with query" . "<br>";
}
*/

/*
// $var = "http://karm.com";
// $var = "192.168.1";
// $var = "192.168.1.800"; // number ratio not match (800 invalid)
$var = "192.168.1.100";

//to check the ip address is valid or not
var_dump(filter_var($var, FILTER_VALIDATE_IP)); 
if(filter_var($var, FILTER_VALIDATE_IP)){ 
echo "It is Valid IP" . "<br>";
}
*/

/*
// $var = "192.168.1.100";
// $var = "FA-F9-DD-B2";
$var = "FA-F9-DD-B2-5E-0D";

// MAC(Media Access Control) Address => every computer has unique id(mac address),
//to check the mac address is valid or not
var_dump(filter_var($var, FILTER_VALIDATE_MAC)); 
if(filter_var($var, FILTER_VALIDATE_MAC)){ 
echo "It is Valid Mac Address" . "<br>";
}
*/

/*
 FILTER_VALIDATE_REGEXP //=> it is also a filter validation
*/
?>