<?php
	include "models/function.php";
	include "configs/config.php";
	include_once "classes/Product.php";
	include_once "classes/Images.php";
	
?>
<h1>Таблица товаров для наглядности.</h1> <!--создаем таблицу, которая работает через родительский класс Product.-->
		<table border="1px" bgcolor="#f2f2f2">
			<tr>
				<td>Название</td>
				<td>Цена</td>
				<td>Описание</td>
			</tr>
				<?php	
					echo goods($connection); //Вызываем фукцию, которая обрабатывает родительский класс.
				?>
			</tr>
		</table>
<h1>Таблица товаров для наглядности.</h1> <!--создаем таблицу, которая работает через дочерний класс Images.-->
	<table border="1px" bgcolor="#f2f2f2">
		<tr>
			<td>Название</td>
			<td>Цена</td>
			<td>Описание</td>
			<td>изображение</td>
		</tr>
			<?php	
				echo goodsImg($connection); //Вызываем фукцию, которая обрабатывает дочерний класс.
			?>
		</tr>
	</table>