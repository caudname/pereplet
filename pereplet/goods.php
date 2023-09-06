<?php
	require("includes/db_connect.php");
	session_start();
	$category = $_GET["category"];

	include("includes/header.php");
?>

	<!-- Основной контент сайта -->

	<main>
		<div class="container">

			<div class="goods-block">
				
<?php
		echo '<h1 class="main-title">'.$category.'</h1>';
?>
				<div class="goods">
					<div class="goods-grid">


<?php
		$query = "SELECT * FROM goods WHERE category = '$category'";
		$result = mysqli_query($link, $query);

		if (mysqli_num_rows($result) > 0) {
			$row = mysqli_fetch_array($result);
			
			do {
				echo '
						<div class="good">
							<div class="good-image-block">
								<a href="book.php?title='.$row["title"].'" class="image-link">
									<img src="images/'.$row["image"].'" class="good-image">
								</a>
							</div>
							<div class="good-title-block">
								<div class="good-title">
									<a href="book.php?title='.$row["title"].'" class="title-link">
										'.$row["title"].'
									</a>
								</div>
								<div class="good-author">
									'.$row["author"].'
								</div>
							</div>
							
							<div class="buy-box">
								<div class="good-price">'.$row["price"].' руб</div>
								<a href="#" class="good-buy" id="'.$row["id"].'">Купить</a>
							</div>
						</div>

				';				
			} while ( $row = mysqli_fetch_array($result) );

		} else {
			echo '<h1 class="main-title">Книг такого жанра нет!</h1>';
		}
?>


					</div>
				</div>
			</div>
		</div>
	</main>

	<!-- Подвал сайта -->
<?php
	include("includes/footer.php");
?>