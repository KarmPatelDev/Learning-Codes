<?php
// it reduce the lines that we use fopen, fread, fwrite, fclose
// file_put_contents(filename, data, mode, context)
// mode => FILE_APPEND, LOCK_EX(Security Purpose => lock the file)
// context => extra information
// file_get_contents(filename, include_path, context, start, max_length)
// include_path write true or false (if your file is in include that define in php.ini)
// context => extra information
// start => where to read
// max_length => how many characters read

echo file_put_contents("uploaded_images/readme.txt", "Hello Guys", FILE_APPEND);  /// it show how many new characters added

echo file_put_contents("uploaded_images/readme.txt", "Hello Guys", FILE_APPEND | LOCK_EX); //use both

echo file_get_contents("uploaded_images/readme.txt");

echo file_get_contents("uploaded_images/readme.txt", FALSE, NULL, 0, 100); // 0 to 100

?>