<?php
    session_start();

    $name = isset($_SESSION['name']) ? $_SESSION['name'] : 'Guest';
    $email = isset($_SESSION['email']) ? $_SESSION['email'] : 'Not subscribed';

    print_r($_SESSION);
 
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>PHP page 3</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
    <h1>hello <?php echo $name; ?></h1>
</body>
</html>