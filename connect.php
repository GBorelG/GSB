<?php
	// Récupération des informations pour  la connexion à MySQL
	$login="root";
	$mdp="";
	$host="localhost";
	// Connexion au serveur
 //	$connexion=mysql_connect($host,$login,$mdp) or die("Connexion à " . SERVEUR . " impossible");

$connect=mysqli_connect("localhost","root","","gsb");
//$mysqli = new mysqli("localhost", "root", "", "gsb");
/* Vérification de la connexion */
if (mysqli_connect_errno()) {
    printf("Échec de la connexion : %s\n", mysqli_connect_error());
    exit();
}


	$db="gsb";
	// Sélection de la base de données
//	$dbselect= mysql_select_db($db,$base) or die("Accès à la base de données " .BASE. " impossible");

?>
