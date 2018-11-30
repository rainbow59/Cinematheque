<?php

//le controlleur inclut le ou les modèles
include('models/Film.php');
include('models/Genre.php');
include('models/Realisateur.php');

//Récupérer les données (ici, on est sur la page d'un film précis donc on récupère un seul film en fonction de l'ID)
$id=$_GET['id'];
$movie = getOneMovie($id);
$realisateur = getOneRealisateur($id);
$genre = getOneGenre($id);
//$genres = getAllGenres();

var_dump(getOneGenre($id));
//traiter les données
$realisateur['realisateur'] = ucfirst($realisateur['realisateur']); //Met une majuscule au nom du réalisateur


//inclure la vue
include('views/FilmView.php');
function getRealisateurById() {

}

?>