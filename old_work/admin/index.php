<?php

include "configs/config.php";
include_once "models/db_goods.php";
?>
<div class="mainpart"> <!-- контент -->

    <div class="content">
    <h1>Админка</h1>
	<a class="price" href="index.php?page=add_goods">Добавить товар</a><br>
<?php
$goods = goods_all($connection);
if($goods){
    foreach ($goods as $res => $good):?>
	<div class="goods">
            <img src="public/<?=$good["link"]?>" alt="<?=$good['name']?>" title="<?=$good['name']?>">
            <h3 class="goods_name"><?=$good['name']?></h3>
            <div class="price"><a href="index.php?page=edit_goods&id=<?=$good['id']?>" title="Редактировать">Редактировать</a></div>
            <div class="price"><a href="index.php?page=delete_goods&id=<?=$good['id']?>" title="Удалить">Удалить</a></div>
        </div>
    <?php endforeach;
}
?>
    </div>
</div>