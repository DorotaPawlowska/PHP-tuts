<?php
 
    if(isset($_GET['name'])){
        // print_r($_GET);
        $name = htmlentities($_GET['name']);
        // echo $name;
    }

    if(isset($_POST['name'])){
        // print_r($_POST);
        // $name = htmlentities($_POST['name']);
        // echo $name;
    }

    if(isset($_REQUEST['name'])){
        // print_r($_REQUEST);
        // $name = htmlentities($_REQUEST['name']);
        // echo $name;
    }

    // echo $_SERVER['QUERY_STRING'];
 
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
    <form method="GET" action="get_post.php">
        <div>
            <label for="name">Name</label><br>
            <input type="text" name="name">
        </div>
        <div>
            <label for="email">Email</label><br>
            <input type="text" name="email">
        </div>
        <input type="submit" value="Submit">
    </form>
    <ul>
        <li>
            <a href="get_post.php?name=Brad">Brad</a>
        </li>
        <li>
            <a href="get_post.php?name=Steve">Steve</a>
        </li>
    </ul>
    <h1>
        <?php      
            echo "{$name}'s Profile";
        ?>
    </h1>
</body>
</html>