<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cinémathèque - <?=$page?></title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO"
    crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <script type="text/javascript"></script>
</head>
<header>
    <nav class="navbar navbar-expand-lg navbar-light bg-light"> <a class="navbar-brand" href="accueil.php"> Accueil </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText"
            aria-expanded="false" aria-label="Toggle navigation"> <span class="navbar-toggler-icon"></span> </button>
        <div class="nav" id="nav">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active"> <a class="nav-link" href="FilmView.php"> Films <span class="sr-only">
                            (current) </span></a>
                </li>
                <li class="nav-item"> <a class="nav-link" href="FormView.php"> Spécial Noël ! </a> </li>
        </div>
        </ul> <span class="nav-text"> Cinemathèque </span>
    </nav>
</header>
<body>

    <h1><?=$page?></h1>
<div class="container">
    <div class="row">
    <h2><?=$movie['titre']?></h2>


    <ul>
        <li>Sorti en <?=$movie['annee_sortie']?></li>
        <li>Réalisé par <?=$realisateur['realisateur']?></li>
        <li>Genre : <?php



        foreach ($genre as $key => $genre) {
          echo $genre['genre'].' ';

      } 

// A trouver plus trd, comment enlever la dernière virgule :
//echo trim($test, ',');
// echo 'substr';
// echo substr($test, 0, strpos($test, ','));

      ?>
  </li>
  <li>Acteurs : <?php

  foreach ($actors as $key => $actors) {
      echo $actors['acteurs'].', ';

  } 
  ?></li>
</ul>
<h4>Synopsis</h4>
<?=$id?>
<p><?=$movie['description']?></p>
</div>
<div class="row">

</div>
</div>

<img src="aladdin.jpg" alt="Affiche du film"/>
<a href="?page=Home">Retour à la case départ</a>
</body>
</html>