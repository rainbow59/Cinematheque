<!DOCTYPE html>
<html>
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
    <nav class="navbar navbar-expand-lg navbar-light bg-light"> <a class="navbar-brand" href="accueil.php"> Accueil </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText"
            aria-expanded="false" aria-label="Toggle navigation"> <span class="navbar-toggler-icon"></span> </button>
        <div class="nav" id="nav">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active"> <a class="nav-link" href="FilmView.php"> Films <span class="sr-only">
                            (current) </span></a>
                </li>
                <li class="nav-item"> <a class="nav-link" href="FormView.php"> Spécial Noël ! </a> </li>
                <li class="nav-item"> <a class="nav-link" href=""> Nouveau film</a> </li>
        </div>
        </ul> <span class="nav-text"> Cinemathèque </span>
    </nav>
</header>
<body>
	<h1>Enrichissement de la base de données</h1>

<form method="post" action="?page=Form">
	<label for="titre">Entrez le titre du film</label>
	<input type="text" name="titre"><br>
	<label for="date">Entrez l'année de sortie</label>
	<input type="text" name="date"><br>
	<label for="description">Entrez le synopsis</label>
	<input type="text" name="description"><br>
	<label for="realisateur">Entrez le nom du réalisateur</label>
	<input type="text" name="realisateur"><br>
	<label for="genre">Entrez le genre</label>
	<input type="text" name="genre"><br>
	<input type="submit" name="valider" value="Envoyer">
	</form>

</body>
</html>