<?php
	$servername = 'localhost';
	$db_user = 'root';
	$db_password = 'root';
	$db_name = 'db_pereplet';

	$link = mysqli_connect($servername, $db_user, $db_password, $db_name) 
	or die("Ошибка".mysqli_error() );
?>
