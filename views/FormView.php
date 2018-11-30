<!DOCTYPE html>
<html>
<head>
	 <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Annuaire de films - <?=$page?></title>
    <link rel="stylesheet" href="style.css">
</head>
</head>
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