<?php

    // You can write php in procedural or oop way

    class User {
        private $name;
        private $email;
        private $password;

        // A constructor

        function __construct($n, $e, $p)
        {
            $this->name = $n;
            $this->email = $e;
            $this->password = $p;

        }

        // methods
        function setName($n) {
            $this->name =  $n;
        }

        function setEmail($e){
            $this->email = $e;
        }

        function setPass($p){
            $this->password = $p;
        }

        function getUser(){
            return ($this->name . "<br>" . $this->email . "<br>" . $this->password . "<br>");
        }
    }


    $user1 = new User("Mahmoud", "m@m.com", "mahmoud123!");

    // $user1->setName("Mahmoud");
    // $user1->setEmail("Mahmoud@mahmoud.com");
    // $user1->setPass("mahmoud123!");

    print_r($user1->getUser());


    // inheritance 

    class employee extends User{
        private $title;
        function __construct($name, $email, $password, $title)
        {
            parent::__construct($name, $email, $password);
            $this->title = $title;
        }


        public function getTitle(){
            return $this->title;
        }
    }


    $e1 = new employee("Mahmoud", "dev.mkhalid@gmail.com", "mahmoud123!", "Software Engineer");


    echo $e1->getTitle();


?>