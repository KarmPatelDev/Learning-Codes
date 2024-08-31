<?php

$file = "uploaded_images/readme.txt";

if(is_file($file)){ // check file is exist
    echo "yes it is file <br>";
}

if(is_dir("uploaded_images")){ // check folder is exist
    echo "yes it is folder <br>";
}

if(is_writable("uploaded_images/readme.txt")){ // check file is writable or not
    echo "yes it is writable file <br>";
}

if(is_readable("uploaded_images/readme.txt")){ // check file is readable or not
    echo "yes it is readable file <br>";
}

if(is_executable("uploaded_images/readme.txt")){ // check file is executable or not
    echo "yes it is executable file <br>";
}

?>
