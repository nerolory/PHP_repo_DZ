<?php
	include "models/functions.php";
	include_once "controllers/con_basket.php";
	session_start();
	if(isset($_SESSION['login']) && isset($_SESSION['pass'])){?>
		<p>Приветствую вас <?=$_SESSION['login'];?><br></p>
		<?php switch(resGoods($goodsTemp)){
			case 0:
				?><p>в корзине нет товаров</p><?php
				break;
			case 1:
			case 21:
			case 31:
			case 41:
			case 51:
			case 61:
			case 71:
			case 81:
			case 91:
				?><p>в корзине <?=resGoods($goodsTemp);?> товар</p>
				<p><a href="/index.php?page=basket">КУПИТЬ ТОВАРЫ</a></p><?php
				break;
			case 2:
			case 3:
			case 4:
			case 22:
			case 23:
			case 24:
			case 32:
			case 33:
			case 34:
			case 42:
			case 43:
			case 44:
			case 52:
			case 53:
			case 54:
			case 62:
			case 63:
			case 64:
			case 72:
			case 73:
			case 74:
			case 82:
			case 83:
			case 84:
			case 92:
			case 93:
			case 94:
				?><p>в корзине <?=resGoods($goodsTemp);?> товара</p>
				<p><a href="/index.php?page=basket">КУПИТЬ ТОВАРЫ</a></p><?php
				break;
			default:				
				?><p>в корзине <?=resGoods($goodsTemp);?> товаров</p>
				<p><a href="/index.php?page=basket">КУПИТЬ ТОВАРЫ</a></p><?php
				break;
		}?>
		<p><a href='index.php?page=user&action=logout'><u>Выйти</u> </a><p>
	<?php } else {?>
		<li class="headcap">КОРЗИНА</li>
		<ul id="headmenu">
			<li><a href="index.php?page=reg">РЕГИСТРАЦИЯ</a></li>
			<li><a href="index.php?page=login">ВОЙТИ</a></li>
		</ul>
	<?php } ?>
	