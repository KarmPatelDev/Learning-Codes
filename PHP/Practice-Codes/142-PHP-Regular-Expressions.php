<?php
// Technique for parsing and extracting data from text
// preg_match and preg_match_all
// preg_match(pattern, string, array);
// pattern => Regular Expression => /pattern/modifiers
// array => it return the serch matched as a array otherwise true or false if not used

// How to use for Regular Expression Testing(Regex101.com)

$string = "PHP is the web scripting 522 phplanguage of choice121";

$exp = preg_match("/PHP/", $string); var_dump($exp); //case sensitive
$exp = preg_match("/php/i", $string); var_dump($exp); //case insensitive

// m for multiple line and g for global [all search like preg_match_all]

$exp = preg_match_all("/php/i", $string, $array); var_dump($exp); // it find multiple time and return array
echo "<pre>";
print_r($array);
echo "</pre>";
$exp = preg_match_all("/php|web/i", $string, $array); var_dump($exp); // find multiple iterms
echo "<pre>";
print_r($array);
echo "</pre>";
$exp = preg_match_all("/p|w|o/i", $string, $array); var_dump($exp); // find p, q, o
echo "<pre>";
print_r($array);
echo "</pre>";
$exp = preg_match("/522/i", $string); var_dump($exp);
$exp = preg_match_all("/p|121|522/i", $string, $array); var_dump($exp); // find p, 121, 522
echo "<pre>";
print_r($array);
echo "</pre>";
$exp = preg_match_all("/[pwqi]/i", $string, $array); var_dump($exp); // find p, w, q, i
echo "<pre>";
print_r($array);
echo "</pre>";
$exp = preg_match_all("/[^pwqi]/i", $string, $array); var_dump($exp); // find all characters but not p, w, q, i
echo "<pre>";
print_r($array);
echo "</pre>";
$exp = preg_match_all("/[a-d]/i", $string, $array); var_dump($exp); // find a to d
echo "<pre>";
print_r($array);
echo "</pre>";
$exp = preg_match_all("/[a-dA-d]/i", $string, $array); var_dump($exp); // same as upper without using i for insensitivity
echo "<pre>";
print_r($array);
echo "</pre>";
$exp = preg_match_all("/[0-9]/i", $string, $array); var_dump($exp); // find 0 to 9
echo "<pre>";
print_r($array);
echo "</pre>";
$exp = preg_match_all("/[^a-j0-9]/i", $string, $array); var_dump($exp); // find all character but not a to j and 0 to 9
echo "<pre>";
print_r($array);
echo "</pre>";
$exp = preg_match_all("/[^0-5]/i", $string, $array); var_dump($exp); // find all character but not 0 to 5
echo "<pre>";
print_r($array);
echo "</pre>";


$string = "PHP is the web scripting 522 phplang_uage o-f choice121 2016 2017 2056 2030 bat cat mat rat";

$exp = preg_match_all("/choice[123]/i", $string, $array); var_dump($exp); // first word choice and then one char from 1, 2, 3
$exp = preg_match_all("/choice[^4-7]/i", $string, $array); var_dump($exp); // first word choice and then one char not from 4 to 7
$exp = preg_match_all("/20[0-9][0-9]/i", $string, $array); var_dump($exp); // first two 20 and then two char from 0 to 9
echo "<pre>";
print_r($array);
echo "</pre>";
$exp = preg_match_all("/w[abcdef]b/i", $string, $array); var_dump($exp); // first w second from a,b,c,d,e,f and then one char b
$exp = preg_match_all("/[a-z]at/i", $string, $array); var_dump($exp); // first char a to z and then two char are a and t
echo "<pre>";
print_r($array);
echo "</pre>";

$string = "PHP is the web scripting 522 + | . ? /  \ phplang_uage o-f choice121 2016 2017 2056 2030 bat cat mat
rat";

// =>  for meta charactor
$exp = preg_match_all("/\w/i", $string, $array); var_dump($exp); // \w => select alphabetic, numeric, underscore
$exp = preg_match_all("/\W/i", $string, $array); var_dump($exp); // \W => ignore alphabetic, numeric, underscore
$exp = preg_match_all("/\d/i", $string, $array); var_dump($exp); // \d => select numeric value
$exp = preg_match_all("/\D/i", $string, $array); var_dump($exp); // \D => ignore numeric value
$exp = preg_match_all("/\s/i", $string, $array); var_dump($exp); // \s => select spaces
$exp = preg_match_all("/\S/i", $string, $array); var_dump($exp); // \S => ignore spaces
$exp = preg_match_all("/\bbat\b/i", $string, $array); var_dump($exp); // \b => boundary selector => it select only bat that is alone
$exp = preg_match_all("/ph./i", $string, $array); var_dump($exp); // dot(.) => one charactor but we don't know 
$exp = preg_match_all("/\bph.\b/i", $string, $array); var_dump($exp); // Note - we can't ignore that char(like space or not character)
$exp = preg_match_all("/.at/i", $string, $array); var_dump($exp); // first char any one then a and t
echo "<pre>";
print_r($array);
echo "</pre>";

// => \ and then character => for find that words that are use to make regular expression( ., ?, (, ), [, ], +, *, $, ^, |, /)
$exp = preg_match_all("/\+/i", $string, $array); var_dump($exp); // find plus(+)
$exp = preg_match_all("/\./i", $string, $array); var_dump($exp); // find dot(.)
$exp = preg_match_all("/\//i", $string, $array); var_dump($exp); // for forward slash /
// \n => for tab => \n => for newline => \v => for verticle tab


?>