<?php
	// Récupération des informations pour  la connexion à MySQL
	$login="root";
	$mdp="root";
	$host="localhost";
	// Connexion au serveur
	 //	$connexion=mysql_connect($host,$login,$mdp) or die("Connexion à " . SERVEUR . " impossible");

		$connect=mysqli_connect("localhost","root","root","gsb");
	//$mysqli = new mysqli("localhost", "root", "", "gsb");
	/* Vérification de la connexion */
	if (mysqli_connect_errno()) {
	    printf("Échec de la connexion : %s\n", mysqli_connect_error());
	exit();
	}
?>
