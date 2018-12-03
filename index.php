<?php 

$racine= $_SERVER["DOCUMENT_ROOT"]; // Adresse du dossier sur le disque dur
$base_url = "http://localhost/cinematheque"; // //Adresse du dossier en local
$chemin_reel = realpath("index.php"); //On récupère le chemin réel d'index.php, par exemple c:/wamp64/www/explorateur/index.php
$chemin_reel = str_replace("index.php","",$chemin_reel); //On enlève "index.php" pour ob


if (isset($_GET['page']) && !empty($_GET['page'])) {

$page=$_GET['page'];

}else {
	$page='Home';
}

$page = ucfirst($page);

include('controllers/'.$page.'Controller.php');