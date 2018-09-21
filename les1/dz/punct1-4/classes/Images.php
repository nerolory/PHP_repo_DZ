<?php
	
	class Images extends Product{// Создаем класс и объявляем его дочерним классом класса Product
		protected $src;
		
		function __construct($name,$price,$desc,$src){//создаем конструктр класса, где определяем переменные и вызываем функцию productImg().
			parent:: __construct($name,$price,$desc); //вызываем родительский конструктор(перегрузка метода)
			$this->src = $src;
			$this->productImg();
		}
		function productImg(){?><!-- класс берет значение переменной src из конструктора и передает её в виде строки.-->
				<td><img src="<?=$this->src?>"></td>
		<?php } 
	}
	?>