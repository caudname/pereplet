<?php
	
	require ("includes/db_connect.php");
	session_start();
	include("includes/header.php");
	
?>

	<!-- Основной контент сайта -->
<main>
		<div class="container">
			<div class="cart">
<?php

		$result = mysqli_query($link,"SELECT * FROM cart,goods WHERE cart.ip = '{$_SERVER["REMOTE_ADDR"]}' AND goods.id = cart.cart_id");
		if (mysqli_num_rows($result) > 0)
		{
		$row = mysqli_fetch_array($result);
			do {
				$cartCount = $cartCount + $row["count"];
			} while ( $row = mysqli_fetch_array($result) );
		echo '<h1 class="main-title cart-title">Корзина: '.$cartCount.'</h1>';
		}
		
		

		$result = mysqli_query($link,"SELECT * FROM cart,goods WHERE cart.ip = '{$_SERVER["REMOTE_ADDR"]}' AND goods.id = cart.cart_id");
		if (mysqli_num_rows($result) > 0)
		{
		$row = mysqli_fetch_array($result);
			echo '<div class="clear-cart-block"><a id="clear-cart">Очистить корзину</a></div>';

?>
				<div class="cart-block">
					<div class="cart-goods">
						<ul class="cart-list">
		<?php 


				do
				{

				$price = $row["price"] * $row["count"];
				$allprice = $allprice + $price;
							echo '
							<li class="cart-item">
								<div class="cart-item-image">
									<img src="images/'.$row["image"].'" class="good-image">
								</div>
								<div class="cart-item-title">
									<a href="book.php?title='.$row["title"].'"" class="title-link">'.$row["title"].'</a><br>
									<span class="good-author">
										'.$row["author"].'
									</span>
								</div>
								<div class="cart-item-actions__block">
									<div class="cart-item-actions">
										<button class="cart-button-plus cart-buttons" plusid="'.$row["cart_id"].'">+</button>
										<span class="product-count">'.$row["count"].'</span>
										<button class="cart-button-minus cart-buttons" minusid="'.$row["cart_id"].'">-</button>
									</div>
									<div>
										<a href="bag.php" class="cart-button-delete" id="'.$row["cart_id"].'">Удалить</a>
									</div>
								</div>
								<div class="cart-item-price" id="tovar'.$row["cart_id"].'">
								<h5>
									<span class="span-count">'.$row["count"].'</span> x <span class="span-price">'.$row["price"].' руб</span>
								</h5>
									<span id="price'.$row["cart_id"].'">'.$price.'</span> руб
								</div>
							</li>
							';

// 
}
while ($row = mysqli_fetch_array($result));

 echo '
	<h2 class="main-title allprice" align="right">Итого: <strong>'.$allprice.'</strong> руб</h2>
	<div class="cart-result-button__block">
		<a href="#" class="cart-result-button">Перейти к оформлению</a>
	</div>
</div>
';
  
} 
else
{
    echo '
		<h1 align="center">Корзина пуста</h1>
	</div>		
	';
}
?>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</main>
	<!-- Подвал сайта -->
<?php
	include("includes/footer.php");
?>