<?php 

    //MySQLi or PDO - connect to DB
    $conn = mysqli_connect('localhost', 'shaun', 'qwerty', 'ninja_pizza');

    //check the connection
    if(!$conn){
        echo 'Connection error' . mysqli_connect_error();
    }


?>

<!DOCTYPE html>
<html>

    <?php include('templates/header.php'); ?>



    <?php include('templates/footer.php'); ?>

</html>