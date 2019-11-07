<?php

  class User {

    public $username = 'Ryu';
    public $email = 'ryu@thenetninja.co.uk';

    public function addFriend(){
      return "$this->email added a new friend";
    }

  }

  // instancja klasy 
  $userOne = new User();
  $userTwo = new User();

  echo $userOne->username . '</br>';
  echo $userOne->email . '</br>';
  echo $userOne->addFriend() . '</br>';

  $userTwo->username = 'yoshi';
  $userTwo->email = 'yoshi@thenetninja.co.uk';

  echo $userTwo->username . '</br>';
  echo $userTwo->email . '</br>';
  echo $userTwo->addFriend() . '</br>';

  // print_r(get_class_vars('User'));
  // print_r(get_class_methods('User'));

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>PHP OOP Tutorial</title>
</head>
<body>
  
</body>
</html>