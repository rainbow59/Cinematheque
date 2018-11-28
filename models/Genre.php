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
	

	} catch (PDOException $e) {
		echo 'Connexion échouée : ' . $e->getMessage();
	}

function getAllGenres() {
	global $dbh;
	$genre = $dbh->query("SELECT * FROM `Genres`;");
	return $genre->fetchAll();
}


 function getOneGenre($id) {
 	global $dbh;
 	$genre =$dbh -> query('SELECT * FROM `Genres` WHERE id_genre IN (SELECT id_genre from films_genres where id_film = '.$id.');');
 	return $genre->fetch();
 }