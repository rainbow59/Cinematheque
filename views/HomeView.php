<!-- Pas de HTML dans les models et controllers : première balise HTML dans la vue-->
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
    <ul>
        <!-- Comme la vue est incluse depuis le controller, on a accès à la variables $movies du controller : on fait une boucle pour afficher le titre de chaque film -->
        <?php foreach ($movies as $key => $movie) : ?>
           <li><a href="?page=film&id=<?=$movie['id_film']?>"><?=$movie['titre']?></a></li>
        <?php endforeach; ?>

    </ul>
    
 <p>Cliquez <a href="?page=Form">ici</a> pour rentrer un film dans la base de données</p>
</body>
</html>