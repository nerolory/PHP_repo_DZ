	<div id="body">
		<div class="mainpart mainpart_fb">
			<p><a href="index.html">Главная</a> &raquo; <n>контакты</n></p>
				<div id="feedback_form">
					<?php
						include_once "models/list_guestbook.php";
						$comments = comments_all($link);
						if($comments){
							foreach ($comments as $comment){
								echo "<div style='border: 1px solid #ccc; margin: 10px; padding: 5px;;'>ФИО: {$comment['fio']}<br>Email: {$comment['email']}<br>Текст: {$comment['text']}<br><i>Дата: {$comment['date']}</i></div>";
							}
						}					
					?>
					<form class="contact1-form validate-form" method="post" action="index.php?page=core_guestbook"> <!-- Форма с использованием css3 js -->
						<span class="contact1-form-title">
							Заполните форму
						</span>
						<div class="wrap-input1 validate-input" data-validate = "Name is required">
							<input class="input1" type="text" name="fio" placeholder="Введите ФИО:" required>
							<span class="shadow-input1"></span>
						</div>

						<div class="wrap-input1 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
							<input class="input1" type="text" name="email" placeholder="Введите Email: " required>
							<span class="shadow-input1"></span>
						</div>

						<div class="wrap-input1 validate-input" data-validate = "Message is required">
							<textarea class="input1" name="text" placeholder="Введите Текст:" required></textarea>
							<span class="shadow-input1"></span>
						</div>

						<div class="container-contact1-form-btn">
								<span>
									<p><input type="submit" name="submit"></p>
								</span>
						</div>


					<!--===============================================================================================-->
						<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
					<!--===============================================================================================-->
						<script src="vendor/bootstrap/js/popper.js"></script>
						<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
					<!--===============================================================================================-->
						<script src="vendor/select2/select2.min.js"></script>
					<!--===============================================================================================-->
						<script src="vendor/tilt/tilt.jquery.min.js"></script>
						<script >
							$('.js-tilt').tilt({
								scale: 1.1
							})
						</script>

					<!-- Global site tag (gtag.js) - Google Analytics -->
					<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
					<script>
					  window.dataLayer = window.dataLayer || [];
					  function gtag(){dataLayer.push(arguments);}
					  gtag('js', new Date());

					  gtag('config', 'UA-23581568-13');
					</script>

					<!--===============================================================================================-->
					<script src="js/main.js"></script>

				</div>
				<div id="contact_info">
					<p> <img src="img/marker.png" alt="image">Ut interdum tristique est com
modo pharetra.</p>
					<p>Lorem Ipsum is simply dummy 
text of the printing and over</p>
					<p><img src="img/phone.png" alt="image"><a href="tel:+Х-ХХХ-ХХХ-ХХ-ХХ">+Х-ХХХ-ХХХ-ХХ-ХХ</a></p>
					<p>&#9993; <a href="mailto:feedback@my_site.com">feedback@my_site.com</a></p>
					<p> If you have questions about your order or need any general information our customer service team will be happy to assist you.</p>
				</div>
			</div>
			<div class="space"></div>
						<div id="social_middle">
				<div id="tittle_sb">
					<p><a href="#"><img src="img/instagram.png" alt="image"></a> Instagram feed: #surfhouse</p>
				</div>	
				<div id="instagram">
					<a href="#"><img src="img/inst_1.png" alt="image"></a>
					<a href="#"><img src="img/inst_2.png" alt="image"></a>
					<a href="#"><img src="img/inst_3.png" alt="image"></a>
					<a href="#"><img src="img/inst_4.png" alt="image"></a>
					<a href="#"><img src="img/inst_5.png" alt="image"></a>
					<a href="#"><img src="img/inst_6.png" alt="image"></a>
				</div>
				<div id="social_link">
					<div class="space_s space_s1">
						<a href="#"><img src="img/f.png" alt="image"></a>
					</div>
					<div class="space_s space_s2">
						<a href="#"><img src="img/twiter.png" alt="image"></a>
					</div>
					<div class="space_s space_s3">
						<a href="#"><img src="img/pin.png" alt="image"></a>
					</div>
				</div>
			</div>			