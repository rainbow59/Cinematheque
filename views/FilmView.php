<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Annuaire de films - <?=$page?></title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <h1><?=$page?></h1>

        <h2><?=$movie['titre']?></h2>

    <p>coucou!</p>
    <ul>
    <li>Sorti en <?=$movie['annee_sortie']?></li>
    <li>Réalisé par <?=$movie['id_realisateur']?></li>
    </ul>
    <h4>Synopsis</h4>
    <p><?=$movie['description']?></p>
</body>
</html>