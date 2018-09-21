	<?php
	$files;
	$dir1;
	$dis;
?>
<div class="goods">
			<a href="index.php?page=product&id=<?=$files["id"]?>"><img src="<?=$dir1."/".$files["link"]?>" class="content_img" alt="img" /></a>
			<a href="index.php?page=product&id=<?=$files["id"]?>"><p class="goods_name"><?=$files["name"]?></p></a>
			<p class="price">&euro;.<?=$dis?></p>
			<p class="non_discont_price">&euro;.<?=$files["price"]?></p></p>
</div>