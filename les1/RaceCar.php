<?php
	include "Car.class.php";
	
	class RaceCar extends Car{
		var $speed;
		
		function __construct($name,$price,$speed){
			parent:: __construct($name,$price);
			$this->speed = $speed;
			parent:: drive();
			$this -> drive();
			$this -> infos();
		}
		
		function drive(){
			echo "Автомобиль ".$this->name." имеет скорость ".$this->speed." км/ч. <br>";
		}
	}
	
	$car1 = new RaceCar("Ferrari","3000","400");
	
?>