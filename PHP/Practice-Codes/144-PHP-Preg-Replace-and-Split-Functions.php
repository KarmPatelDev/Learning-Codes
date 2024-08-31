<?php

// preg_replace(pattern, replacement, string, limit); => find and replace
// preg_split(pattern, string, limit, flags); => split the string(like explode)

$string = "<h1>PHP is the web scripting php Language of choice.</h1>";

echo preg_replace("/php/i", "HTML", $string, 1) . "<br>"; // php -> html

echo preg_replace("/<.+?>/i", "", $string) . "<br>"; // <h1> or </h1> to ""

$string = "April 15, 2020"; // 15 -> 25
$pattern = "/(\w+) (\d+), (\d+)/i";
$replace = "$1 25, $3";
echo preg_replace($pattern, $replace, $string) . "<br>";

$string = "{startDate} = 1999-5-10"; // 10\5\1990 or also word replace
$pattern = array("/(19|20)(\d{2})-(\d{1,2})-(\d{1,2})/", "/^\s*{(\w+)}\s*=/");
$replace = array("$4/$3/$1$2", "$1 = ");
echo preg_replace($pattern, $replace, $string) . "<br>";

echo preg_quote("$5.99");  // it add the slash before characters that are use for make the regular expression

echo preg_quote("$5.99+*/$", "$"); // => It find that character and add backslash


$string = "PHP is the web scripting php Language of choice.";


$split = preg_split("/[\s+]/", $string);
echo "<pre>";
print_r($split);
echo "</pre>";
$split = preg_split("/[\s+]/", $string, 3);
echo "<pre>";
print_r($split);
echo "</pre>";
$split = preg_split("/(web|php)/", $string); // NOTE : It remove the word that add in the pattern
echo "<pre>";
print_r($split);
echo "</pre>";

//Most Used In
$string = "https://www.mrkarmpatel.com/post/comments?query=1&reply=25";
$split = preg_split("/(\/|\?|&)/", $string, -1, PREG_SPLIT_NO_EMPTY); 
// -1 all record show, PREG_SPLIT_NO_EMPTY => it remove the empty space
echo "<pre>";
print_r($split);
echo "</pre>";

$string = "PHP is the web scripting php Language of choice.";
$split = preg_split("/[\s+]/", $string, -1, PREG_SPLIT_OFFSET_CAPTURE);
// PREG_SPLIT_OFFSET_CAPTURE => it use to know the from which portions the spliting occur
echo "<pre>";
print_r($split);

?>