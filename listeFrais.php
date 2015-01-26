<?php include('connect.php');?>
<?php 
	$connect=mysqli_connect("localhost","root","root","gsb");
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

	$mois = $_POST["dateValid"];

	$reqid="select * from users where nom='$nom'";
	$resultID = mysqli_query($connect,$reqid) or die ("id non trouvé");
	$user = $resultID->fetch_assoc();


	$req1 = "select * from fichefrais where idVisiteur='$user[id]' and mois='$mois'";
	$resultRepas = mysqli_query($connect,$req1) or die ("repas non trouvé");
	$row = $resultRepas->fetch_assoc(); 


	/*$req1 = "SELECT * FROM fichefrais WHERE idVisiteur='$id' AND idFraisForfait='REP' AND mois='$mois'";
	$resultRepas=mysqli_query($connect,$req1) or die ("repas non trouvé");
	$row = $resultRepas->fetch_assoc(); 
	if(!$row['quantite'])
	{$repas=0;} else{$repas=$row['quantite'];}
	
	$req2="SELECT * FROM fichefrais WHERE idVisiteur='$id' AND idFraisForfait='NUI' AND mois='$mois'";
	$resultNuitee=mysqli_query($connect,$req2) or die ("nuitée non trouvé");
	$row = $resultNuitee->fetch_array(MYSQLI_ASSOC); 
	if($row['quantite']=="")
	{$nuitee=0;} else{$nuitee=$row['quantite'];}
	
	$req3="SELECT * FROM fichefrais WHERE idVisiteur='$id' AND idFraisForfait='ETP' AND mois='$mois'";
	$resultEtape=mysqli_query($connect,$req3) or die ("etape non trouvé");
	$row = $resultEtape->fetch_array(MYSQLI_ASSOC);
	if($row['quantite']=="")
	{$etape=0;} else{$etape=$row['quantite'];}
	
	$req4="SELECT * FROM fichefrais WHERE idVisiteur='$id' AND idFraisForfait='KM' AND mois='$mois'";
	$resultKM=mysqli_query($connect,$req4) or die ("km non trouvé");
	$row = $resultKM->fetch_array(MYSQLI_ASSOC); 
	if($row['quantite']=="")
	{$km=0;} else{$km=$row['quantite'];}
	
	$req5="SELECT * FROM fichefrais WHERE idVisiteur='$id' AND mois='$mois'";
	$result=mysqli_query($connect,$req5) or die ("HF non trouvé");
	$row = $result->fetch_array(MYSQLI_ASSOC); 
	$date=$row['date'];
	$libelle=$row['libelle'];
	$montant=$row['montant'];
	*/
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
			<tr align="center">
				<td width="80"> <input type="text" size="3" name="repas"/> <?php echo $row['repas']; ?> </td>
				<td width="80"> <input type="text" size="3" name="nuitee"/> <?php echo $row['nuitees']; ?> </td>
				<td width="80"> <input type="text" size="3" name="etape"/> <?php echo $row['etapes']; ?> </td>
				<td width="80"> <input type="text" size="3" name="km"/> <?php echo $row['$km']; ?> </td>
				<td width="120">
					<input type="radio" name="situation" value="E" checked/>Enregistr&eacute;
					<input type="radio" name="situation" value="V"/>Valid&eacute;
					<input type="radio" name="situation" value="R"/>Rembours&eacute;</td>
				</tr>
		</table>
		
		<hr>
		<p class="titre" /><h2>Hors Forfait</h2>
		<table style="color:black;" border="1">
			<tr><th>Date</th><th>Libell&eacute;</th><th>Montant</th><th>Situation</th></tr>
			<tr align="center"><td width="100" ><input type="text" size="12" name="hfDate1"/><?php echo $row['date'];?></td>
				<td width="220"><input type="text" size="40" name="hfLib1"/><?php echo $row['libelle'];?></td> 
				<td width="90"> <input type="text" size="10" name="hfMont1"/><?php echo $row['montant'];?></td>
				<td width="120">
					<input type="radio" name="situationHF" value="E" checked/>Enregistr&eacute;
					<input type="radio" name="situationHF" value="V"/>Valid&eacute;
					<input type="radio" name="situationHF" value="R"/>Rembours&eacute;</td>
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