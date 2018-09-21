<?php include_once "controllers/con_basket.php"; 
?>
<div class="mainpart"> <!-- контент -->
    <div class="content">
        <h1>Корзина</h1>
        <hr>

        <?php
        if(isset($goodsTemp)){
			$i=0;
            echo " <table style='width: 99%' border=\"1\"><tr><td>Наименование товара</td><td>Цена</td><td>Количество</td></tr>";
             massGoods($goodsTemp,1);

            echo "<tr><td>Количество наименований: $i</td><td>Общая сумма: $price_res</td><td>Количество товаров: $count_res</td></tr></table>";

            if(isset($_SESSION['login']) && isset($_SESSION['pass'])){
                echo "<p><a href='index.php?page=basket&action=order'><b><u>Оформить заказ</u></b></a></p>";
            }else{
                echo "Вы должны <a href='index.php?page=reg'>зарегистрироваться</a> или <a href='index.php?page=login'>войти</a> чтобы офорить заказ";
            }

            echo "<p><a href='index.php?page=basket&action=clear'><u>Удалить товары из корзины</u></a></p>";
        }
        ?>
	</div>
	<div class="space">
	</div>
</div>