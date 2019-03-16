<?php
 
    #function - block of code

    function simpleFunction(){
        echo "Hello World" . '<br />';
    } 

    // simpleFunction();   

    function sayHello($name = 'Wolrd'){ // default param
        echo "Hello $name <br />"; 
    }

    // sayHello('Joe');
    // sayHello('Bob');
    // sayHello('Tim');

    function addNumbers($num1, $num2){
        return $num1 + $num2;
    }

    // echo addNumbers(2,3);

    $myNum = 10;

    function addFive($num){
        $num += 5;
    }

    function addTen(&$num){ // przekazanie prze referencję
        $num += 10;
    }

    addFive($myNum);
    echo "Value: $myNum <br />";
    addTen($myNum);
    echo "Value: $myNum <br />";


?>