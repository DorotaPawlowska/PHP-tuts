<?php
 
    $conn = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);

    if(mysqli_connect_errno()){
        echo 'faild to connect to mysql' . mysqli_connect_errno;
    }
 
?>