<?php 

// variable scope

// local variables
function myFunc(){
    $price = 10;
    echo $price;
}

// myFunc();
// echo $price;


function myFuncTwo($age){
    echo $age;
}

// myFuncTwo(25);
// echo $age;

// global variables

$name = 'mario';

// function sayHello(){
//     global $name;
//     $name = 'youshi';
//     echo "hello $name";
// }

// sayHello();
// echo $name;

function sayBye(&$name){ // referencja
    $name = "wario";
    echo "bye $name";
}

sayBye($name);
echo $name;


?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>PHP files</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>

</body>
</html>
