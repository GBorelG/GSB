<?php
	include('connect.php');
	
		
	$connect=mysqli_connect("localhost","root","root","gsb");
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
	$id = $_COOKIE['visiteur'];
	

	//création d'une fiche frais
	$reqfichefrais="INSERT INTO fichefrais(idVisiteur,mois, dateModif) VALUES ('$id','$mois','date(YYYY/MM/DD)')";
	$resultatfichefrais=mysqli_query($connect, $reqfichefrais);
	
	//rédaction du script insérant les données dans la base de données.
	if (($repasMidi != NULL) || ($nuitees != NULL) || ($etape != NULL) || ($km != NULL))
	{
		if ($repasMidi != NULL)
		{
			$req = "INSERT INTO lignefraisforfait VALUES ('$id','$mois','REP','$repasMidi')";
			$result = mysqli_query($connect, $req);
		}
		if ($nuitees != NULL)
		{
		$req1 = "INSERT INTO lignefraisforfait VALUES ('$id','$mois','NUI','$nuitees')";
		$result1=mysqli_query($connect, $req1);
		}
		if ($etape != NULL)
		{
		$req2 = "INSERT INTO lignefraisforfait VALUES ('$id','$mois','ETP','$etape')";
		$result2=mysqli_query($connect, $req2);
		}
		if ($km != NULL)
		{
		$req3 = "INSERT INTO lignefraisforfait VALUES ('$id','$mois','KM','$km')";
		$result3=mysqli_query($connect, $req3);
		}
	}
if ($dateHF != NULL)
	{


		// Check connection
		if (!$connect) {
		    die("Connection failed: " . mysqli_connect_error());
		}

		$sql =  "INSERT INTO fichefrais(idVisiteur,mois,libelle,dateCrea,montantSaisie) VALUES ('$id','$mois','$libelle','$dateHF','$montant')";
		if (mysqli_query($connect, $sql)) {
		    echo "<h1>Demande envoy&eacute;e</h1>";
			include('formSaisieFrais.php');
		} else {
		    echo "Error: " . $sql . "<br>" . mysqli_error($connect);
		}
	}

?>


