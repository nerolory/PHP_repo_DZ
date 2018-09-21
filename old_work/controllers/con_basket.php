<?php	
	
				
	if(isset($_POST['id'])){
		$id = $_POST['id'];
		if(isset($_SESSION['login']) && isset($_SESSION['pass'])) {
			$login = $_SESSION['login'];
		}
		$good = getOne($connection, $id, 'goods');
		$_SESSION['basket'] = 1;

		$goodTemp = getOneTemp($connection, $id, 'temp_orders');
		if(isset($goodTemp)){
			$id = $goodTemp['id_good'];
			$count = $goodTemp['count'];
			$count++;
			editTempOrder($connection, $id, $count);
		}else{
			newTempOrder($connection, $id, $good['name'], $good['price'], $count, $login);
		}

	   echo "<a href='basket.php'><u>Просмотреть товары</u></a>";

	}

	$goodsTemp = getAll($connection,'temp_orders');

	if(isset($_GET['action']) and $_GET['action']=='clear'){
		unset($_SESSION['basket']);
		$query = sprintf("DELETE FROM temp_orders");
		$result = mysqli_query($connection, $query);
		header('Location: index.php');
	}

	if(isset($_GET['action']) and $_GET[action]=='order'){
		echo "<u>Заказ сделан</u>";
	}
?>