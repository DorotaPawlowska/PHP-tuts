<?php
 
    // substr()
 
    $output = substr('Hello', 1, 3);
    $output = substr('Hello', -2);
    // echo $output;

    // strlen()

    $output = strlen('Hello World');
    // echo $output;

    // strpos()

    $output = strpos('Hello World', 'o');
    // echo $output;

    // strrpos()

    $output = strrpos('Hello World', 'o');
    // echo $output;

    // trim()

    $text = 'Hello World              ';
    // var_dump($text);
    $trimmed = trim($text);
    // var_dump($trimmed);

    // strtoupper()

    $output = strtoupper('Hello World');
    // echo $output;

    // strtolower()

    $output = strtolower('Hello World');
    // echo $output;

    // ucwords()
    
    $output = ucwords('hello world');
    // echo $output;

    // str_replace()
    
    $text = 'Hello World';
    $output = str_replace('World', 'Everyone', $text);
    // echo $output;

    // is_String()

    $val = '22';
    $output = is_string($val);
    // echo $output;

    $values = array(true, false, null, 'abc', 33, '33', 22.4, '22.4', '', ' ', 0, '0');

    foreach ($values as $value) {
        if(is_string($value)){
            // echo "{$value} is a string<br />";
        }
    }

    // gzcompress()

    $string = "Lorem ipsum dolor sit amet consectetur, adipisicing elit. Tempore, ut optio adipisci provident porro quae sint unde quaerat dolore officia esse deleniti molestias architecto! Fuga delectus id enim odit hic! Lorem ipsum dolor sit amet consectetur, adipisicing elit. Sit earum minima, ducimus magni dicta assumenda veritatis atque labore sapiente neque sed aperiam facere, similique quasi. Debitis asperiores officia vitae accusamus. Lorem ipsum dolor sit amet consectetur adipisicing elit. Pariatur voluptate similique placeat ipsum autem necessitatibus. Praesentium, neque! Amet dolores ex iste eveniet ipsum cumque illum possimus? Dicta impedit a laboriosam? Lorem ipsum dolor sit amet consectetur adipisicing elit. Laudantium tenetur sit expedita doloremque dicta dolore ipsam aliquid, tempora, sequi sint harum placeat soluta? Nisi facilis repellat enim, perferendis magni et?";

    $compressed = gzcompress($string);
    echo $compressed;

    $original = gzuncompress($compressed);
    echo $original;








?>