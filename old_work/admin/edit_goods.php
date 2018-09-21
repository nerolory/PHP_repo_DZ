<?php
include_once "models/db_goods.php";
if($_GET['id']){
    $id= (int)($_GET['id']);
    $good = goods_get($connection, $id);
}

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Админка</title>
    <link rel="stylesheet" href="../public/css/styles.css" type="text/css" media="all">
</head>
<body>
	<div id="mainpart mainpart_c">
		<div class="sub_text">
			<form method="post" class="contact1-form validate-form"  action="index.php?page=core_goods" enctype="multipart/form-data"> 
				<div class="wrap-input1 validate-input" data-validate = "Name is required">
					<p>Наименование: <br><input class="input1" type="text" name="name" maxlength="100" value="<?=$good['name']?>"></p>
					<span class="shadow-input1"></span>
				</div>
			
				<div class="wrap-input1 validate-input" data-validate = "Name is required">
					<p>Цена: <br><input class="input1" type="number" name="price" maxlength="20" value="<?=$good['price']?>" ></p>
					<span class="shadow-input1"></span>
				</div>
							
				<div class="wrap-input1 validate-input" data-validate = "Message is required">
					<p>Описание: <br><textarea class="input1" name="desc" rows="10"><?=$good['descrip']?></textarea></p>
					<span class="shadow-input1"></span>
				</div>

				<div class="wrap-input1 validate-input" data-validate = "Subject is required">
					<p><strong>Загрузите картинку в формате JPEG, PNG или GIF</strong></p>
					<p><img name="img" src="public/<?=$good['link']?>" width="200"></p>
					<p><input type="file" name="src" accept="image/jpeg,image/png,image/gif"></p>
					<span class="shadow-input1"></span>
				</div>
				<input type="hidden" name="src1" value="<?=$good['link']?>">
				<input type="hidden" name="src2" value="<?=$good['small_link']?>">
				<input type="hidden" name="edit" value="<?=$good['id']?>">
				<div class="wrap-input1 validate-input" data-validate = "Subject is required">
					<p><input type="submit" name="submit"></p>
					<span class="shadow-input1"></span>
				</div>
			</form>
		</div>
	</div>
</body>
</html>
