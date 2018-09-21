<?php
	$files;
	$files2;
	$dir1;
	$dis;
	$good = getOne($connection, $id, 'goods');
?>
<script src="js/add_basket.js" type="text/javascript"></script>
<div id="example">
	<a href="<?=$dir1."/".$files["link"]?>"><img src="<?=$dir1."/".$files["link"]?>" class="example_1" alt="image"></a>
</div>
<div class="sub_text">
	<h2><?=$files["name"]?></h2>
			<p class="price">&euro;.<?=$dis?></p><br>
			<p class="non_discont_price">&euro;.<?=$files["price"]?></p></p>
	<h4>кратко о товаре</h4>
	<p>
		<?php
			$text = $files["descrip"];
			echo shortText($text);
		?>
<?php print_r($files['id']); ?>
	</p>
		<p class="add-to-basket"><a href="#" onclick="item(<?=$good['id']?>)" title="Добавить в корзину">Купить</a></p>
</div>
<div id="instruct">
	<fieldset class="bord">
		<legend id="leg">Описание товара</legend>
			<p class="paragraph">
				<?=$text;?>
			</p>
		</fieldset>
</div>