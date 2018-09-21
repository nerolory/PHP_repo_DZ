<?php include_once "controllers/user.php"; ?>

<div class="mainpart"> <!-- контент -->
	<div id="container">
		<div class="content">
			<?php
			if(isset($_SESSION['login']) && isset($_SESSION['pass'])){
				header('Location: index.php');
				echo "Приветствую вас ".$_SESSION['login'];
			}else{
			   echo "<h1>Вход на сайт</h1><hr>";
			   echo @($message?$message:""); ?>
				<form method="post">
					<p>Логин: <input type="text" name="login" maxlength="30" placeholder="Введите Логин" autofocus required></p>
					<p>Пароль: <input type="password" minlength="2" name="pass" placeholder="Введите Пароль" required></p>
					<input type="submit" name="enter" value="Войти" ">
				</form>
			<?php } ?>
		</div>
	</div>
</div>