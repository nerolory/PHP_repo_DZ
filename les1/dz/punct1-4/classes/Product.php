<?php
	class Product{// Создаем класс
		protected $name;
		protected $price;
		protected $desc;
		function __construct($name,$price,$desc){//создаем конструктр класса, где определяем переменные и вызываем функцию product().
			$this	->name 	= $name;
			$this	->price	= $price;
			$this	->desc 	= $desc;
			$this	->product();
		}
		function product(){?> <!-- класс берет значение переменных из конструктора и передает их в виде строк.-->
			<tr>
				<td><?=$this->name?></td>
				<td><?=$this->price?></td>
				<td><?=$this->desc?></td>
		<?php } 
	}
	?>