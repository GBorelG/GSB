<?php
ob_start();
// Appel du script de connexion au serveur et à la base de données
	include("connect.php");
	
	$connect=mysqli_connect("localhost","root","","gsb");
// On récupère les données saisies dans le formulaire
	$logSaisi = $_POST["log"];
	$motPasseSaisi = $_POST["mdp"];

// On récupère dans la base de données le mot de passe qui correspond au nom saisi par le visiteur
	$sql = "SELECT mdp FROM visiteur WHERE login='$logSaisi'";
	$result=mysqli_query($connect,$sql);
	//$result = mysqli_query($mysqli,$sql);
//	$ligne = mysql_fetch_array($result,MYSQLI_ASSOC);
	$row = mysqli_fetch_array($result,MYSQLI_ASSOC);
	$motPasseBdd = $row['mdp'];

if($motPasseBdd!=$motPasseSaisi)
{
	echo "<center>Votre saisie est erronée Recommencez SVP...</center>";
	
	include("loginVisiteur.php");
}
else
{	
	//récuperation de l'identifiant du visiteur
	$rechercheid="SELECT id FROM visiteur WHERE login='$logSaisi'";
	$resultID=mysqli_query($connect,$rechercheid) or die ("erreur 1");
	$ID = $resultID->fetch_array(MYSQLI_ASSOC);

	setcookie("visiteur","$ID",time()+3600);	
}
if($ID){
	header("location:formSaisiefrais.php");
}else{
	include("loginVisiteur.php");
}
// Free result set
mysqli_free_result($result);
ob_end_flush();
?>
