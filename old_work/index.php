<!DOCTYPE html>
<html lang="ru"> 
	<head>
		<meta charset="UTF-8">
		<title>магазин surfhouse</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" type="text/css" href="css/style.css">
		<link rel="stylesheet" type="text/css" href="css/media_stile.css">	
		<link rel="stylesheet" type="text/css" href="css/util.css">
		<link rel="stylesheet" type="text/css" href="css/main.css">
		<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
		<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
		<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
		<link rel="stylesheet/less" type="text/css" href="css/style.less">
		<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
		<script src="js/jquery.js" type="text/javascript"></script>
		<script src="js/less.min.js" type="text/javascript"></script>
		<script src="js/main.js" type="text/javascript"></script>
		
		
	</head>
	<body>
		<div id="body"> <!-- тело сайта -->
		<?php 
			INCLUDE "configs/config.php";
			INCLUDE	"templates/header.php";		// хедер
			INCLUDE "templates/left_menu.php";	// левое меню
			$page = @($_GET['page']);
			
			if(!isset($page)){
				INCLUDE "templates/main.php";		// основная часть
				INCLUDE "templates/instagram.php";	// банер инстаграма
			} elseif($page == 'product'){
				INCLUDE "templates/product.php";
			} elseif($page == 'feedback'){
				INCLUDE "templates/feedback.php";
			} elseif($page == 'admin'){
				INCLUDE "admin/index.php";
			} elseif($page == 'add_goods'){
				INCLUDE "admin/add_goods.php";
			} elseif($page == 'delete_goods'){
				INCLUDE "admin/delete_goods.php";
			} elseif($page == 'edit_goods'){
				INCLUDE "admin/edit_goods.php";
			} elseif($page == 'core_goods'){
				INCLUDE "models/core_goods.php";
			} elseif($page == 'core_guestbook'){
				INCLUDE "models/core_guestbook.php";
			} elseif($page == 'reg'){
				INCLUDE "auth/reg.php";
			} elseif($page == 'login'){
				INCLUDE "auth/login.php";
			} elseif($page == 'basket'){
				INCLUDE "templates/basket.php";
			} elseif($page == 'user'){
				INCLUDE "controllers/user.php";
			}
			
			INCLUDE "templates/footer.php";		// футер
		?>
	</body>
</html>