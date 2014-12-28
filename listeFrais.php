<?php include('connect.php');?>
<?php 
	$connect=mysqli_connect("localhost","root","","gsb");
	Switch($_POST["dateValid"])
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
	$nom=$_POST["lstVisiteur"];
	//setcookie("mois","$mois",time()+3600);
	$mois = $_POST["dateValid"];
	$reqid="SELECT id FROM visiteur WHERE nom='$nom'";
	$resultID=mysqli_query($connect,$reqid) or die ("id non trouvé");
	$id=$resultID->fetch_array(MYSQLI_ASSOC);
	//setcookie("ID","$id",time()+3600);
	

	$req1 = "SELECT * FROM lignefraisforfait WHERE idVisiteur='$id' AND idFraisForfait='REP' AND mois='$mois'";
	$resultRepas=mysqli_query($connect,$req1) or die ("repas non trouvé");
	$row = $resultRepas->fetch_array(MYSQLI_ASSOC); 
	if($row['quantite']=="")
	{$repas=0;} else{$repas=$row['quantite'];}
	
	$req2="SELECT * FROM lignefraisforfait WHERE idVisiteur='$id' AND idFraisForfait='NUI' AND mois='$mois'";
	$resultNuitee=mysqli_query($connect,$req2) or die ("nuitée non trouvé");
	$row = $resultNuitee->fetch_array(MYSQLI_ASSOC); 
	if($row['quantite']=="")
	{$nuitee=0;} else{$nuitee=$row['quantite'];}
	
	$req3="SELECT * FROM lignefraisforfait WHERE idVisiteur='$id' AND idFraisForfait='ETP' AND mois='$mois'";
	$resultEtape=mysqli_query($connect,$req3) or die ("etape non trouvé");
	$row = $resultEtape->fetch_array(MYSQLI_ASSOC);
	if($row['quantite']=="")
	{$etape=0;} else{$etape=$row['quantite'];}
	
	$req4="SELECT * FROM lignefraisforfait WHERE idVisiteur='$id' AND idFraisForfait='KM' AND mois='$mois'";
	$resultKM=mysqli_query($connect,$req4) or die ("km non trouvé");
	$row = $resultKM->fetch_array(MYSQLI_ASSOC); 
	if($row['quantite']=="")
	{$km=0;} else{$km=$row['quantite'];}
	
	$req5="SELECT * FROM lignefraishorsforfait WHERE idVisiteur='$id' AND mois='$mois'";
	$result=mysqli_query($connect,$req5) or die ("HF non trouvé");
	$row = $result->fetch_array(MYSQLI_ASSOC); 
	$date=$row['date'];
	$libelle=$row['libelle'];
	$montant=$row['montant'];
	?>

<html>
<head>
	<title>Gestion des frais de visite</title>
	<?php include("hautConnecteComptable.html");?>
		
	<div id="corps2">
	<blockquote>
	<form action="validFrais.php" method="post">
		<h2>Frais au forfait </h2>
		<table style="color:black;" border="1">
			<tr><th>Repas midi</th><th>Nuit&eacute;e </th><th>Etape</th><th>Km </th><th>Situation</th></tr>
			<tr align="center"><td width="80" ><input type="text" size="3" name="repas" value="<?php echo $repas;?>"/></td>
				<td width="80"><input type="text" size="3" name="nuitee" value="<?php echo $nuitee;?>"/></td> 
				<td width="80"> <input type="text" size="3" name="etape" value="<?php echo $etape;?>"/></td>
				<td width="80"> <input type="text" size="3" name="km" value="<?php echo $km;?>"/></td>
				<td width="120"> 
					<input type="radio" name="situation" value="E" checked>Enregistr&eacute;</br>
					<input type="radio" name="situation" value="V">Valid&eacute;</br>
					<input type="radio" name="situation" value="R">Rembours&eacute;</br></td>
				</tr>
		</table>
		</br>
		<hr>
		<p class="titre" /><h2>Hors Forfait</h2>
		<table style="color:black;" border="1">
			<tr><th>Date</th><th>Libell&eacute;</th><th>Montant</th><th>Situation</th></tr>
			<tr align="center"><td width="100" ><input type="text" size="12" name="hfDate1" value="<?php echo $date;?>"/></td>
				<td width="220"><input type="text" size="30" name="hfLib1" value="<?php echo $libelle;?>"/></td> 
				<td width="90"> <input type="text" size="10" name="hfMont1" value="<?php echo $montant;?>"/></td>
				<td width="120"> 
					<input type="radio" name="situationHF" value="E" checked>Enregistr&eacute;</br>
					<input type="radio" name="situationHF" value="V">Valid&eacute;</br>
					<input type="radio" name="situationHF" value="R">Rembours&eacute;</br></td>
				</tr>
		</table>		
		<p class="titre"></p>
		<div class="titre">Nb Justificatifs</div><input type="text" class="zone" size="4" name="hcMontant"/>		
		<p class="titre" /><label class="titre">&nbsp;</label><input class="zone"type="reset" /><input class="zone"type="submit"/>
		
	</form>
	</blockquote>
	</div>
</body>
</html>