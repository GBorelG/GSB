<?php



	/*	connection to the serveur GSB	*/
		
		$connect=mysqli_connect("localhost","root","root","gsb") or die ("Connexion à " . SERVEUR . " impossible");


	/* check the connection to the server */
		if (mysqli_connect_errno()) {
		    printf("Échec de la connexion : %s\n", mysqli_connect_error());
		exit();
	}
?>
