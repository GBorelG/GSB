<?php
	// R�cup�ration des informations pour  la connexion � MySQL
	$login="root";
	$mdp="";
	$host="localhost";
	// Connexion au serveur
 //	$connexion=mysql_connect($host,$login,$mdp) or die("Connexion � " . SERVEUR . " impossible");

$connect=mysqli_connect("localhost","root","","gsb");
//$mysqli = new mysqli("localhost", "root", "", "gsb");
/* V�rification de la connexion */
if (mysqli_connect_errno()) {
    printf("�chec de la connexion : %s\n", mysqli_connect_error());
    exit();
}


	$db="gsb";
	// S�lection de la base de donn�es
//	$dbselect= mysql_select_db($db,$base) or die("Acc�s � la base de donn�es " .BASE. " impossible");

?>
