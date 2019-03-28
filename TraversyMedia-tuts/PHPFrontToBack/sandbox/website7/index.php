<?php
 
    $path = '/dir0/dir1/myfile.php';
    $file = 'file1.txt';

    // return file name
    echo basename($path) . '<br>';

    echo basename($path, '.php') . '<br>';
 
    echo dirname($path) . '<br>';

    echo file_exists($file) . '<br>';
    echo file_exists('file2.txt') . '<br>';
    echo file_exists('test') . '<br>';

    echo realpath($file) . '<br>';

    echo is_file($file) . '<br>';
    echo is_file('test') . '<br>';

    echo is_writable($file) . '<br>';
    echo is_readable($file) . '<br>';

    echo filesize($file) . '<br>';

    // mkdir('testing');

    // remove dir if empty
    // rmdir('test');
    // rmdir('testing');

    // copy('file1.txt', 'file3.txt');

    // rename('file2.txt', 'myfile.txt');

    // unlink('myfile.txt');

    // echo file_get_contents($file) . '<br>';

    // echo file_put_contents($file, 'Goodbye World') . '<br>'; // echo file size

    $current = file_get_contents($file);

    $current .= ' Goodbye World ';

    // file_put_contents($file, $current);

    // $handle = fopen($file, 'r');
    // $data = fread($handle, filesize($file));
    // echo $data;
    // fclose($handle);

    $handle2 = fopen('file5.txt', 'w');
    $txt = "John Doe\n";
    fwrite($handle2, $txt);
    $txt = "Steve Smith";
    fwrite($handle2, $txt);
    fclose($handle2);




?>