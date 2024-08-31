<?php

/*
// We can use addSlashes function instead of these
// it is add slash to the special character ", \ etc
// for securing from SQL injection in text box
$var = "Karm's \Car";
$var = 'Karm"s \Car';
// echo filter_var($var, FILTER_SANITIZE_MAGIC_QUOTES); // => it is depricated after 8.0.0
echo filter_var($var, FILTER_SANITIZE_ADD_SLASHES);
*/

/*
$var = '<h1>Karm"s @ & \Car<h1> ë';
echo filter_var($var, FILTER_SANITIZE_STRING);
echo filter_var($var, FILTER_SANITIZE_STRING, FILTER_FLAG_ENCODE_AMP); // it use entity code of &(view in source it shows &#38;)
echo filter_var($var, FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH); // it remove the word there ASCII is higher then 127
echo filter_var($var, FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_LOW); // it remove the word there ASCII is 0 to 31
*/

/*
$var = '& KArm Patel ë';
echo filter_var($var, FILTER_SANITIZE_ENCODED, FILTER_FLAG_STRIP_HIGH); // it convert the signs(characters) in encoded form and also remove the word there ASCII is higher then 127
// echo filter_var($var, FILTER_SANITIZE_ENCODED, FILTER_FLAG_ENCODE_HIGH); // it encode the special characters => it is default behaviour
*/

/*
$var = '<h1>Karm& <h1>';
echo filter_var($var, FILTER_SANITIZE_SPECIAL_CHARS); // => it is conver the special character to entity code
*/

?>