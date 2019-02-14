<?php 

// ================ multidimenional arrays

$blogs = [
    ['title' => 'mario party', 'author' => 'mario', 'content' => 'lorem', 'likes' => 30],
    ['title' => 'mario kart cheats', 'author' => 'toad', 'content' => 'lorem', 'likes' => 25],
    ['title' => 'zelda hidden chests', 'author' => 'link', 'content' => 'lorem', 'likes' => 50] 
];

// print_r($blogs[1]['likes']);
// echo $blogs[2]['author'];
// echo count($blogs);

$blogs[] = ['title'=>'castle party', 'author'=>'peach', 'content'=>'lorem', 'likes'=>'100'];

// print_r($blogs);
$popped = array_pop($blogs);
print_r($popped);


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
