<?php

  $host ='localhost';
  $user = 'shaun';
  $password = 'qwerty';
  $dbname = 'pdoposts';

  // set DSN
  $dsn = 'mysql:host='.$host.';dbname='.$dbname;

  // PDO instance
  $pdo = new PDO($dsn, $user, $password);
  $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ); // dot. 3) metody
  $pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES, false); // dla LIMIT !

  # PDO querry metods

  // $stmt = $pdo->query('SELECT * FROM posts');

  // 1) metoda
  // while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
  //     echo $row['title'].'<br>';
  // }

  // 2) metoda
  // while($row = $stmt->fetch(PDO::FETCH_OBJ)){
  //     echo $row->title .'<br>';
  // }

  // 3) metoda
  // while($row = $stmt->fetch()){
  //     echo $row->title .'<br>';
  // }

  # PREPARED STATEMENTS ( prepare & execute)

  // !!!! usafe
  // $sql = "SELECT * FROM posts WHERE author = '$author'";

  // FETCH MULTIPLE POSTS
  // user input
  $author = 'Brad';
  $is_published = true;
  $id = 1;
  $limit = 1;

  // positional params
  $sql = 'SELECT * FROM posts WHERE author = ? && is_published = ? LIMIT ?';
  $stmt = $pdo->prepare($sql);
  $stmt->execute([$author, $is_published, $limit]);
  $posts = $stmt->fetchAll(); // bo zrobiliśmy u góry setAttribute

  // named params
  // $sql = 'SELECT * FROM posts WHERE author = :author && is_published = :is_published';
  // $stmt = $pdo->prepare($sql);
  // $stmt->execute(['author' => $author, 'is_published' => $is_published]);
  // $posts = $stmt->fetchAll(); // bo zrobiliśmy u góry setAttribute

  // var_dump($posts);
  foreach ($posts as $post) {
    echo $post->title . '<br>';
  }

  // FETCH single post
  // $sql = 'SELECT * FROM posts WHERE id = :id';
  // $stmt = $pdo->prepare($sql);
  // $stmt->execute(['id' => $id]);
  // $post = $stmt->fetch(); // bo zrobiliśmy u góry setAttribute

  // echo $post->body;

  // GET ROW COUNT
  // $sql = 'SELECT * FROM posts WHERE author = ?';
  // $stmt = $pdo->prepare($sql);
  // $stmt->execute([$author]);
  // $postCount = $stmt->rowCount();

  // echo $postCount;

  // InSERT DATA
  // $title = 'post five';
  // $body = 'this is post five';
  // $author = 'Brad';

  // $sql = 'INSERT INTO posts(title, body, author) VALUES(:title, :body, :author)';
  // $stmt = $pdo->prepare($sql);
  // $stmt->execute(['title' => $title, 'body' => $body, 'author' => $author]);
  // echo 'Post added';

  // update DATA
  // $id = 1;
  // $body = 'this is the updated post';

  // $sql = 'UPDATE posts SET body = :body WHERE id = :id';
  // $stmt = $pdo->prepare($sql);
  // $stmt->execute(['body' => $body, 'id' => $id]);
  // echo 'Post updated';

  // delete DATA
  // $id = 3;

  // $sql = 'DELETE FROM posts WHERE id = :id';
  // $stmt = $pdo->prepare($sql);
  // $stmt->execute(['id' => $id]);
  // echo 'Post deleted';

  // search DATA
  $search = "%f%";
  $sql = 'SELECT * FROM posts WHERE title LIKE ?';
  $stmt = $pdo->prepare($sql);
  $stmt->execute([$search]);
  $posts = $stmt->fetchAll();

  foreach ($posts as $post) {
    // echo $post->title . '<br>';
  }

?>

<!-- <h1><?php echo $post->title; ?></h1>
<p><?php echo $post->body; ?></p> -->