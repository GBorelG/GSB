<?php
	// R�cup�ration des informations pour  la connexion � MySQL
	$login="root";
	$mdp="root";
	$host="localhost";
	// Connexion au serveur
	 //	$connexion=mysql_connect($host,$login,$mdp) or die("Connexion � " . SERVEUR . " impossible");

		$connect=mysqli_connect("localhost","root","root","gsb");
	//$mysqli = new mysqli("localhost", "root", "", "gsb");
	/* V�rification de la connexion */
	if (mysqli_connect_errno()) {
	    printf("�chec de la connexion : %s\n", mysqli_connect_error());
	exit();
	}
?>
