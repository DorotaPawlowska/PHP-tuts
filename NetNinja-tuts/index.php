<?php 

    define('NAME', 'Yoshi');
    
    // $name = 'Yoshi';
    $age = 30;

    // $name = 'Mario';
    // define('NAME', 'Mario');

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
    
    <h1>User Profile Page</h1>
    <div><?php echo NAME;?></div>
    <div><?php echo $age;?></div>

</body>
</html>
