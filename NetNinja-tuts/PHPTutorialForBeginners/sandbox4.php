<?php
  
    // classes

    class User {
        public $email;
        public $name;

        public function __construct($name, $email){
            // $this->email = 'mario@thenetninja.com';
            // $this->name = 'mario';
            $this->email = $email;
            $this->name = $name;
        }

        public function login(){
            // echo 'the user logged in';
            echo $this->name . ' logged in';
        }
    }

    $userTwo = new User('yoshi', 'yoshi@dot.pl');
    $userTwo->login();
    echo '<br>' . $userTwo->name;
    echo '<br>' . $userTwo->email;

    // $userOne = new User();
    // $userOne->login();
    // echo '<br>' . $userOne->name;
    // echo '<br>' . $userOne->email;

?>