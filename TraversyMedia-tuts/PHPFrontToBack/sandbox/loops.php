<?php
  
    # loops 

    /* for, while, do... while, foreach  */

    /*
    for($i = 5; $i <= 10 ; $i++){
        echo 'Number ' . $i;
        echo '<br/>';
    }
    */

    /*
    $i = 0;
    while($i < 10){
        echo 'Number ' . $i;
        echo '<br/>';
        $i++;
    */

    /*
    $i = 0;
    do{
        echo 'Number ' . $i;
        echo '<br/>';
        $i++;
    }while($i < 10);
    */

    /*
    $people = array('Brad', 'Jose', 'William');
    foreach ($people as $person) {
        echo $person;
        echo '<br/>';
    }
    */

    $people = array('Brad' => 'email1', 'Jose' => 'email2', 'William' => 'email3');
    foreach ($people as $person => $email) {
        echo $person . ': ' . $email;
        echo '<br/>';
    }
?>