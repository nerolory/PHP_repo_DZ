<?php
	include "configs/config.php";
	
	function massGoods($goodsTemp){
				$price_res=0;
				$count_res=0;
				$i=0;
		foreach ($goodsTemp as $good){
			$i++;
			$price_res += $good['price'];
			$count_res += $good['count'];
			?>
			<tr>
				<td><h3 class="item-name"><a href="item.php?id=<?=$good['id']?>"><?=$good['name']?></a></h3></td>
				<td><?=$good['price']?>р.</td>
				<td><?=$good['count']?></td>
			</tr>
			<?php
		}	
		return $price_res;
		return $count_res;
	}
	
	function resGoods($goodsTemp){
		$price_res=0;
		$count_res=0;
		$i=0;
		foreach ($goodsTemp as $good){
				$i++;
				$price_res += $good['price'];
				$count_res += $good['count'];
		}
				return (int)$count_res;
	}
	
	function getAll($link, $table, $orderby='id'){
		$query = "SELECT * FROM {$table} order by {$orderby} desc";
		$result = mysqli_query($link, $query);

		if(!$result)
			die(mysqli_error($link));

		$n = mysqli_num_rows($result);
		$res = array();

		for($i = 0; $i < $n; $i++){
			$row = mysqli_fetch_assoc($result);
			$res[] = $row;
		}

		return $res;
	}	
	
	function newUser($link, $login, $email, $pass){

		$t = "INSERT INTO users (login, email, pass) VALUES ('%s','%s','%s')";

		$query = sprintf($t, mysqli_real_escape_string($link, $login),mysqli_real_escape_string($link, $email),mysqli_real_escape_string($link, $pass));

		$result = mysqli_query($link, $query);

		if(!$result){
			die(mysqli_error($link));
		}

		return true;
	}

	function calcG($link,$connection,$discont){ // функция для формирования списка товаров.
		$connect = $connection;
		$discont = $discont;
		$sql = "select * from goods";
		$res = mysqli_query($connection,$sql);
		$dir1 = "public";
		while($data = mysqli_fetch_assoc($res)){
			foreach($res as $result => $files){
				$dis = $files["price"]-(($files["price"]/100)*$discont);
				include $link;
			}
		}
	}
	
	function detect($link,$connection,$discont){ // функция для формирования одного товара.
		$connect = $connection;
		$discont = $discont;
		$id= $_GET['id'];
		$sql = "select * from goods";
		$res = mysqli_query($connect,$sql);
		$dir1 = "public";
		foreach($res as $result => $files){
			if($result == ($id-1)){
			$dis = $files["price"]-(($files["price"]/100)*$discont);
			include $link;
			break;
			} else {
				continue;
			}
		}
	}
	
	function shortText($text){ // функция для укорочения текста(кратко о товаре.
		$trimmarker = " . . . ";
		$str = mb_strimwidth ($text ,0,300,$trimmarker);
		echo $str;
	}
	
	function newTempOrder($link, $id_good, $name, $price, $count, $login=null){

		$t = "INSERT INTO temp_orders (id_good, name, price, count, login) VALUES ('%s','%s','%s','%s','%s')";

		$query = sprintf($t, mysqli_real_escape_string($link, $id_good),mysqli_real_escape_string($link, $name),mysqli_real_escape_string($link, $price),mysqli_real_escape_string($link, $count),mysqli_real_escape_string($link, $login));

		$result = mysqli_query($link, $query);

		if(!$result){
			die(mysqli_error($link));
		}

		return true;
	}
	
	function getOne($link, $id, $table){
		$query = sprintf("SELECT * FROM {$table} where id=%d",(int)$id);
		$result = mysqli_query($link, $query);

		if(!$result)
			die(mysqli_error($link));

		$res = mysqli_fetch_assoc($result);

		return $res;
	}
	
	function editTempOrder($link, $id, $count){
		$id = (int)$id;

		$sql = "UPDATE temp_orders SET count='%d' WHERE id_good='%d'";

		$query = sprintf($sql, mysqli_real_escape_string($link, $count),$id);

		$result = mysqli_query($link, $query);

		if(!$result)
			die(mysqli_error($link));

		return mysqli_affected_rows($link);
	}

	function getOneTemp($link, $id, $table){
		$query = sprintf("SELECT * FROM {$table} where id_good=%d",(int)$id);
		$result = mysqli_query($link, $query);

		if(!$result)
			die(mysqli_error($link));

		$res = mysqli_fetch_assoc($result);

		return $res;
	}
	?>
	