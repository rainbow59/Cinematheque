<?php

function sendNewMovieToDB($new_titre, $new_description, $new_date) {
	global $dbh;
 	$insert =$dbh -> prepare("INSERT INTO Films(titre, description, annee_sortie) VALUES (?,?,?);");
 $insert->execute(array($new_titre,$new_description, $new_date));
 	return $insert->fetchAll();
 }

 function sendNewRealToDB($new_realisateur) {
	global $dbh;
 	$insert_film=$dbh -> prepare("INSERT INTO Realisateurs(realisateur) VALUES (?);");
 	$insert_film->execute(array($new_realisateur));
 	return $insert_film->fetchAll();
 	
 }

 function sendNewGenreToDB($new_genre) {
	global $dbh;
 	$insert_genre=$dbh -> prepare("INSERT INTO Genres(genre) VALUES (?);");
 	$insert_genre->execute(array($new_genre));
 	//updateGenre(1);
 	updateGenre(($dbh->lastInsertId());
 	
 }
 une fonction pour :
insert fi$ilm
recup id film
insert genre 
recup id genre
update en envoyant les 2 id en param
function updateTheReal() {
	global $dbh;
	$update_real=$dbh -> prepare("SELECT id_realisateur FROM Films WHERE id_film='".$id."';")
	$update_real->execute();
	return $update_real->fetch();
	if ($update_real['id_realisateur'] != 0) {
$update_real=$dbh->prepare("UPDATE Films.id_realisateur SET Realisateurs.id_realisateur FROM Realisateurs WHERE id_film='".$id."';")
	}
	crée real, recup id d'insertion, puis insertion film avec l'id du film
 } //si existe pas, update.

function updateGenre($id) {
	global $dbh;
	$update_acteur=$dbh -> prepare('UPDATE
        films_genres
        JOIN Genres ON Genres.id_genre=films_genres.id_genre
        JOIN Films  ON films_genres.id_film= Films.id_film
    SET films_genres.id_genre = Genres.id_genre
    WHERE Films.id_film = $id AND films_genres.id_genre IS NULL OR films_genres.id_genre = 0;');

}

 // $insert_film= $dbh -> query('SELECT Realisateurs.id_realisateur, Films.id_realisateur From Films JOIN Realisateurs ON Films.id_realisateur = Realisateurs.id_realisateur;');
 // 	return $insert_film->fetchAll();