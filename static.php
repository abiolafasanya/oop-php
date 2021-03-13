<?php
 
 class User {
    public $name;
    public $age;
    public static $minPassLength = 8;

    public static function validatePass($pass){
        if(strlen($pass) >= self::$minPassLength){
            return true;
        }
        else{
            return false;
        }
    }

 }

 $password = "abiola78";
 if(User::validatePass($password)){
     echo "<span style='color:green'>password is valid</span>";
 }
 else{
     echo "<span style='color:red'>password is not valid</span>";
 }