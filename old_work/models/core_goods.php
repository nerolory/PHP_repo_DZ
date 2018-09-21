<?php

	include "configs/dir_config.php";
	include "configs/config.php";
	include_once "db_goods.php";	
	include_once "image.php";

if(@($_POST['submit'])){
	$name = trim(strip_tags($_POST['name']));
	$description = trim(strip_tags($_POST['desc']));
	$price = (int)trim(strip_tags($_POST['price']));
	$filePath  = $_FILES['src']['tmp_name'];
	$fileName  = translate($_FILES['src']['name']);
	$type = $_FILES['src']['type'];
	$size = $_FILES['src']['size'];
	$defaultfilebig = $_POST['src1'];
	$defaultfilesmall = $_POST['src2'];

	if($type == 'image/jpeg' || $type == 'image/png' || $type == 'image/gif'){
		if($size>0 and $size<1000000){
			if(copy($filePath,"public/".DIR_BIG.$fileName)){
				if(isset($_POST['edit'])){
					$id = (int)trim(strip_tags($_POST['edit']));
					goods_edit($connection, $id, $name, $description, DIR_BIG.$fileName, DIR_SMALL.$fileName, $price);
					header("Location: index.php?page=admin");
				} else {
					goods_new($connection, $name, $description, DIR_BIG.$fileName, DIR_SMALL.$fileName, $price);
					//header("Location: index.php?page=admin");
				}
				image_resize("public/".DIR_BIG.$fileName, "public/".DIR_SMALL.$fileName, 250, 150);
				$message = "<h3>Файл успешно загружен на сервер</h3>";
			} else {
				$message = "<h3>Ошибка! Не удалось загрузить файл на сервер!</h3>";
				exit;
			}
		} else {
			$message = "<b>Ошибка - картинка превышает 1 Мб.</b>";
		}
	} else {
		if(isset($_POST['edit'])){
			$id = (int)trim(strip_tags($_POST['edit']));
			goods_edit($connection, $id, $name, $description, $defaultfilebig, $defaultfilesmall, $price);
			header("Location: index.php?page=admin");
		} else {
			$message = "<b>Картинка не подходит по типу! Картинка должна быть в формате JPEG, PNG или GIF</b>";
		}
	}
}
?>