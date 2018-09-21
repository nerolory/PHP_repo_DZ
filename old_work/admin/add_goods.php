<?php
include_once "models/db_goods.php";
?>

<div id="mainpart mainpart_c">
	<div class="sub_text">
        <form class="contact1-form validate-form" method="post" action="index.php?page=core_goods" enctype="multipart/form-data">
            
			<span class="contact1-form-title">Добавить товар:</span>
			<div class="wrap-input1 validate-input" data-validate = "Name is required">
				<input class="input1" type="text" name="name" placeholder="Введите наименование:">
				<span class="shadow-input1"></span>
			</div>
			<div class="wrap-input1 validate-input" data-validate = "Name is required">
				<input class="input1" type="text" name="price" placeholder="Введите цену:">
				<span class="shadow-input1"></span>
			</div>
			<div class="wrap-input1 validate-input" data-validate = "Message is required">
				<textarea class="input1" name="desc" placeholder="Введите описание:"></textarea>
				<span class="shadow-input1"></span>
			</div>
			<div class="wrap-input1 validate-input" data-validate = "Message is required">
				<p><strong>Загрузите картинку в формате JPEG, PNG или GIF</strong></p>
			</div>
			<div class="container-contact1-form-btn">
				<button class="contact1-form-btn" >
					<span>
						<p><input type="file" class="contact1-form-btn" name="src" accept="image/jpeg,image/png,image/gif" required></p>
						<i class="fa fa-long-arrow-right" aria-hidden="true"></i>
					</span>
				</button>
			</div>
			<br>
            <p><input type="submit" name="submit"></p>
        </form>
	</div>
</div>

<div class="space"></div>