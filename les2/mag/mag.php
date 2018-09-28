<?php
    class Mag{
        public $name;

        public function test($mas){
            print_r($mas);
            echo "<br>";
        }

        public function __construct($name){
            $this -> name = $name;
        }

        public function __get($a){
            echo "ошибка А<br>";
        }

        public function __set($name, $value){
            echo "ошибка b<br>";
            $this -> name = $value;
        }

        public function __call($name, $params){
            echo "ошибка c<br>";
            $this -> test($params);
        }
        public function __autoload($className){
            include "lib/$className.php";
        }


    }

    $obj =  new Mag("Ivan");
    $obj -> a;
    $obj -> b = "demo";
    $obj -> c(1,2);
    //$obj2 = new A;

?>