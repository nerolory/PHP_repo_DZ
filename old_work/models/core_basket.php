<?php
	
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
?>