<?php
  
    #arrays - variable that holds multiple values

    // indeksowane
    // asocjacyjne
    // wielowymiarowe


    // ========= Indexed arrays

    $people = array('Kevin', 'Jeremy', 'Sara');
    $ids = array(23, 55, 12);
    $cars = ['Honda', 'Toyota', 'Ford'];
    $cars[3] = 'Chevy';
    $cars[] = 'BMW';

    // echo $people[0];
    // echo $people[3];
    // echo $ids[2];
    // echo $cars[4];

    // echo count($cars);
    // print_r($cars);
    // var_dump($cars);

    // ========= Associative arrays

    $people2 = array('Brad' => 35, 'Jose' => 32, 'William' => 37);
    $ids = [22 => 'Brad', 44 => 'Jose', 63 => 'William'];

    // echo $people2['Brad'];
    // echo $ids[22];
    $people2['Jill'] = 42;
    // echo $people2['Jill'];
    // print_r($people2);
    // var_dump($people2);

    // ========= Multi-Dimentional arrays

    $cars2 = array(
        array('Honda', 20, 10),
        array('Toyota', 30, 20),
        array('Ford', 23, 12)
    );

    echo $cars2[1][0];
    echo $cars2[1][2];


?>