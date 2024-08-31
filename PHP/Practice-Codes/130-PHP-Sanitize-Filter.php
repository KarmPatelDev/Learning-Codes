<?php

// It is resolve the incorrect variable 
// Sanitize Filter : filter_var(var, filtername, flag);
// var => variable name
// filtername => FILTER_SANITIZE_EMAIL such like many other 
// flag => it is depend on filtername

/*
$var = "hel  lo(.karm)@ka//rm.com"; 
// $var = "hel  lo(.karm)@ka//rm/com";  // => it can't replace or add the word so it is not sanitize '.' is not here

echo filter_var($var, FILTER_SANITIZE_EMAIL);
$var = filter_var($var, FILTER_SANITIZE_EMAIL);

if(filter_var($var, FILTER_VALIDATE_EMAIL)){ 
 echo "<br>" . "It is Email" . "<br>";
}
*/

/*
$var = "http://hel  lo(.karm)^&ka//rm.com";  // spacial character not remove
// $var = "http:/hel  lo(.karm)ka//rm/com";  // => it can't replace or add the word so it is not sanitize one slash is not there after http

echo filter_var($var, FILTER_SANITIZE_URL);
$var = filter_var($var, FILTER_SANITIZE_URL);

if(filter_var($var, FILTER_VALIDATE_URL)){ 
 echo "<br>" . "It is URL" . "<br>";
}
*/

/*
// $var = 88.6; // => remove . 
// $var = "abcd45^*&#@^+*-/%"; // => + - after the number then it is not int(sanitize but not int)
// $var = "abc-d+45^*&#@*^/%"; // =>  it is not int(sanitize but not int)
$var = "abcd+45^*&#@*^/%";
// $var = "ABC"; // => it can't sanitize

echo filter_var($var, FILTER_SANITIZE_NUMBER_INT);
$var = filter_var($var, FILTER_SANITIZE_NUMBER_INT);

if(filter_var($var, FILTER_VALIDATE_INT)){ 
 echo "<br>" . "It is Integer" . "<br>";
}
*/

/*
$var ="-abc^^8,888.6E"; 

echo filter_var($var, FILTER_SANITIZE_NUMBER_FLOAT) . "<br>";
echo filter_var($var, FILTER_SANITIZE_NUMBER_FLOAT, FILTER_FLAG_ALLOW_FRACTION) . "<br>"; // => flag for not remove the dot
echo filter_var($var, FILTER_SANITIZE_NUMBER_FLOAT, FILTER_FLAG_ALLOW_THOUSAND) . "<br>"; // => flag for not remove the commas
echo filter_var($var, FILTER_SANITIZE_NUMBER_FLOAT, FILTER_FLAG_ALLOW_SCIENTIFIC) . "<br>"; // => flag for not remove the e or E
$var = filter_var($var, FILTER_SANITIZE_NUMBER_FLOAT, FILTER_FLAG_ALLOW_FRACTION);

if(filter_var($var, FILTER_VALIDATE_FLOAT)){ 
 echo "<br>" . "It is Float" . "<br>";
}
*/

?>