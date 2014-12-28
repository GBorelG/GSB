<?php
	include('connect.php');
		
	//extraction des informations du formulaire de saisie.
	Switch($_POST["FRA_MOIS"])
	{
		case "Janvier":$mois=1;break;
		case "Février":$mois=2;break;
		case "Mars":$mois=3;break;
		case "Avril":$mois=4;break;
		case "Mai":$mois=5;break;
		case "Juin":$mois=6;break;
		case "Juillet":$mois=7;break;
		case "Aout":$mois=8;break;
		case "Septembre":$mois=9;break;
		case "Octobre":$mois=10;break;
		case "Novembre":$mois=11;break;
		case "Décembre":$mois=12;break;
	}
	$an = $_POST['FRA_AN'];
	$repasMidi = $_POST['FRA_REPAS'];
	$nuitees = $_POST['FRA_NUIT'];
	$etape = $_POST['FRA_ETAP'];
	$km = $_POST['FRA_KM'];
	$dateHF = $_POST['FRA_AUT_DAT1'];
	$libelle = $_POST['FRA_AUT_LIB1'];
	$montant = $_POST['FRA_AUT_MONT1'];
	$id=$_COOKIE["visiteur"];
	$mois=$_POST["FRA_MOIS"];
	
	
	//reprise de l'identifiant de l'utilisateur pour la crétion d'une fiche frais
	
	
	//création d'une fiche frais
	$reqfichefrais="INSERT INTO fichefrais(idVisiteur,mois, dateModif) VALUES ('$id','$mois','date(YYYY/MM/DD)')";
	$resultatfichefrais=mysql_query($reqfichefrais);
	
	//rédaction du script insérant les données dans la base de données.
	if (($repasMidi != NULL) || ($nuitees != NULL) || ($etape != NULL) || ($km != NULL))
	{
		if ($repasMidi != NULL)
		{
			$req = "INSERT INTO lignefraisforfait VALUES ('$id','$mois','REP','$repasMidi')";
			$result=mysql_query($req);
		}
		if ($nuitees != NULL)
		{
		$req1 = "INSERT INTO lignefraisforfait VALUES ('$id','$mois','NUI','$nuitees')";
		$result1=mysql_query($req1);
		}
		if ($etape != NULL)
		{
		$req2 = "INSERT INTO lignefraisforfait VALUES ('$id','$mois','ETP','$etape')";
		$result2=mysql_query($req2);
		}
		if ($km != NULL)
		{
		$req3 = "INSERT INTO lignefraisforfait VALUES ('$id','$mois','KM','$km')";
		$result3=mysql_query($req3);
		}
	}
if ($dateHF != NULL)
	{
		$req4 = "INSERT INTO lignefraishorsforfait(idVisiteur,mois,libelle,date,montant) VALUES ('$id','$mois','$libelle','$dateHF','$montant')";
		$result4=mysql_query($req4);
	}

	//déconnexion à la base de données
	mysql_close();
	echo "<h1>Demande envoy&eacute;e</h1>";
	include('formSaisieFrais.php');
	
?>


