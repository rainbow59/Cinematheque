<!-- Pas de HTML dans les models et controllers : première balise HTML dans la vue-->
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
</head>
<header>
<div class="container">
    <div class="row">
        <div class="col-md-3">
                <nav class="navbar navbar-expand-lg navbar-light bg-light"> <a class="navbar-brand" href="accueil.php"> Accueil </a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText"
                    aria-expanded="false" aria-label="Toggle navigation"> <span class="navbar-toggler-icon"></span> </button>
        </div>
        <div class="container_nav">
            
                <div class="col-md-6">
                    <div class="nav" id="nav">
                        <ul class="navbar-nav mr-auto">
                             <li class="nav-item active"> <a class="nav-link" href="FilmView.php"> Films <span class="sr-only">
                                            (current) </span></a>
                            </li>
                            <li class="nav-item"> <a class="nav-link" href="FormView.php"> Spécial Noël ! </a> </li>
                            <li class="nav-item"> <a class="nav-link" href=""> Nouveau film</a> </li>
                    </div>
                </div>
            
        </div>
        <div class="col-md-3">
            </ul> <span class="nav-text"> Cinémathèque </span>
            </nav>
        </div>

    </div>
</div>
</header>
<body>

    <h1><?=$page?></h1>
    <ul>
        <!-- Comme la vue est incluse depuis le controller, on a accès à la variables $movies du controller : on fait une boucle pour afficher le titre de chaque film -->
        <?php foreach ($movies as $key => $movie) : ?>
           <li><a href="?page=film&id=<?=$movie['id_film']?>"><?=$movie['titre']?></a></li>
        <?php endforeach; ?>

    </ul>
    
 <p>Cliquez <a href="?page=Form">ici</a> pour rentrer un film dans la base de données</p>
</body>
</html>