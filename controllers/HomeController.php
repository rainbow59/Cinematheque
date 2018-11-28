<?php


include('models/Film.php');
include('models/Genre.php');
include('models/Realisateur.php');

$id = 2;
//Récupérer les données (ici, tous les films car on est sur la home)
$movies = getAllMovies();

$movie = getOneMovie($id);

//traiter les données
foreach ($movies as $key => $movie) {
    $movie['id_realisateur'] = ucfirst($movie['id_realisateur']); //Mets une majuscule au nom du réalisateur
}

//inclure la vue
include('views/HomeView.php');

