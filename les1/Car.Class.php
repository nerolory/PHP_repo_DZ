<?php
	class Car{
		var $name;
		var $price;
		
		function __construct($name,$price){
			$this->name  = $name;
			$this->price = $price;
			//$this->drive();
			//$this -> infos();
		}
		
		function drive(){
			echo "Автомобиль ".$this->name." стоит ".$this->price.".<br>";
		}
		function infos(){
			echo "Автомобиль ".$this->name." спорткар.<br>";
		}
	}
	
	//new Car("Audi",1000);
	
?>