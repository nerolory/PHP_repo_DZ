<?php
	class Test{
		static $x;
		static function f(){
			Test::$x=5;
		}
	}
	Test::f();
	echo Test::$x;
?>