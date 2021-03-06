<?php
 
    require('config/config.php');
    require('config/db.php');

    if(isset($_POST['submit'])){

        $update_id = mysqli_real_escape_string($conn, $_POST['update_id']); 
        $title = mysqli_real_escape_string($conn, $_POST['title']);
        $body = mysqli_real_escape_string($conn, $_POST['body']);
        $author = mysqli_real_escape_string($conn, $_POST['author']);

        $query = "UPDATE posts SET title='$title', author='$author', body='$body' WHERE id='$update_id'";

        if(mysqli_query($conn, $query)){
            header('Location: ' . ROOT_URL . '');
        } else {
            echo 'error: ' . mysqli_error($conn);
        }
    }

    $id = mysqli_real_escape_string($conn, $_GET['id']);

    $query = 'SELECT * FROM posts WHERE id = ' . $id;

    $result = mysqli_query($conn, $query);

    $post = mysqli_fetch_assoc($result);
    // var_dump($posts);

    mysqli_free_result($result);

    mysqli_close($conn);
 
?>

<?php include('inc/header.php'); ?>
    <div class="container">
        <h1>add post</h1>
        <form action="<?php $_SERVER['PHP_SELF']; ?>" method="POST">
            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" name="title" class="form-control" value="<?php echo $post['title']?>">
            </div>
            <div class="form-group">
                <label for="author">Author</label>
                <input type="text" name="author" class="form-control" value="<?php echo $post['author']?>">
            </div>
            <div class="form-group">
                <label for="body">Body</label>
                <textarea name="body" class="form-control"><?php echo $post['body']?></textarea>
            </div>
            <input type="hidden" name="update_id" value="<?php echo $post['id']?>">
            <input type="submit" name="submit" id="submit" value="Submit" class="btn btn-info">
        </form>
    </div>
<?php include('inc/footer.php'); ?>

