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

function updateTheReal() {
	global $dbh;
	$update_real=$dbh -> prepare("SELECT id_realisateur FROM Films WHERE id_film='".$id."';")
	$update_real->execute();
	return $update_real->fetch();
	if ($update_real['id_realisateur'] != 0) {
$update_real=$dbh->prepare("UPDATE Films.id_realisateur SET Realisateurs.id_realisateur FROM Realisateurs WHERE id_film='".$id."';")
	}
} //si existe pas, update.


 // $insert_film= $dbh -> query('SELECT Realisateurs.id_realisateur, Films.id_realisateur From Films JOIN Realisateurs ON Films.id_realisateur = Realisateurs.id_realisateur;');
 // 	return $insert_film->fetchAll();