<?php


include('models/Film.php');



//Récupérer les données (ici, tous les films car on est sur la home)
$movies = getAllMovies();

//traiter les données
foreach ($movies as $key => $movie) {
    $movie['id_realisateur'] = ucfirst($movie['id_realisateur']); //Mets une majuscule au nom du réalisateur
}

//inclure la vue
include('views/HomeView.php');

