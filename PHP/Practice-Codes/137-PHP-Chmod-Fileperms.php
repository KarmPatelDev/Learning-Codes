<?php

// Chmod => for give the permissions to file(works only with Linux/Unix/Mac OS <= Server)
// Syntax => Chmod(filename, mode)
// Fileperms => to see the permissions
// Syntax => fileperms()
// for read, write and execute three categories are there:
    // user => owner
    // group => group of user
    // world => visitors
// Symbolic Notations
// read, write, execute => rwx
// read, write => rw-
// read => r--
// We have to convert in the octal notation so, read = 4, write = 2, execute = 1, - = 0
// read, write, execute => 7
// read, write => 6
// read => 4
// we write 764 then 7 => represent user, 6 => represent group, 4 => represent world

echo fileperms("uploaded_images/readme.txt"); // return permissions in code form

echo decoct(fileperms("uploaded_images/readme.txt")); // convert in octal form => last four are important

echo substr(decoct(fileperms("uploaded_images/readme.txt")), 2);

Chmod("uploaded_images/readme.txt", 0600); // it work on the linux, unix server

echo substr(decoct(fileperms("uploaded_images/readme.txt")), 2);



?>