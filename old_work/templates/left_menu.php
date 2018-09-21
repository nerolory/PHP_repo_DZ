<div class="left_block"> <!-- блок меню -->
				<div id="block_menu_left">
					<ul id="mainmenu">
						<li class="menucap">МЕНЮ</li>
						<li><a href="index.php">ГЛАВНАЯ</a></li>
						<li><a href="index.php?page=feedback">КОНТАКТЫ</a></li>
						<?php if(isset($_SESSION['login']) && isset($_SESSION['pass']) && $_SESSION['login'] == 'admin') { ?>	
						<li><a href="index.php?page=admin">Админка</a>
							<ul id="menuinmenu">
						<?php } ?>
								<li><a href="index.php?page=basket">basket</a>
							</ul>
						</li>
					</ul>
				</div>
				<div id="baner">
					<div id="spacer"></div>
					<p>Теперь мы открыты!</p>
				</div>
			</div>