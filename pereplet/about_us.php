<?php
	require ("includes/db_connect.php");
	session_start();
	include("includes/header.php");
?>

	<!-- Основной контент сайта -->

	<main>
		<div class="container">
			<div class="company">
				<h1 class="main-title">Про «Книжный магазин Переплёт»</h1>

				<div class="company-info">
					<div class="company-image-block">
						<img src="images/pereplet.jpg" class="company-image">
					</div>
					<div class="company-text-block">
						<p class="company-text">
							Книжный магазин Переплёт работает в сфере торговли в Махачкале и занимается реализацией. Она работает как интернет-магазин. Сотрудники готовы ответить на вопросы, касающиеся ассортимента и прайса, и постараются сделать процесс выбора более комфортным для покупателя. Ведь возвращающиеся снова клиенты - один из показателей процветания и возможности продолжать предлагать им то, что так необходимо. Здесь всегда можно узнать про действующие акции.
						</p>
						<p class="company-text">
							Также здесь предлагают приобрести книги и канцелярию. Компания предлагает читателям приобрести нашумевшие работы известных авторов или выбрать экземпляр с малым тиражом. Помимо тематической литературы в мягкой и твёрдой обложке, в каталоге этого интернет-магазина есть возможность купить ручки, офисную бумагу и иные канцелярские товары.
						</p>
						<p class="company-text">
							Телефон: +7 988 291-33-55. Книжный магазин Переплёт располагается по адресу: г Махачкала, ул Оскара, влд 37.
						</p>
					</div>
				</div>
			</div>
			<div class="map">
				<script>
					var online = navigator.onLine;
					var map = document.querySelector(".map");
					if (!online) {
						map.innerHTML = "<img src='images/map.png'>"
					}
				</script>
				<script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3A23f6e9656b20842a3e822f493b1b94758915e3283ad2eb853b5852a9406ce850&amp;width=100%&amp;height=420&amp;lang=ru_RU&amp;scroll=true"></script>
			</div>
		</div>
	</main>						

	<!-- Подвал сайта -->
<?php
	include("includes/footer.php");
?>