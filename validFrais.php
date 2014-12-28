<?php
	include('connect.php');
	
	$id=$_COOKIE['ID'];
	$mois=$_COOKIE['mois'];
	$comptable=$_COOKIE['comptable'];
	$justificatif=$_POST['hcMontant'];
	$date= date("Y-m-d");
	
	$montant=$_POST['repas']*25+$_POST['nuitee']*80+$_POST['etape']*110+$_POST['km']*0.62+$_POST['hfMont1'];
	if($_POST['situation']=$_POST['situationHF'])
	{
		if(($_POST['situation']=="V")&&($_POST['situationHF']=="V"))
		{
			$req="UPDATE fichefrais SET idEtat='VA', idCptResp='$comptable', nbJustificatifs='$justificatif',dateModif='$date',montantValide='$montant' WHERE idVisiteur='$id' AND mois='$mois'";
			$result=mysql_query($req) or die ("req");
		}
		if(($_POST['situation']=="R")&&($_POST['situationHF']=="R"))
		{
			$req="UPDATE fichefrais SET idEtat='RB', idCptResp='$comptable', nbJustificatifs=0,dateModif='$date',montantValide='$montant' WHERE idVisiteur='$id' AND mois='$mois'";
			$result=mysql_query($req) or die ("req");
		}
	}
	else
	{
		$req="UPDATE fichefrais SET idEtat='CR', idCptResp='$comptable', nbJustificatifs='$justificatif',dateModif='$date',montantValide='$montant' WHERE idVisiteur='$id' AND mois='$mois'";
		$result=mysql_query($req) or die ("req");
	}
	echo "<h1>Enregistrement Réussi</h1>";
	include("formValidFrais.php");
?>