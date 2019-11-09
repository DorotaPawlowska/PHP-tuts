<?php

  class User {

    public $username;
    private $email;

    public function __construct($username, $email){
      $this->username = $username;
      $this->email = $email;
    }

    public function addFriend(){
      return "$this->email added a new friend";
    }

    // getters
    public function getEmail(){
      return $this->email;
    }

    // setters
    public function setEmail($email){
      if(strpos($email, '@') > -1){
        $this->email = $email;
      }
    }




  }

  $userOne = new User('mario', 'mario@thenetninja.co.uk');
  $userTwo = new User('luigi', 'luigi@thenetninja.co.uk');

  // $userOne->email = 3;

  // echo $userOne->email . '</br>';
  // echo $userTwo->email . '</br>';

  $userOne->setEmail('yoshi@thenetninja.co.uk');

  echo $userOne->getEmail() . '</br>';
  echo $userTwo->getEmail() . '</br>';

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