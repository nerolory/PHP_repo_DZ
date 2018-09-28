<?php
    require "MyTrait.php";
    require "A.php";
    require "B.php";

    $a = new A;
    $b = new B;
    $a -> test();
    $b -> test();
?>