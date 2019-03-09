<?php 

    // single line
    # single line
    /* multi line */

    #variables
    /* 
        - prefix $
        - start with a letter or an underscore
        - only letters, num and underscores,
        - case sensitive
    */

    #data types
    /* 
        Strings
        Integers
        Floats
        Booleans
        Arrays
        Objects
        NULL
        Resource
    */

    $output = 'Hello World!';
    $num1 = 4;
    $num2 = 10;
    $sum = $num1 + $num2;

    $string1 = 'Hello';
    $string2 = 'World!';
    $greeding = $string1 . ' ' . $string2 . '!';
    $greeding2 = '$string1 $string2';
    $greeding3 = "$string1 $string2";

    $string3 = 'They\'re Here';
    $string4 = "They're Here";

    $float1 = 4.4;
    $bool1 = true;

    #Constant

    define('GREETING', 'Hello Everyone', true); // 3 parametr
    // echo GREETING;
    echo greeting;

    echo '<br />' . $sum;
    echo '<br />' . $output;
    echo '<br />' . $greeding;
    echo '<br />' . $greeding2;
    echo '<br />' . $greeding3;
    echo '<br />' . $string3;
    echo '<br />' . $string4;

    // print 'hello world';

?>