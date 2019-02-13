<?php 

// ================ indexed arrays

$peopleOne = ['shaun', 'crystal', 'ryu'];
// $name = 'shaun';
// $name[1];
// echo $peopleOne[1];

$peopleTwo = array('ken', 'chun-li');
// echo $peopleTwo[1];

$ages = [20, 30, 40, 50];
// print_r($ages);
$ages[1] = 25;
// print_r($ages);
$ages[] = 60;
// print_r($ages);
array_push($ages, 70);
// print_r($ages);

// echo count($ages); // zliczanie elementów w tablicy

$peopleThree = array_merge($peopleOne, $peopleTwo);
// print_r($peopleThree);

// ================ associative arrays ( key & value pairs)

$ninjasOne = ['shaun'=>'black', 'mario'=>'orange', 'luigi'=>'brown'];
// echo $ninjasOne['mario'];
// print_r($ninjasOne);

$ninjasTwo = array('bowser'=>'green', 'peach'=>'yellow');
// print_r($ninjasTwo);

$ninjasTwo['toad'] ='pink';
$ninjasTwo['peach'] ='pink';
// print_r($ninjasTwo);
// echo count($ninjasOne);

$ninjasThree = array_merge($ninjasOne, $ninjasTwo);
print_r($ninjasThree);


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
