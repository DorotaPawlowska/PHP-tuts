<?php 

//superglobal
// $_GET['name'], $_POST['name']

echo $_SERVER['SERVER_NAME'] . '<br />';
echo $_SERVER['REQUEST_METHOD'] . '<br />';
echo $_SERVER['SCRIPT_FILENAME'] . '<br />';
echo $_SERVER['PHP_SELF'] . '<br />';

// $_SESSION, $_COOKIE
// sessions

if(isset($_POST['submit'])){
    session_start();
    $_SESSION['name'] = $_POST['name'];

    header('Location: index.php');
}


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
    
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
        
        <input type="text" name="name">
        <input type="submit" name="submit" value="submit">
    
    </form>

</body>
</html>