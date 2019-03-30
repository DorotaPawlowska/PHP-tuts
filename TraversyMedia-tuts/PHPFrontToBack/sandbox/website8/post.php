<?php
 
    require('config/config.php');
    require('config/db.php');

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
        <a href="<?php echo ROOT_URL; ?>" class="btn btn-info">Back</a>
        <div class="card">
            <div class="card-body">
                <h1 class="card-title"><?php echo $post['title']; ?></h1>
                    <small>Created on <?php echo $post['created_at']; ?> by <?php echo $post['author']; ?></small>
                    <p class="card-text"><?php echo $post['body']; ?></p>
            </div>
        </div>
    </div>
<?php include('inc/footer.php'); ?>

