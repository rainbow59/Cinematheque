<?php

	$host = 'localhost';
	$db = 'cinematheque';
	$user ='root';
	$pass = 'Lolorainbow!';
	$charset = 'UTF8';

	$dbh = "mysql:host=$host;dbname=$db;charset=$charset";
	$options = [
		PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
		PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
		PDO::ATTR_EMULATE_PREPARES   => false,
	];

	try {
		$dbh = new PDO($dbh, $user, $pass, $options);
	

	} catch (PDOException $e) {
		echo 'Connexion échouée : ' . $e->getMessage();
	}
