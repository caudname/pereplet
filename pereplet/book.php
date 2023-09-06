<?php
	require("includes/db_connect.php");
	session_start();
	$title = $_GET["title"];

	include("includes/header.php");
?>


	<!-- Основной контент сайта -->
	<main>
		<div class="container">
			<div class="book-box">
<?php
	$query = "SELECT * FROM goods WHERE title = '$title'";
	$result = mysqli_query($link, $query);

	if (mysqli_num_rows($result) > 0) {
		$row = mysqli_fetch_array($result);

		echo '
				<div class="book-image-block">
					<a href="book.php?title='.$row["title"].'" class="image-link">
						<img src="images/'.$row["image"].'" class="book-image">
					</a>
				</div>
				<div class="book-info">
					<div class="book-info-block">
						<div class="book-title">
							<a href="book.php?title='.$row["title"].'" class="title-link">
								'.$row["title"].'
							</a>
						</div>
						<div class="book-author">
							'.$row["author"].'
						</div>
						<div class="book-number">
							ISBN: '.$row["ISBN"].'
						</div>
						<div class="book-data">
							Год издания: '.$row["year"].'
						</div>
						<div class="book-lang">
							Язык: '.$row["lang"].'
						</div>
						<div class="book-pages">
							Количество страниц: '.$row["pages"].' стр.
						</div>
						<div class="book-buy-block">
							<div class="book-price good-price">'.$row["price"].' руб</div>
							<a href="#" class="good-buy" id="'.$row["id"].'">Купить</a>
						</div>			
					</div>	
				</div>
			</div>

			<div class="book-description-block">
				<h1 class="main-title">Описание</h1>
				<div class="book-description">
					'.$row["description"].'
				</div>
			</div>
		';
	} else {
		echo '<h1 class="main-title">Книга не найдена!</h1>';
	}
?>


			
		</div>
	</main>
		
	<!-- Подвал сайта -->
<?php
	include("includes/footer.php");
?>