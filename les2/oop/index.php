<?php
    class Demo{
        public function test(MainClass $obj){
            echo $obj->x;
        }
    }
    class MainClass{
        public $x = "test";
    }
    $first  = new Demo;
    $second = new MainClass;
    $first -> test($second);
?>