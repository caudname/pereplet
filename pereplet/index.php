<?php
	require("includes/db_connect.php");
	session_start();
	include("includes/header.php");
?>

	<!-- Основной контент сайта -->

	<main>
		<div class="container">
			<!-- Все жанры -->
			<div class="cats-block">
				<h1 id="catalog" class="main-title">Все жанры</h1>
				<div class="cats">
					<div class="cats-grid">
						<div class="cat detectives">
							<div class="shadow-block">
								<a href="goods.php?category=Детективы" class="cat-title">Детективы</a>
							</div>
						</div>
						<div class="cat horror">
							<div class="shadow-block">
								<a href="goods.php?category=Ужасы" class="cat-title">Ужасы</a>
							</div>
						</div>
						<div class="cat adventures">
							<div class="shadow-block">
								<a href="goods.php?category=Приключения" class="cat-title">Приключения</a>
							</div>
						</div>
						<div class="cat novels">
							<div class="shadow-block">
								<a href="goods.php?category=Любовные романы" class="cat-title">Любовные романы</a>
							</div>
						</div>
						<div class="cat science">
							<div class="shadow-block">
								<a href="goods.php?category=Наука" class="cat-title">Наука</a>
							</div>
						</div>
						<div class="cat tale">
							<div class="shadow-block">
								<a href="goods.php?category=Рассказы" class="cat-title">Рассказы</a>
							</div>
						</div>
						<div class="cat fantasy">
							<div class="shadow-block">
								<a href="goods.php?category=Фэнтези" class="cat-title">Фэнтези</a>
							</div>
						</div>
						<div class="cat fantastic">
							<div class="shadow-block">
								<a href="goods.php?category=Фантастика" class="cat-title">Фантастика</a>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="goods-block">
				<h1 class="main-title" id="popular">Популярные</h1>
				<div class="goods">
					<div class="goods-grid">

						<div class="good">
							<div class="good-image-block">
								<a href="book.php?title=Остров сокровищ" class="image-link">
									<img src="images/Adventures/Adventures7.jpg" class="good-image">
								</a>
							</div>
							<div class="good-title-block">
								<div class="good-title">
									<a href="book.php?title=Остров сокровищ" class="title-link">
										Остров сокровищ
									</a>
								</div>
								<div class="good-author">
									Роберт Льюис Стивенсон
								</div>
							</div>
							
							<div class="buy-box">
								<div class="good-price">165 руб</div>
								<a href="#" class="good-buy" id="23">Купить</a>
							</div>
						</div>


						<div class="good">
							<div class="good-image-block">
								<a href="book.php?title=Выйти из чата" class="image-link">
									<img src="images/Detectives/Detectives6.jpg" class="good-image">
								</a>
							</div>
							<div class="good-title-block">
								<div class="good-title">
									<a href="book.php?title=Выйти из чата" class="title-link">
										Выйти из чата  
									</a>
								</div>
								<div class="good-author">
									Дженис Халлетт
								</div>
							</div>
							
							<div class="buy-box">
								<div class="good-price">551 руб</div>
								<a href="#" class="good-buy" id="6">Купить</a>
							</div>
						</div>

						<div class="good">
							<div class="good-image-block">
								<a href="book.php?title=Бегущий в лабиринте" class="image-link">
									<img src="images/Fantastic/Fantastic1.jpg" class="good-image">
								</a>
							</div>
							<div class="good-title-block">
								<div class="good-title">
									<a href="book.php?title=Бегущий в лабиринте" class="title-link">
										Бегущий в лабиринте
									</a>
								</div>
								<div class="good-author">
									Джеймс Дэшнер
								</div>
							</div>
							
							<div class="buy-box">
								<div class="good-price">484 руб</div>
								<a href="#" class="good-buy" id="57">Купить</a>
							</div>
						</div>

						<div class="good">
							<div class="good-image-block">
								<a href="book.php?title=Гарри Поттер и философский камень" class="image-link">
									<img src="images/Fantasy/Fantasy2.jpg" class="good-image">
								</a>
							</div>
							<div class="good-title-block">
								<div class="good-title">
									<a href="book.php?title=Гарри Поттер и философский камень" class="title-link">
										Гарри Поттер и философский камень
									</a>
								</div>
								<div class="good-author">
									Джоан Роулинг
								</div>
							</div>
							
							<div class="buy-box">
								<div class="good-price">736 руб</div>
								<a href="#" class="good-buy" id="50">Купить</a>
							</div>
						</div>

					</div>
				</div>
			</div>

			<div class="goods-block">
				<h1 class="main-title" id="new-books">Новинки</h1>
				<div class="goods">
					<div class="goods-grid">

						<div class="good">
							<div class="good-image-block">
								<a href="book.php?title=Дверь в лето" class="image-link">
									<img src="images/Fantastic/Fantastic6.jpg" class="good-image">
								</a>
							</div>
							<div class="good-title-block">
								<div class="good-title">
									<a href="book.php?title=Дверь в лето" class="title-link">
										Дверь в лето 
									</a>
								</div>
								<div class="good-author">
									Роберт Хайнлайн
								</div>
							</div>
							
							<div class="buy-box">
								<div class="good-price">200 руб</div>
								<a href="#" class="good-buy" id="62">Купить</a>
							</div>
						</div>


						<div class="good">
							<div class="good-image-block">
								<a href="book.php?title=Кто бы мог подумать! Как мозг заставляет нас делать глупости" class="image-link">
									<img src="images/Science/Science1.jpg" class="good-image">
								</a>
							</div>
							<div class="good-title-block">
								<div class="good-title">
									<a href="book.php?title=Кто бы мог подумать! Как мозг заставляет нас делать глупости" class="title-link">
										Кто бы мог подумать
									</a>
								</div>
								<div class="good-author">
									Ася Казанцева
								</div>
							</div>
							
							<div class="buy-box">
								<div class="good-price">718 руб</div>
								<a href="#" class="good-buy" id="33">Купить</a>
							</div>
						</div>

						<div class="good">
							<div class="good-image-block">
								<a href="book.php?title=Это не то" class="image-link">
									<img src="images/Tale/Tale6.jpg" class="good-image">
								</a>
							</div>
							<div class="good-title-block">
								<div class="good-title">
									<a href="book.php?title=Это не то" class="title-link">
										Это не то
									</a>
								</div>
								<div class="good-author">
									Оксана Тимофеева
								</div>
							</div>
							
							<div class="buy-box">
								<div class="good-price">266 руб</div>
								<a href="#" class="good-buy" id="46">Купить</a>
							</div>
						</div>

						<div class="good">
							<div class="good-image-block">
								<a href="book.php?title=Мистер Мерседес" class="image-link">
									<img src="images/Detectives/Detectives8.jpg" class="good-image">
								</a>
							</div>
							<div class="good-title-block">
								<div class="good-title">
									<a href="book.php?title=Мистер Мерседес" class="title-link">
										Мистер Мерседес
									</a>
								</div>
								<div class="good-author">
									Стивен Кинг
								</div>
							</div>
							
							<div class="buy-box">
								<div class="good-price">1065 руб</div>
								<a href="#" class="good-buy" id="8">Купить</a>
							</div>
						</div>

					</div>
				</div>
			</div>

		</div>
	</main>

	<!-- Подвал сайта -->
<?php
	include("includes/footer.php");
?>