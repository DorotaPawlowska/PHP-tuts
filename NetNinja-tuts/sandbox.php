<?php 

//ternary operators

$score = 20;

// if($score > 40){
//     echo 'high score!';
// }else{
//     echo 'lowe score :(';
// }

// $val = $score > 40 ? 'high score!' : 'lowe score :(';
// echo $val;

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- <link rel="stylesheet" type="text/css" media="screen" href="main.css"> -->
    <!-- <script src="main.js"></script> -->
</head>
<body>
    
<p><?php echo $score > 40 ? 'high score!' : 'lowe score :('; ?></p>

</body>
</html>