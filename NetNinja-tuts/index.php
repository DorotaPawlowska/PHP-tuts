<?php 

    //MySQLi or PDO - connect to DB
    $conn = mysqli_connect('localhost', 'shaun', 'qwerty', 'ninja_pizza');

    //check the connection
    if(!$conn){
        echo 'Connection error' . mysqli_connect_error();
    }

    // write query for all pizzas
    $sql = 'SELECT title, ingredients, id FROM pizzas';

    //make query and get results
    $result = mysqli_query($conn, $sql);

    //fetch the resulting rows as an array
    $pizzas = mysqli_fetch_all($result, MYSQLI_ASSOC);

    // good practice for cleaning after connection to DB
    // free result from memory
    mysqli_free_result($result);
    //close connection
    mysqli_close($conn);


    print_r($pizzas);

?>

<!DOCTYPE html>
<html>

    <?php include('templates/header.php'); ?>



    <?php include('templates/footer.php'); ?>

</html>