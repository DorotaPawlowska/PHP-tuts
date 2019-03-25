<?php
 
    $user = ['name' => 'Brad', 'email' => 'test@test.com', 'age' => 35];

    $user = serialize($user);

    setcookie('user', $user, time() + (86400*30));

    $user = unserialize($_COOKIE['user']);
    echo $user['name'] . '<br>';
    echo $user['email'] . '<br>';
    echo $user['age'] . '<br>';

    print_r($user)

?>