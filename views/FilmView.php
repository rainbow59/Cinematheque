<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Annuaire de films - <?=$page?></title>
    <link rel="stylesheet" href="style.css">
    <script type="text/javascript"></script>
</head>
<body>

    <h1><?=$page?></h1>

        <h2><?=$movie['titre']?></h2>


    <ul>
    <li>Sorti en <?=$movie['annee_sortie']?></li>
    <li>Réalisé par <?=$realisateur['realisateur']?></li>
    <li>Genre : <?php
    	echo $genre['genre'];
 
 
?>
</li>
    </ul>
    <h4>Synopsis</h4>
    <p><?=$movie['description']?></p>


   <a href="?page=Home">Retour à la case départ</a>
</body>
</html>