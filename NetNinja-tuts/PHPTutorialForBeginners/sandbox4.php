<?php
  
    // classes

    class User {
        private $email;
        private $name;

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

        public function getName(){
            return $this->name;    
        }

        public function setName($name){
            if(is_string($name) && strlen($name) > 1){
                $this->name = $name;
                return "name has been updated to $name ";
            }else{
                return "not a valid name ";
            }
        }
    }

    $userTwo = new User('yoshi', 'yoshi@dot.pl');
    // $userTwo->name = 'mario';
    // echo '<br>' . $userTwo->name;
    // echo '<br>' . $userTwo->getName();
    // echo '<br>' . $userTwo->setName(50);
    // echo '<br>' . $userTwo->setName('shaun');
    echo '<br>' . $userTwo->getName();
    // echo '<br>' . $userTwo->name; // nie można teraz



    











    // $userTwo->login();
    // echo '<br>' . $userTwo->email;

    // $userOne = new User();
    // $userOne->login();
    // echo '<br>' . $userOne->name;
    // echo '<br>' . $userOne->email;

?>