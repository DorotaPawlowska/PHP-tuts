<?php 
// conditional statements

// $price = 20;

// if ($price < 10){
//     echo 'the condition is met';
// } elseif ($price < 30){
//     echo 'elseif condition met';
// } else {
//     echo 'codition not met';
// }

$products = [
    ['name' => 'shiny star', 'price' => 20],
    ['name' => 'green shell', 'price' => 10],
    ['name' => 'red shell', 'price' => 15],
    ['name' => 'gold coin', 'price' => 5],
    ['name' => 'lightning bolt', 'price' => 40],
    ['name' => 'banana skin', 'price' => 2]
];

foreach ($products as $product) {
    // and
    // if($product['price'] < 15  && $product['price'] > 2){
    //     echo $product['name'] . '<br />';
    // }

    //or
    // if($product['price'] > 20 || $product['price'] < 10){
    //     echo $product['name'] . '<br />';
    // }
}

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
    
    <div>
        <ul>
            <?php foreach($products as $product){ ?>
                <?php if($product['price'] > 15){ ?>
                    <li><?php echo $product['name']?></li>
                <?php }?>
            <?php }?>
        </ul>
    </div>

</body>
</html>
