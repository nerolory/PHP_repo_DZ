<?php 
	include_once "controllers/user.php"; 
?>

<div class="mainpart"> <!-- контент -->
	<div id="container">
		<div class="content">
			<h1>Регистрация на сайте</h1>
			<hr>
			<?php
				if(isset($_SESSION['login']) && isset($_SESSION['pass'])){ 
			?>
				<?="Вы вошли как ".$_SESSION['login']?>
			<?php } else { ?>
					<?//=$message?$message:"";?>
					<form method="post">
						<p>Логин: <input type="text" name="login" maxlength="30" placeholder="Введите Логин" autofocus required></p>
						<p>Email: <input type="email" name="email" maxlength="30" placeholder="Введите Email" required></p>
						<p>Пароль: <input type="password" minlength="2" name="pass" placeholder="Введите Пароль" required></p>
						<input type="submit" name="submit" value="Зарегистрироваться" ">
					</form>
			<?php } ?>
		</div>
	</div>
</div>