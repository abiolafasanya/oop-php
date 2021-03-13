<?php

    class Cars{


        function getCars(){
            echo "This is get car method";
        }
    }

    // instantiating Cars
    $bmw = new Cars();
    $mercedes = new Cars();

    echo $bmw->getCars();