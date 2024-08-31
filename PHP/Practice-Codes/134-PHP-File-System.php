<?php

// File System Function -: It use to create file or folder , read the file or folder, all we change the permission and get file information in the server

$file = "uploaded_images/readme.txt";
// echo readfile($file); // => it also return number at last that is the total bytes(total characters)

if(file_exists($file)){ // => if file exists then it is go inside
    echo readfile($file); 

    copy($file, "newfile.txt"); // => copy the file

    rename("newfile.txt", "oldfile.txt"); // => rename

    unlink("oldfile.txt"); // => remove the file
    // delete("oldfile.txt"); // => delete the file, same as upper => it is not work now

    if(!file_exists("uploaded_images/textfile")){
        mkdir("uploaded_images/textfile"); // => make directory
    }

    rmdir("uploaded_images/textfile"); // => remove directory

    echo "<br>" . filesize($file) . "<br>" . filetype($file) . "<br>";

    echo filetype("uploaded_images") . "<br>"; // => type of file like file, dir

    echo realpath($file); // => return full path of file
    
    echo "<pre>";
    print_r(pathinfo($file)); // => it is return array of file and path info
    echo "</pre>";

    $realpathoffile = realpath($file);

    echo "<pre>";
    print_r(pathinfo($realpathoffile)); // => it is return array of file and path
    echo "</pre>";

    echo "<pre>";
    print_r(pathinfo($file, PATHINFO_DIRNAME)); // => for only one info gather from pathinfo
    print_r(pathinfo($file, PATHINFO_FILENAME));
    print_r(pathinfo($file, PATHINFO_EXTENSION));
    print_r(pathinfo($file, PATHINFO_BASENAME));
    echo "</pre>";

    echo "<br>" . basename($realpathoffile);
    echo "<br>" . basename($realpathoffile, ".txt"); // => it remove the extension

    echo "<br>" . dirname($file); // it return a parent directory name
    echo "<br>" . dirname($realpathoffile);
    echo "<br>" . dirname($realpathoffile, 2);  // => two level(grandparent directory)
}


?>