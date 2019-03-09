<?php 
    //MySQLi or PDO - connect to DB
    $conn = mysqli_connect('localhost', 'shaun', 'qwerty', 'ninja_pizza');

    //check the connection
    if(!$conn){
        echo 'Connection error' . mysqli_connect_error();
    }
?>