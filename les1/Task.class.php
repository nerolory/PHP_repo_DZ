<?php
	class Task{
		
		var $a;
		var $b;
		var $c;
		
		function __construct($a,$b,$c){
			$this->a  = $a;
			$this->b  = $b;
			$this->c  = $c;
			echo "уравнение: ".$this->a."x+".$this->b."x+$this->c=0<br>";
			echo "Ответ: ";
			$this -> solution();
		}
		
		function D(){
			return pow($this->b,2)-4*$this->a*$this->c;
		}
		
		function solution(){
			if($this->D()>=0){
				echo "x1 = ".(-$this->b-sqrt(pow($this->b-4*$this->a*$this->c,2)))/(2*$this->a)." ";
				echo "x2 = ".(-$this->b+sqrt(pow($this->b-4*$this->a*$this->c,2)))/(2*$this->a)."<br>";
			} else{
				echo "нет решения";
			}
		}
	}
	
	new Task(1,4,2);
	?>