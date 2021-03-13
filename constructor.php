<?php

class User {
    public $name;
    public $age;

    // constructor runs when an object is called or instantiated
    public function __construct($name, $age){
        // echo "Hi Constructor is running!";

        echo 'class '. __CLASS__. ' instantiated';
        echo "<br>";
        $this->name = $name;
        $this->age = $age;
    }

    public function sayHello(){
        return $this->name. " Say Hello!";
    }

    // called when there is no more refereces to certain object used for clean closing connection etc
    public function __destruct(){
        echo "destructor running";
    }
}

$user1 = new User('Esther', 20);
echo $user1->name. " is ".$user1->age. " years old";
echo "<br>";
echo $user1->sayHello();

echo "<br>";

$user2 = new User('Abiola', 25);
echo $user2->name. " is ".$user2->age. " years old";
echo "<br>";
echo $user2->sayHello();
echo "<br>";

