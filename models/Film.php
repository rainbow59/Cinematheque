<?php

include('ConnectionBDD.php');

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