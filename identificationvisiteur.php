<?php
ob_start();
// Appel du script de connexion au serveur et � la base de donn�es
	require("connect.php");
	$connect=mysqli_connect("localhost","root","root","gsb");
// On r�cup�re les donn�es saisies dans le formulaire
	$logSaisi = $_POST["log"];
	$motPasseSaisi = $_POST["mdp"];

// On r�cup�re dans la base de donn�es le mot de passe qui correspond au nom saisi par le visiteur
	$sql = "SELECT mdp FROM users WHERE login='$logSaisi'";
	$result = mysqli_query($connect,$sql)or die("erreur sur sql".$sql);
	$ligne = $result->fetch_array(MYSQLI_ASSOC);
	$motPasseBdd = $ligne['mdp'];

if($motPasseBdd!=$motPasseSaisi)
{
	echo "<center>Votre saisie est erron�e Recommencez SVP...</center>";
	include("loginVisiteur.php");
}
else
{	
	//r�cuperation de l'identifiant du visiteur
	$rechercheid = "SELECT id FROM users WHERE login='$logSaisi'";
	$resultID = mysqli_query($connect,$rechercheid) or die ("erreur 1");
	$id = $resultID->fetch_array(MYSQLI_ASSOC);
	setCookie("id",$id,time()+3600);
	header("location:formSaisieFrais.php");		
}
ob_end_flush();
?>
