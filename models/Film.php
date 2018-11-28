<?php

$host = '127.0.0.1';
	$db = 'Cinematheque';
	$user ='phpmyadmin';
	$pass = 'aleth';
	$charset = 'utf8mb4';

	$dbh = "mysql:host=$host;dbname=$db;charset=$charset";
	$options = [
		PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
		PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
		PDO::ATTR_EMULATE_PREPARES   => false,
	];

	try {
		$dbh = new PDO($dbh, $user, $pass, $options);
	echo 'Connection établie <br>';

	} catch (PDOException $e) {
		echo 'Connexion échouée : ' . $e->getMessage();
	}

function getAllMovies() {
	global $dbh;
	$movie = $dbh->query("SELECT * FROM `Films`;");
	return $movie->fetchAll();
}


function getOneMovie($id) {
    global $dbh;

    $movies = $dbh->query('SELECT * FROM `Films` WHERE id_film='.$id.';');

    return $movies->fetch();
}