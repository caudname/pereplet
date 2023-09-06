<?php
	require ("includes/db_connect.php");

	$authLogin = $_POST["login"];
	$authPassword = $_POST["password"];

	$query = "SELECT * FROM users WHERE login='$authLogin' AND password='$authPassword'";
	$result = mysqli_query($link, $query);

		if (mysqli_num_rows($result) != 0) {
			$row = mysqli_fetch_array($result);
			session_start();
			$_SESSION["status"] = "yes";
			$_SESSION["name"] = $row["name"];
			$_SESSION["login"] = $row["login"];
			$_SESSION["password"] = $row["password"];
			echo $_SESSION["name"];
		} else {
			echo "no";
		}
	

?>