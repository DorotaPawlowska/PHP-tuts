<?php
 
    require('config/config.php');
    require('config/db.php');

    if(isset($_POST['delete'])){

        $delete_id = mysqli_real_escape_string($conn, $_POST['delete_id']); 

        $query = "DELETE FROM posts WHERE id='$delete_id'";

        if(mysqli_query($conn, $query)){
            header('Location: ' . ROOT_URL);
        } else {
            echo 'error: ' . mysqli_error($conn);
        }
    }

    $id = mysqli_real_escape_string($conn, $_GET['id']);

    $query = 'SELECT * FROM posts WHERE id = ' . $id;

    $result = mysqli_query($conn, $query);

    $post = mysqli_fetch_assoc($result);

    mysqli_free_result($result);

    mysqli_close($conn);

?>

<?php include('inc/header.php'); ?>
    <div class="container">
        <div class="text-left">
            <a href="<?php echo ROOT_URL; ?>" class="btn btn-info">Back</a>
        </div>
        <div class="card">
            <div class="card-body">
                <h1 class="card-title"><?php echo $post['title']; ?></h1>
                    <small>Created on <?php echo $post['created_at']; ?> by <?php echo $post['author']; ?></small>
                    <p class="card-text"><?php echo $post['body']; ?></p>
            </div>
        </div>
        <form action="<?php $_SERVER['PHP_SELF']; ?>" methond="POST" class="text-right">
            <input type="hidden" name="delete_id" value="<?php echo $post['id']; ?>">
            <input type="submit" name="delete" value="Delete" class="btn btn-danger">
        </form>
        <div class="text-left">
            <a href="<?php echo ROOT_URL; ?>editpost.php?id=<?php echo $post['id']; ?>" class="btn btn-info">Edit</a>
        </div>
    </div>
<?php include('inc/footer.php'); ?>

