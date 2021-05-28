<?php
	echo "<h1>CreationVendeur</h1>";	
	//identifier votre BDD
	require_once ('NewVendeur.php');
	require_once ('connexion.php');
	$dbconn=MyConnection();
	
	if($_POST['inscription']=="inscription")
	{ // si formulaire soumis
		$nom=$_POST['nom'];
		$ville=$_POST['ville'];
		$prenom=$_POST['prenom'];
		$email=$_POST['email'];
		$password=$_POST['PassWord'];
		$telephone=$_POST['telephone'];
		$adresse=$_POST['adresse'];
		$codepostal=$_POST['codepostal'];
		$pays=$_POST['pays'];
		$adressefact=$_POST['adressefact'];
		$type_de_carte=$_POST['type_de_carte'];
		$numero_de_carte=$_POST['numero_de_carte'];
		$DateExpi=$_POST['DateExpi'];
		$securite=$_POST['securite'];
		$nom_porteur=$_POST['nom_porteur'];
    
		InsererVendeur ($nom,$prenom,$adresse,$adressefact,$email,$password,$ville,$codepostal,$pays,$telephone,$type_de_carte,$numero_de_carte,$nom_porteur,$DateExpi,$securite);
		echo TrouverVendeurParMail ($email);

	}
	//fermer la connexion
	mysqli_close($dbconn);
?>