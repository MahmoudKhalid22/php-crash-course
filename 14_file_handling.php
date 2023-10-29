<?php

   /*
        File handling is the ability to read and write files on the server.

        PHP has built in functions for reading and writing files.

   */


   $fileOutside = 'https://raw.githubusercontent.com/MahmoudKhalid22/oop-cpp/main/01-intro/README.md';

   $fileLocal = 'extra/users.txt';
   $file = 'extra/u.txt';

   if(file_exists($file)){
    // echo readfile($file);
    $handle = fopen($file,'r');

    $contents = fread($handle, filesize($file));

    fclose($handle);
    echo $contents;
   }else{

    $handleWriting = fopen($file,'w');
    $contents = 'Mahmoud' . PHP_EOL . "Moath" . PHP_EOL . "Ali" . PHP_EOL . "Yahia" . PHP_EOL . "Ibraheem";
    fwrite($handleWriting, $contents);

    fclose($handleWriting);

    echo $contents;


    // echo 'an error occured';
   }
?>