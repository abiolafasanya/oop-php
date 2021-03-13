<?php

// method is a function inside a class and function is not in a class

class Cars{


  function getCars(){

    }
  function getBrand(){

    }
}

$gmethod = get_class_methods('Cars');

foreach($gmethod as $result){
   echo $result."<br>";
}