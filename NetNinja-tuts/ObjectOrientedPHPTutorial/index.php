<?php

  class User {

    public $username;
    protected $email;
    public $role = 'member';

    public function __construct($username, $email){
      $this->username = $username;
      $this->email = $email;
    }

    public function __destruct(){
      echo "the user $this->username was removed </br>";
    }

    public function __clone(){
      $this->username = $this->username . '(cloned)</br>';
    }

    public function addFriend(){
      return "$this->email added a new friend";
    }

    public function message(){
      return "$this->email sent a new message";
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

  class AdminUser extends User {
    public $level;
    public $role = 'admin';

    public function __construct($username, $email, $level){
      $this->level = $level;
      parent::__construct($username, $email);
    }
    
    public function message(){
      return "$this->email, an admin, sent a new message";
    }

  }

  $userOne = new User('mario', 'mario@thenetninja.co.uk');
  $userTwo = new User('luigi', 'luigi@thenetninja.co.uk');
  $userThree = new AdminUser('yoshi', 'yoshi@thenetninja.co.uk', 5);

  // unset($userOne);
  $userFour = clone $userOne;
  echo $userFour->username;

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