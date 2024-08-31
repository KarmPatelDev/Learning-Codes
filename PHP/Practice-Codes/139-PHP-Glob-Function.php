<?php

// Search Files & Folders
// Search in subfolders
// Particular Format Files
// Search with Regular Expression
// glob(pattern, flags);
// pattern => Regular Expression

// NOTE => * in file means it is 0 or many character

/*
//Without Flag
echo "<pre>";
print_r(glob("*")); // to all files/folder it return array
echo "</pre>";

echo "<pre>";
print_r(glob("uploaded_images/*")); // particular file
echo "</pre>";

echo "<pre>";
print_r(glob("*.php")); // particular extension
echo "</pre>";

echo "<pre>";
print_r(glob("t*")); // start with t
echo "</pre>";

echo "<pre>";
print_r(glob("uploaded*")); // start with uploaded
echo "</pre>";

echo "<pre>";
print_r(glob("*images")); // images in between
echo "</pre>";

echo "<pre>";
print_r(glob("*1*.php")); // .php at last and 1 in between
echo "</pre>";

$arr = glob("[12]*"); // start with 1 or 2

foreach($arr as $filename){
    echo $filename . " Size : " . filesize($filename) . "<br>";
}
*/

echo "<pre>";
print_r(glob("*", GLOB_MARK)); // it print \ after the names
echo "</pre>";

echo "<pre>";
print_r(glob("z*", GLOB_NOCHECK)); // if file folder not exist then it print the pattern
echo "</pre>";

echo "<pre>";
print_r(glob("*", GLOB_ONLYDIR)); // return only folder
echo "</pre>";

echo "<pre>";
print_r(glob("{*.php,1*}", GLOB_BRACE)); // to serch many pattern first .php files/folders and then start with 1 files/folders
echo "</pre>";

echo "<pre>";
print_r(glob("{uploaded_images/*,1*, *.php}", GLOB_BRACE)); // to serch many pattern first .php files/folders and then start with 1 files/folders
echo "</pre>";

?>