<?php
trait ForSingleton{

    private function __construct(){/* empty */ }
    public static function getInstance(){
        if(empty(self::$instance)){
            self::$instance = new self();
        }
        return self::$instance;
    }
    public function doAction(){
        echo "test";
    }
}

class Singleton{
    private static $instance;

    use forSingleton;
}
$obj_1 = Singleton::getInstance();
$obj_2 = Singleton::getInstance();

var_dump($obj_1 === $obj_2);
?>