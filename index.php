<?php

class User {

    public $name;

    public function sayHello(){
        return $this->name. " You are Welcome";
    }

}

$user1 = new User();
$user1->name = "Scott";
echo $user1->sayHello();

echo "<br>";

$user2  = new User();
$user2->name = "Abiola";
echo $user2->sayHello();



























