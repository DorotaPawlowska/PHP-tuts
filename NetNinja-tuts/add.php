<?php 

    // if(isset($_GET['submit'])){
    //     echo $_GET['email'];
    //     echo $_GET['title'];
    //     echo $_GET['ingredients'];
    // }

    if(isset($_POST['submit'])){

        //check email
        if(empty($_POST['email'])){
            echo 'an email is required <br />';
        }else{
            $email = $_POST['email'];
            if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
                echo "email must be a valid email address";
            }
        }

        //check title
        if(empty($_POST['title'])){
            echo 'an title is required <br />';
        }else{
            $title = $_POST['title'];
            if(!preg_match( '/^[a-zA-Z\s]+$/', $title)){
                echo 'title must be letters and spaces only';
            }
        }

        //check list of ingre
        if(empty($_POST['ingredients'])){
            echo 'an ingredients is required <br />';
        }else{
            $ingredients = $_POST['ingredients'];
            if(!preg_match( '/^([a-zA-Z\s]+)(,\s*[a-zA-Z\s]*)*$/', $ingredients)){
                echo 'ingredients must be a comma separated list';
            }
        }
    } // end of the post check

?>

<!DOCTYPE html>
<html>

    <?php include('templates/header.php'); ?>

    <section class="container grey-text">
        <h4 class="center">Add a Pizza</h4>
        <form action="add.php" method="POST" class="white">
            <label for="">Your Email:</label>
            <input type="text" name="email">
            <label for="">Pizza title:</label>
            <input type="text" name="title">
            <label for="">Ingredients (comma separated):</label>
            <input type="text" name="ingredients">
            <div class="center">
                <input type="submit" name="submit" value="submit" class="btn brand z-depth-0">
            </div>
        </form>
    </section>

    <?php include('templates/footer.php'); ?>

</html>