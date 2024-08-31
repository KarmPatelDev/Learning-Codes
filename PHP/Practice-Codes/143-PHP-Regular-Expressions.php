<?php

// Quantifiers in RegEx
// * => 0 or more
// + => 1 or more
// ? => 0 or one
// {3} => Exact Number
// {3, 5} => Range of number (minimum, maximum)
// {3, } => minimum number to infinite

$string = "PHP is the web wb scripting 52222223 53 php + | . ? /  \ phplang_uage o-f choice121ac ac 2016 2017 2056 2030 bat cat mat rat";

$exp = preg_match_all("/52+3/i", $string, $array); var_dump($exp); // first char 5 and then 1 or more time 2 and then last char 3
echo "<pre>";
print_r($array);
echo "</pre>";
$exp = preg_match_all("/52*3/i", $string, $array); var_dump($exp); // first char 5 and then 0 or more time 2 and then last char 3
echo "<pre>";
print_r($array);
echo "</pre>";
$exp = preg_match_all("/\d+/i", $string, $array); var_dump($exp); // for numeric number not one character only
echo "<pre>";
print_r($array);
echo "</pre>";
$exp = preg_match_all("/\d+ac/i", $string, $array); var_dump($exp); // for numeric number not one character only that last has ac
$exp = preg_match_all("/\d*ac/i", $string, $array); var_dump($exp); // for word that has last has ac and before that has number and also it can't be present
$exp = preg_match_all("/\d+[-]\d+[-]\d+/i", $string, $array); var_dump($exp); // we can use for mobile number for use hypen(-)
$exp = preg_match_all("/we?b/i", $string, $array); var_dump($exp); // ? means before this char at that point it can be present or it can't be present but not other word
$exp = preg_match_all("/jan(uanry)?/i", "jan january", $array); var_dump($exp); // ? means before this group of charector in brackets at that point it can be present or it can't be present but not other word
// => () => for group the character
$exp = preg_match_all("/Aug(ust)? 22(nd)?/i", "August 22nd August 22 Aug 22nd  August 22", $array); var_dump($exp);
$exp = preg_match_all("/jan(uanry)?/i", "jan january", $array); var_dump($exp);
$exp = preg_match_all("/52{6}3/i", $string, $array); var_dump($exp); // first char 5, then 2 is exact 6 times and then char 3
$exp = preg_match_all("/52{0,8}3/i", $string, $array); var_dump($exp); // first char 5, then 2 is 0 to 8 times repeate  and then char
$exp = preg_match_all("/52{0,}3/i", $string, $array); var_dump($exp); // first char 5, then 2 0 to infinite times repeate and then char 3


// Greedy and Lazy Metch in RegEx
// *n => Greedy Match => it is match with last n(character) from all the match character
// +n => Greedy Match
// *?n => Lazy Match => it is match with first n(character) from all the match character
// +?n => Lazy Match

$string = "<h5>PHP is the web wb scripting '52222223' 53 php + | . ? /  \ 'phplang' _uage o-f choice121ac ac 2016 2017 2056 2030 bat cat mat rat</h5>";

$exp = preg_match_all("/s[a-z]*i/i", $string, $array); var_dump($exp); // it select the characters until last find character that match
echo "<pre>";
print_r($array);
echo "</pre>";
$exp = preg_match_all("/s[a-z]*?i/i", $string, $array); var_dump($exp); // it select the characters until first find character that match
echo "<pre>";
print_r($array);
echo "</pre>";
$exp = preg_match_all("/<.*?>/i", $string, $array); var_dump($exp); // it select < char to the > character that is first from all the others
echo "<pre>";
print_r($array);
echo "</pre>";
$exp = preg_match_all("/<.*>/i", $string, $array); var_dump($exp); // it select < char to the > character that is last from all the others
echo "<pre>";
print_r($array);
echo "</pre>";
$exp = preg_match_all("/'.+?'/i", $string, $array); var_dump($exp); // it select quoted words
echo "<pre>";
print_r($array);
echo "</pre>";
$exp = preg_match_all("/^\w/i", $string, $array); var_dump($exp); // it select first word is (alphabet, character, number)
echo "<pre>";
print_r($array);
echo "</pre>";
$exp = preg_match_all("/^\w$/i", $string, $array); var_dump($exp); // it select first word and last word is (alphabet, character, number)
echo "<pre>";
print_r($array);
echo "</pre>";

$string = "<h5>PHP is the web wb scripting '52222223' 53 php + | . ? /  \ 'phplang' _uage o-f choice121ac ac 2016 2017 2056 2030 bat cat mat rat</h5> file.txt file1.xlsx file1karm_.docx file.pptx I like toyota and honda I like toyota and honda and toyota I like toyota and honda and honda
";

$exp = preg_match_all("/file\w*\.(txt|xlsx|docx|pptx)/i", $string, $array); var_dump($exp); 
echo "<pre>";
print_r($array);
echo "</pre>";
$exp = preg_match_all("/I like (toyota) and (honda) and $1/i", $string, $array); var_dump($exp); // \1 => for first group repeat => We can also use $ instead of \ => if not work then check 144.php
echo "<pre>";
print_r($array);
echo "</pre>";
$exp = preg_match_all("/I like (toyota) and (honda) and $2/i", $string, $array); var_dump($exp); // \2 => for second group repeat
echo "<pre>";
print_r($array);
echo "</pre>";

// Assertion in Regular Expression
// ?=n => Positive Lookahead => it is look left side pattern
// ?!n => Negative Lookahead
// ?<= => Positive Lookbehind => it is look right side pattern
// ?!= => Negative Lookbehind
// ?<! => Negative Lookbehind

$string = "bill paid bill not paid bill paid bill not paid 100 USD 250 JPY 900 EUR free course paid course free course paid course";

$exp = preg_match_all("/bill(?=\spaid)/i", $string, $array); var_dump($exp); // it select all bill that has paid after (only print bill)
echo "<pre>";
print_r($array);
echo "</pre>";
$exp = preg_match_all("/\d+(?=\sUSD)/i", $string, $array); var_dump($exp); // it select number that has USD after (only print number)
echo "<pre>";
print_r($array);
echo "</pre>";
$exp = preg_match_all("/bill(?!\spaid)/i", $string, $array); var_dump($exp); // it select all bill that has not exact paid after (only print bill)
echo "<pre>";
print_r($array);
echo "</pre>";
$exp = preg_match_all("/\d+(?!\sUSD)/i", $string, $array); var_dump($exp); // it select number that has not exact USD after (only print number)
echo "<pre>";
print_r($array);
echo "</pre>";
$exp = preg_match_all("/bill(?!=\spaid)/i", $string, $array); var_dump($exp); // it select all bill that has exact and not exact paid after (only print bill)
echo "<pre>";
print_r($array);
echo "</pre>";
$exp = preg_match_all("/\d+(?!=\sUSD)/i", $string, $array); var_dump($exp); // it select number that has exact and not exact USD after (only print number)
echo "<pre>";
print_r($array);
echo "</pre>";

$exp = preg_match_all("/(?<=free\s)course/i", $string, $array); var_dump($exp); // it select free course not paid(show only course)
echo "<pre>";
print_r($array);
echo "</pre>";

$exp = preg_match_all("/(?<!free\s)course/i", $string, $array); var_dump($exp); // it select other course instead of free(show only course)
echo "<pre>";
print_r($array);
echo "</pre>";