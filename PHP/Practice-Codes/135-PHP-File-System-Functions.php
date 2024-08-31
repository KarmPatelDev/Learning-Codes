<?php

$file = fopen("uploaded_images/readme.txt", "a+");
// Modes : r, r+, w, w+, a, a+, x, x+, c, c+

// echo fread($file, 20); // 20 characters read
// echo fread($file, filesize("uploaded_images/readme.txt")); // all content

echo fgets($file); // return first line
echo " " . ftell($file) . " "; // return where the cursor lie

echo fgets($file);
echo " " . ftell($file) . " ";

fseek($file, 42); // curse go to 42 character
echo fgets($file);

echo fpassthru($file); // cursor to end of the file all read

rewind($file); // cursor go to start of file

while(!feof($file)){ // file end of file => it run until file end
    echo fgets($file) . "<br>";  
}

rewind($file);
while(!feof($file)){ // file end of file => it run until file end
    echo fgetc($file);  
}

echo "<pre>";
print_r(file("uploaded_images/readme.txt")); // it return array of file content it is not require fopen or anything else
echo "</pre>";

fwrite($file, "\n\nHere is a new Line"); // to write in file

fputs($file, "\n\nHere is a new Line"); //same as fwrite

ftruncate($file, 100); // it trucate all content after 100 characters

fclose($file); // close the file

?>