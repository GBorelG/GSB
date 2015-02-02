<html>
<title>Choix du mois</title>
<body>	
	<?php
	include("connect.php");
	if (isset($_COOKIE['id'])) {
		$id = $_COOKIE['id'];
	}else{
		$id = $_COOKIE['comptable'];
	}
	
	$req = "SELECT status FROM users WHERE id='$id'";
	$res = mysqli_query($connect, $req);
	$status = $res->fetch_assoc();


	$pagePrec = $_SERVER["HTTP_REFERER"];
	

	if(($pagePrec == "http://127.0.0.1:81/gsb/formSaisieFrais.php")||($pagePrec == "http://127.0.0.1:81/gsb/enregSaisieFrais.php")) {
		include("hautConnecteVisiteur.php");
		include('mois.php');
		include('footer.php');
	}elseif(($pagePrec == "http://127.0.0.1:81/gsb/listeFrais.php")||($pagePrec == "http://127.0.0.1:81/gsb/formValidFrais.php")){
		include("hautConnecteComptable.php");
		include("moisComptable.php");
		include("footer.php");
	}else{
		header('location:index.php');
	}
	?>
</body>
</html>