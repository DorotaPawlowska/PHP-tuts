<?php
    session_start();

    $_SESSION['name'] = 'John Doe';

    $name = $_SESSION['name'];
    $email = $_SESSION['email'];
 
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>PHP page 2</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
    <h5>thank you <?php echo $name; ?>, you have subscribed with the email <?php echo $email; ?></h5>
    <a href="page3.php">go to page 3</a>
</body>
</html>