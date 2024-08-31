<?php

// getcwd => for current location
// chdir => for go to other directory
// scandir => see the files and folders in that directory

echo getcwd();

chdir("uploaded_images");

echo getcwd();

// $dir = "."; // current
$dir = ".."; // for go to back

echo "<pre>";
print_r(scandir($dir)); // => ascending order
print_r(scandir($dir), 1); // => descending order
echo "</pre>";



?>