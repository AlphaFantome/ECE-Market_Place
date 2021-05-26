<?php
	$nom=$_POST['nom'];
	$ville=$_POST['ville'];
	$prenom=$_POST['prenom'];
	$email=$_POST['email'];
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


	
	$database = "ece market-place";
	$db_handle = mysqli_connect('localhost', 'root', '');
	$db_found = mysqli_select_db($db_handle, $database)

		// Create connection

// Check connection


$sql = "INSERT INTO acheteur (nom,prenom,adresse,adresseFact,email,ville,codePostal,pays,telephone,typeCarte,numeroCarte,nomProprietaire,dateExpiration,cryptogramme)
VALUES ('$nom','$prenom','$adresse','$adressefact','$email','$ville','$codepostal','$pays','$telephone','$type_de_carte','$numero_de_carte','$nom_porteur','$DateExpi','$securite')";


$result = mysqli_query($db_handle, $sql);
echo "<h4>Informations sur le nouveau compte ajouté:</h4>";
echo "<table border='1'>";
echo "<tr>";
echo "<th>" . "Nom" . "</th>";
echo "<th>" . "Prénom" . "</th>";
echo "<th>" . "adresse" . "</th>";
echo "</tr>";
while ($data = mysqli_fetch_assoc($result)) 
	{
		echo "<tr>";
		echo "<td>" . $data['nom']  . "</td>";
		echo "<td>" . $data['prenom'] . "</td>";
		echo "<td>" . $data['adresse'] . "</td>";
	}
	echo "</table>";

mysqli_close($db_handle);
?>