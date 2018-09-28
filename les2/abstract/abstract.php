<?php
    abstract class Car{
        abstract function drive();
        function show(){
            echo "text";
        }
    }

    class RaceCra extends Car{
        function drive(){
            echo "test 2";
        }
    }

    class Tractor extends Car{
        function drive(){
            echo "test 3";
        }
    }


?>