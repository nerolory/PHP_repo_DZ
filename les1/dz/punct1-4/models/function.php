<?php
	function goods($connection){ // функция для формирования списка товаров.
		$sql = "select * from goods";
		$res = mysqli_query($connection,$sql);
		while($data = mysqli_fetch_assoc($res)){
			foreach($res as $result => $files){
				$name = $files['name'];
				$price = $files['price'];
				$desc = $files['descrip'];
				$src = $files['small_link'];
				new Product($name,$price,$desc);
			}
		}
	}
	function goodsImg($connection){ // функция для формирования списка товаров и изображения.
		$sql = "select * from goods";
		$res = mysqli_query($connection,$sql);
		while($data = mysqli_fetch_assoc($res)){
			foreach($res as $result => $files){
				$src = $files['small_link'];
				$name = $files['name'];
				$price = $files['price'];
				$desc = $files['descrip'];
				$src = $files['small_link'];
				new Images($name,$price,$desc,$src);
			}
		}
	}
?>