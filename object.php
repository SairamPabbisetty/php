<?php
    class Car{
        function car_model(){
            $model_name = "abc";
            echo "Car model : ",$model_name;
        }
    }

    $obj = new Car();
    $obj->car_model();
?>