<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Переплет</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="icon" href="images/icon.png">
</head>
<body>
	<!-- Шапка сайта -->
	<header>
		<div class="header-top">
			<div class="container">
				<div class="header-top-box">
					<div class="header-logo">
						<a href="index.php">
							<img src="images/logo.png" class="header-logo-image">
						</a>
					</div>
					<div class="header-title">
						<a href="about_us.php" class="header-title-link">
							Книжный магазин <span class="header-title-text">"Переплёт"</span>
						</a>
					</div>
					<div class="header-reg">
						<?php
							if (isset($_SESSION["status"]) == "yes") {
								echo '<a class="header-reg-name">'.$_SESSION["name"].'</a>
								<div class="header-reg-link__block">
									<a class="header-reg-link" id="logout">Выйти</a>
								</div>';

							} else {
								echo '<a href="#" class="header-reg-icon"><i class="fa fa-user" aria-hidden="true"></i></a>';
							}
						?>
					</div>
				</div>
			</div>
		</div>

		<div class="header-menu">
			<div class="container">
				<div class="header-menu-box">
					<nav>
						<ul class="header-menu-list">
							<li>
								<a href="index.php">Главная</a>
							</li>
							<li>
								<a href="index.php#catalog">Каталог</a>
							</li>
							<li>
								<a href="index.php#popular">Популярные</a>
							</li>
							<li>
								<a href="index.php#new-books">Новинки</a>
							</li>
							<li>
								<a href="about_us.php">О нас</a>
							</li>
						</ul>
					</nav>
					<div class="header-menu-search-box">
						<div class="header-search-block">

							<form method="get" action="search.php">
								<input type="text" placeholder="Поиск" name="q" class="header-search-text" required value="<?php if (isset($searchText)) echo $searchText; ?>">
								<button class="header-search-link">
									<i class="fa fa-search" aria-hidden="true"></i>
								</button>
							</form>
						</div>
						<div class="header-cart-block">
							<a href="bag.php" class="header-cart-link">
								<i class="fa fa-shopping-cart" aria-hidden="true"></i>
							</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</header>
