<?php
	$user = 'root';
	$password = '';
	$db = 'posts';
	$host = 'localhost';
	
	$dsn = 'mysql:host='.$host.';dbname='.$db;
	$pdo = new PDO($dsn, $user, $password);