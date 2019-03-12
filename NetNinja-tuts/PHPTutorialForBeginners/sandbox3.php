<?php
  
    // file system - part 2

    $file = 'quotes.txt';

    // opening a file for reading
    // $handle = fopen($file, 'r'); // only read
    // $handle = fopen($file, 'r+'); // write to a file
    $handle = fopen($file, 'a+'); // write at end of a file

    // read the file
    // echo fread($handle, filesize($file));
    // echo fread($handle, 112);

    // read a single line
    // echo fgets($handle);
    // echo fgets($handle);

    // read a single character
    // echo fgetc($handle);
    // echo fgetc($handle);

    // write to a file
    // fwrite($handle, "\nEverything popular is wrong.");

    fclose($handle);

    unlink($file);


?>