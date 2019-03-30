<?php
 
    require('config/config.php');
    require('config/db.php');

    if(isset($_POST['submit'])){
        $title = mysqli_real_escape_string($conn, $_POST['title']);
        $body = mysqli_real_escape_string($conn, $_POST['body']);
        $author = mysqli_real_escape_string($conn, $_POST['author']);

        $query = "INSERT INTO posts(title, author, body) VALUES('$title', '$author', '$body')";

        if(mysqli_query($conn, $query)){
            header('Location: ' . ROOT_URL . '');
        } else {
            echo 'error: ' . mysqli_error($conn);
        }
    }
 
?>

<?php include('inc/header.php'); ?>
    <div class="container">
        <h1>add post</h1>
        <form action="<?php $_SERVER['PHP_SELF']; ?>" method="POST">
            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" name="title" class="form-control">
            </div>
            <div class="form-group">
                <label for="author">Author</label>
                <input type="text" name="author" class="form-control">
            </div>
            <div class="form-group">
                <label for="body">Body</label>
                <textarea name="body" class="form-control"></textarea>
            </div>
            <input type="submit" name="submit" id="submit" value="Submit" class="btn btn-info">
        </form>
    </div>
<?php include('inc/footer.php'); ?>

