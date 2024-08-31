<?php
// it check the value is match with datatype or not. It return true(1) or false(0).

// $var = 88;
// $var = 88.5;
// $var = '88.8';
// $var = ' ';
// $var = 'null';
// $var = 'karm';
// $var = 0;
// $var = null;
$var = array('a', 'b');
function test(){}


// check the integer
// var_dump(is_int($var));
if(is_int($var)){echo "integer<br>";}
if(is_integer($var)){echo "integer<br>";}
if(is_long($var)){echo "long integer<br>";}

// check the decimal number
// var_dump(is_float($var));
if(is_float($var)){echo "float<br>";}
if(is_double($var)){echo "double<br>";}
// if(is_real($var)){echo "real<br>";} => Now it is depricated => not work after 8.0.0

// check it is number or not (decimal or without decimal) => if quotes are there then also it show numeric
if(is_numeric($var)){echo "numeric<br>";}

// check the string
if(is_string($var)){echo "string<br>";}

// check the boolean
if(is_bool($var)){echo "bool<br>";} // => we can't use 0 or 1

// check the null
if(is_null($var)){echo "null<br>";} // 'null', ' ' => they are string

// check the array
if(is_array($var)){echo "array<br>";}

// check thaat we count the variable like array
if(is_countable($var)){echo "countable<br>";}

// it return true for int, float, numeric, bool, string and false for array, object
if(is_scalar($var)){echo "scalar<br>";}

// it check that the variable name is function name or not
if(is_callable('test')){echo "scalar<br>";}

?>