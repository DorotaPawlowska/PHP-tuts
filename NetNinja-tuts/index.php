<?php 

//functions 

function sayHello($name = 'shoun', $time = 'morning'){
    echo "good $time $name";
}

// sayHello('mario');
// sayHello();
sayHello('yoshi', 'night');


function formatProduct($product){
    // echo "{$product['name']} costs &{$product['price']} to buy <br />";
    return "{$product['name']} costs &{$product['price']} to buy <br />";
}

// $formatted = formatProduct(['name'=>'gold star', 'price'=>20]);
// echo $formatted;

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
