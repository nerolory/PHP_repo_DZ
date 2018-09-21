<?php
	class A {//создаем класс
		public function foo() {//метод, который передает статический x с прединкриментом
			static $x = 0;
			echo ++$x."<br>";
		}
	}
	$a1 = new A(); //передаем данные класса переменной a1
	$a2 = new A(); //передаем данные класса переменной a2
	$a1->foo(); //выводим значение переменной через функцию foo() и получаем значение 1, так как был произведен прединкремент после объявления переменной $x.
	$a2->foo(); //выводим значение и получаем 2, по той же причине, плюс был произведен прединкремент в результате ранее.
	$a1->foo(); //выводим значение и получаем значение 3, та же ситуацию, только результатов ранее было уже 2
	$a2->foo(); //выводим значение и получаем значение 4, та же ситуацию, только результатов ранее было уже 3
?>