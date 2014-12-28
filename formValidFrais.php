<?php if($_COOKIE["comptable"]=="")
	header("location:choixUtil.html");
	else?>

<html>
<head>
	<title>Gestion des frais de visite</title>
	<?php include("hautConnecteComptable.html");?>
	
	<div id="corps2">
	<blockquote>
	<h2> Choisissez un visiteur et un mois </h2>
	<form name="recherche" action="listeFrais.php" method="post">
	<?php
				include('connect.php');
				$connect=mysqli_connect("localhost","root","","gsb");
				$req = "select nom from visiteur";
				$resultat = mysqli_query($connect, $req) or die ("requête non executé");
				$names = $resultat->fetch_array(MYSQLI_ASSOC);
				if (! $resultat) { echo "Erreur requete"; exit;} 
	?>
		<label class="titre">Choisir le visiteur :</label>
			<select name="lstVisiteur" class="zone">
				<?php
				foreach ($names as $name)
				{
					?>
						<option><?php echo ''.$name.'';?> </option>
					<?php
				}
				mysql_close($connexion);
				?>			
			
			</select>
			<label class="titre">Mois :</label>
			<select name="dateValid" class="zone">
				<option>Janvier</option>
				<option>F&eacute;vrier</option>
				<option>Mars</option>
				<option>Avril</option>
				<option>Mai</option>
				<option>Juin</option>
				<option>Juillet</option>
				<option>Aout</option>
				<option>Septembre</option>
				<option>Octobre</option>
				<option>Novembre</option>
				<option>D&eacute;cembre</option>
			</select>
			<input type="submit" value="Afficher" name="bouton"/>
		</form>
		
	</blockquote>
	</div>
</body>
</html>