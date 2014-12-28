<?php
	include('connect.php');
	$connect=mysqli_connect("localhost","root","","gsb");
	$id=$_COOKIE["visiteur"];
	$lemois=$_POST["moischoix"];
	Switch($_POST["moischoix"])
	{
		case "Janvier"		:$mois=1;break;
		case "Février"		:$mois=2;break;
		case "Mars"			:$mois=3;break;
		case "Avril"		:$mois=4;break;
		case "Mai"			:$mois=5;break;
		case "Juin"			:$mois=6;break;
		case "Juillet"		:$mois=7;break;
		case "Aout"			:$mois=8;break;
		case "Septembre"	:$mois=9;break;
		case "Octobre"		:$mois=10;break;
		case "Novembre"		:$mois=11;break;
		case "Décembre"		:$mois=12;break;
	}
	
	$req="select * from fichefrais where idVisiteur='$id' and mois='$lemois'";
	$result=mysqli_query($connect,$req) or die ("requette");
	$row = $result->fetch_array(MYSQLI_ASSOC);
	
	$nbJustificatif=$row['nbJustificatifs'];
	$montant=$row['montantValide'];
	$date=$row['dateModif'];
	$e=$row['idEtat'];
	
	$req2="select * from etat where id='$e'";
	$resultE=mysqli_query($connect,$req2) or die ("requette");
	$rowEtat= $resultE->fetch_array(MYSQLI_ASSOC);
	$etat=$rowEtat["libelle"];
	
	include("hautConnecteVisiteur.php");
?>
	<html>
	<title>Votre demande</title>
	<body>
	<div id="corps2" style="margin-bottom:4px">
	<?php 
		include('mois.php');
	?>
	</div>
	<div id="corps2">
	<blockquote>
		<B>Demande du mois de <?php echo $lemois;?></B>
		
		<p>Derni&egrave;re modification le :   <?php echo $date;?></p>
		<p>Etat :   <?php echo $etat;?></p>
		<p>Montant :   <?php echo $montant;?></p>
		<P>Nombre de justificatifs demand&eacute;s :   <?php echo $nbJustificatif;?></p>
	</blockquote>
	</body>
	</html>