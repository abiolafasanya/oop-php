<?php

class User {
    private $name;
    private $age;

    public function __construct($name, $age){
        $this->name = $name;
        $this->age = $age;
    }

    public function getName(){
        return $this->name;
    }

    public function setName($name){

        $this->name = $name;
    }

    // Get magic method
    public function __get($property){
        if(property_exists($this, $property)){
            return $this->$property;
        }
    }

    // Set magic method
    public function __set($property, $value){
        if(property_exists($this, $property)){
            $this->$property = $value;
        }
        return $this;
    }

}

$user1 = new User('john', 30);

// echo $user1->setName('Abiola', 25);
// echo $user1->getName();

// echo "<br>";
$user1->__set('name', 'Fasanya');
echo $user1->__get('name');
echo "<br>";
$user1->__set('age', 49);
echo $user1->__get('age');