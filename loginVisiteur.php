<html>
<head>
	<title>connexion</title>
	<link rel="stylesheet"
				media="screen"
				type="test/css"
				title="CSS"
				href="csstest.css"/>
	<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
	
	<script type="text/javascript">
	/*function verifChamps()
	{
		if (
			(document.getElementById("log").value=="")||(document.getElementById("mdp").value=="")
            )
		{
			alert("Remplir tous les champs");
			return false;
		}
	}*/
</script>
</head>
	<script type="text/javascript">
	function verifChamps()
	{
		if (
			(document.getElementById("log").value=="")||(document.getElementById("mdp").value=="")
            )
		{
			alert("Remplir tous les champs");
			return false;
		}
	}
</script>
<body id="basicBody" text="#000000" link="#CC0000">
<h1>Connectez vous</h1>
<center>
<div id="corps">
	<h2>Session Visiteur</h2>
  <form method="post" action="identificationvisiteur.php" name="identification" onSubmit="return verifChamps()">
    
			<center>	<div margin-bottom="5px">Votre login: <input type="text" name="log" id="log" size="25" maxlength="25"></div></br>
						<div>Votre mot de passe :<input type="password" name="mdp" id="mdp" size="8" maxlength="8"></div>
			
    
      <p> <font face="Comic Sans MS">
        <input type="submit" name="validation" value="Connexion"> </font></p>
</center><BR><BR><BR>
	  
	  
	  <center><p><font  color="#33CC99"><font color="#000066" size="4">Si 
        vous &ecirc;tes nouvel utilisateur vous devez
        remplir le </br><a href="formulaireInscriptionVisiteur.html">formulaire d'inscription</a>.</font> </center>
      </p>
   
  </form>

  </div>
  
  </center>
</body>
</html>
