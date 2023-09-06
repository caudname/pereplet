<?php
	require("includes/db_connect.php");
	session_start();
	
	if (isset($_POST["regist"])){
		$name = $_POST["name"];
		$surname = $_POST["surname"];
		$login = $_POST["login"];
		$password = $_POST["password"];
		$email = $_POST["email"];
		$phone = $_POST["phone"];

		$query = "SELECT * FROM users WHERE login = '$login'";
		$result = mysqli_query($link, $query);

		if (mysqli_num_rows($result) == 0){
			$sql ="INSERT INTO users(name, surname, login, password, email, phone) VALUES ('$name', '$surname', '$login', '$password', '$email', '$phone')";
			$add = mysqli_query($link, $sql);
			session_start();
			$_SESSION["status"] = "yes";
			$_SESSION["name"] = $name;
			$_SESSION["login"] = $login;
			$_SESSION["password"] = $password;
			header("Location: index.php");
		} else {
			$message = 'Такой пользователь уже есть!';
		}
	}

	include("includes/header.php");
?>

	<!-- Основной контент сайта -->
	<main>
		<div class="container">
			<div class="regist-block">
				<h1 class="main-title">Регистрация</h1>
				<div class="regist-form">
					<form method="post">
						<div class="regist-item">
							<input type="text" name="name" placeholder="Введите имя" class="regist-input" required autofocus>
						</div>
						<div class="regist-item">
							<input type="text" name="surname" placeholder="Введите фамилию" class="regist-input" required>
						</div>
						<div class="regist-item">
							<input type="text" name="login" placeholder="Введите логин" class="regist-input" required>
						</div>
						<div class="regist-item">
							<input type="password" name="password" placeholder="Введите пароль" class="regist-input" required>
						</div>
						<div class="regist-item">
							<input type="text" name="email" placeholder="Введите почту" class="regist-input" required>
						</div>
						<div class="regist-item">
							<input type="text" name="phone" placeholder="Введите номер телефона" class="regist-input" required>
						</div>
						<div class="regist-item">
							<button class="regist-button" name="regist">Зарегистрироваться</button>
						</div>
					</form>
					
				</div>
				<h1 class="main-title regist-error"><?php echo $message; ?></h1>
			</div>
		</div>
	</main>

	<!-- Подвал сайта -->
<?php
	include("includes/footer.php");
?>
