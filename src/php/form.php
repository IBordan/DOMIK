<?php
	$title = trim(filter_var($_POST['title'], FILTER_SANITIZE_STRING));
	$price = trim(filter_var($_POST['price'], FILTER_SANITIZE_STRING));
	$location = trim(filter_var($_POST['location'], FILTER_SANITIZE_STRING));
	$city = trim(filter_var($_POST['city'], FILTER_SANITIZE_STRING));
	$square = trim(filter_var($_POST['square'], FILTER_SANITIZE_STRING));
	$floors = trim(filter_var($_POST['floors'], FILTER_SANITIZE_STRING));
	$room = trim(filter_var($_POST['room'], FILTER_SANITIZE_STRING));
	$desk = trim(filter_var($_POST['desk'], FILTER_SANITIZE_STRING));
	$uploadbtn = trim(filter_var($_POST['uploadbtn'], FILTER_SANITIZE_STRING));
	
	require_once (../connect.php);
	
	$sql = 'INSERT INTO posts(title, price, location, city, square, floors, room, desk, photo) VALUES(?, ?, ?, ?, ?, ?, ?, ?, ?)';
	$query = $pdo->prepare($sql);
	
	echo 'Готово';
	
	?>