<?php if($_COOKIE["visiteur"]=="")
	header("location:choixUtil.html");
	else?>
<html>
<head>
	
	<title>Gestion des frais de visite</title>
	
	<?php include("hautConnecteVisiteur.php");?>
	
	<script language="javascript">
	
        function ajoutLigne( pNumero){//ajoute une ligne de produits/qté à la div "lignes"     
			//masque le bouton en cours
			document.getElementById("but"+pNumero).setAttribute("hidden","true");	
			pNumero++;										//incrémente le numéro de ligne
            var laDiv=document.getElementById("lignes");	//récupère l'objet DOM qui contient les données
			var titre = document.createElement("label") ;	//crée un label
			laDiv.appendChild(titre) ;						//l'ajoute à la DIV
			titre.setAttribute("class","titre") ;			//définit les propriétés
			titre.innerHTML= "   "+ pNumero + " : ";
			//zone our la date du frais
			var ladate = document.createElement("input");
			laDiv.appendChild(ladate);
			ladate.setAttribute("name","FRA_AUT_DAT"+pNumero);
			ladate.setAttribute("size","12"); 
			ladate.setAttribute("class","zone");
			ladate.setAttribute("type","text");	
			//zone de saisie pour un nouveau libellé			
			var libelle = document.createElement("input");
			laDiv.appendChild(libelle);
			libelle.setAttribute("name","FRA_AUT_LIB"+pNumero);
			libelle.setAttribute("size","30"); 
			libelle.setAttribute("class","zone");
			libelle.setAttribute("type","text");
			//zone de saisie pour un nouveau montant		
			var mont = document.createElement("input");
			laDiv.appendChild(mont);
			mont.setAttribute("name","FRA_AUT_MONT"+pNumero);
			mont.setAttribute("size","3"); 
			mont.setAttribute("class","zone");
			mont.setAttribute("type","text");			
			var bouton = document.createElement("input");
			laDiv.appendChild(bouton);
			//ajoute une gestion évenementielle en faisant évoluer le numéro de la ligne
			bouton.setAttribute("onClick","ajoutLigne("+ pNumero +");");
			bouton.setAttribute("type","button");
			bouton.setAttribute("value","+");
			bouton.setAttribute("class","zone");	
			bouton.setAttribute("id","but"+ pNumero);				
        }
    </script>
	</head>
	<body>
	
	<div id="corps2">
	<form name="formSaisieFrais" method="post" action="enregSaisieFrais.php">
		<blockquote>
		<h2>Saisie</h2></br>
		<B>Periode d'engagement :</B>
			<p>Mois : <select name="FRA_MOIS" class="zone">
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
												<option>D&eacute;cembre</option></select></p>
			<P>Ann&eacute;e :<input type="text" size="4" name="FRA_AN" class="zone" value = "<?php echo date("Y");?>"/><hr>
		<div style="left;"><strong>Frais au forfait</strong></div>
		</br>
		<label class="titre">Repas midi :</label><input type="text" size="2" name="FRA_REPAS" class="zone" />
		<label class="titre">Nuit&eacute;es :</label><input type="text" size="2" name="FRA_NUIT" class="zone" />
		<label class="titre">Etape :</label><input type="text" size="5" name="FRA_ETAP" class="zone" />
		<label class="titre">Km :</label><input type="text" size="5" name="FRA_KM" class="zone" />
		<hr>
		<p class="titre" /><div style="left;"><strong>Hors Forfait</strong></div></br>
		<div style="left;">			
			<div style="float:left;width:90;text-align:center;">Date(aaaa/mm/jj)</div>
			<div style="float:left;width:220;text-align:center;">Libell&eacute;</div>
			<div style="float:left;width:30;text-align:center;">Montant(&euro;)</div>
		</div></br>
		<div style="clear">
			<label class="titre" > 1 : </label>
			<input type="text" size="12" name="FRA_AUT_DAT1" class="zone"/>
			<input type="text" size="30" name="FRA_AUT_LIB1" class="zone"/>
			<input class="zone" size="3" name="FRA_AUT_MONT1" type="text" />				
						
		</div>	
		<p class="titre" /><label class="titre">&nbsp;</label><input class="zone"type="reset" /><input class="zone"type="submit" />
		
		
	</blockquote>
	</form>
	</div>
</body>

</html>
