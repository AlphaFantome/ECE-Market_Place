<?php
//saisir les données de notre formulaire
$nom = isset($_POST["nom"])? $_POST["nom"] : "";
$prenom = isset($_POST["prenom"])? $_POST["prenom"] : "";
$adresse = isset($_POST["adresse"])? $_POST["adresse"] : "";
$adressefact = isset($_POST["adressefact"])? $_POST["adressefact"] : "";
$email = isset($_POST["email"])? $_POST["email"] : "";
$password = isset($_POST["PassWord"])? $_POST["PassWord"] : "";
$ville = isset($_POST["ville"])? $_POST["ville"] : "";
$codepostal = isset($_POST["codepostal"])? $_POST["codepostal"] : "";
$pays = isset($_POST["pays"])? $_POST["pays"] : "";
$telephone = isset($_POST["telephone"])? $_POST["telephone"] : "";
$type_de_carte = isset($_POST["type_de_carte"])? $_POST["type_de_carte"] : "";
$numero_de_carte = isset($_POST["numero_de_carte"])? $_POST["numero_de_carte"] : "";
$nom_porteur = isset($_POST["nom_porteur"])? $_POST["nom_porteur"] : "";
$DateExpi = isset($_POST["DateExpi"])? $_POST["DateExpi"] : "";
$securite = isset($_POST["securite"])? $_POST["securite"] : "";


//identifier votre BDD
$database = "marketplace";
//connectez-vous de votre BDD
$db_handle = mysqli_connect('localhost', 'root', '');
$db_found = mysqli_select_db($db_handle, $database);

//***************************************

//si le bouton1 ("Rechercher") est cliqué
/*if (isset($_POST["button1"])) 
{
	if ($db_found) 
	{
		 //on cherche un compte dans notre BDD
		 $sql = "SELECT * FROM acheteur";
		 // avec son email
		 	if ($email != "")
		 		{
		 			$sql .= " WHERE email LIKE '%$email%'";
								
				}
				$result = mysqli_query($db_handle, $sql);

				//regarder s'il y a des résultats
				if (mysqli_num_rows($result) != 0)
					{
						//cette email existe déjà dans notre BDD
						echo "Cette email est déjà utilisé. Veuillez en prendre un autre. <br>";
					} 
		 		else 
		 			{
		 				$result = mysqli_query($db_handle, $sql);
						echo "<h4>Informations sur le nouveau Compte ajouté:</h4>";
						echo "<table border='1'>";
						echo "<tr>";
						echo "<th>" . "Nom" . "</th>";
						echo "<th>" . "Prenom" . "</th>";
						echo "<th>" . "Adresse" . "</th>";
						echo "<th>" . "Adresse Factuel" . "</th>";
						echo "<th>" . "Email" . "</th>";
						echo "<th>" . "PassWord" . "</th>";
						echo "<th>" . "ville" . "</th>";
						echo "<th>" . "Code Postal" . "</th>";
						echo "<th>" . "Pays" . "</th>";
						echo "<th>" . "Numero de telephone" . "</th>";
						echo "<th>" . "Type de carte" . "</th>";
						echo "<th>" . "Numero de carte" . "</th>";
						echo "<th>" . "Nom du proprietaire de la carte" . "</th>";
						echo "<th>" . "Date d'expiration de la carte" . "</th>";
						echo "<th>" . "Cryptogramme" . "</th>";
						echo "</tr>";
				while ($data = mysqli_fetch_assoc($result)) 
					{
						echo "<tr>";
						echo "<td>" . $data['nom']  . "</td>";
						echo "<td>" . $data['prenom'] . "</td>";
						echo "<td>" . $data['adresse'] . "</td>";
						echo "<td>" . $data['adressefact']  . "</td>";
						echo "<td>" .  $data['email'] . "</td>";
						echo "<td>" .  $data['password'] . "</td>";
						echo "<td>" . $data['ville']  . "</td>";
						echo "<td>" . $data['codepostal'] . "</td>";
						echo "<td>" . $data['pays'] . "</td>";
						echo "<td>" . $data['telephone']  . "</td>";
						echo "<td>" .  $data['type_de_carte'] . "</td>";
						echo "<td>" . $data['numero_de_carte']  . "</td>";
						echo "<td>" . $data['nom_porteur'] . "</td>";
						echo "<td>" . $data['DateExpi']  . "</td>";
						echo "<td>" . $data['securite'] . "</td>";
					}
				echo "</table>";
		 	 	}
		 	} 
		 	else 
		 	{
		 	echo "Database not found. <br>";
		 	}
		 }
*/
		 //************************************

		 //si le bouton2 ("Ajouter") est cliqué

		if (isset($_POST["inscription"])) 
		 	{
		 		if ($db_found) 
		 			{
		 			//on cherche un compte dans notre BDD
		 			$sql = "SELECT * FROM acheteur";
		 			// avec son email
		 				if ($email != "")
		 					{
		 						$sql .= " WHERE email LIKE '%$email%'";
								
							}
							$result = mysqli_query($db_handle, $sql);

							//regarder s'il y a des résultats

							if (mysqli_num_rows($result) != 0)
							{
								//cette email existe déjà dans notre BDD
								echo "Cette email est déjà utilise. Veuillez en prendre un autre. <br>";
							} 
							else 
							{
								//on ajoute ce compte dans notre BDD
								$sql = "INSERT INTO acheteur(nom,prenom,adresse,adresseFact,email,password,ville,codePostal,pays,telephone,typeCarte,numeroCarte,nomProprietaire,dateExpiration,cryptogramme)VALUES('$nom','$prenom','$adresse','$adressefact','$email','password',$ville','$codepostal','$pays','$telephone','$type_de_carte','$numero_de_carte','$nom_porteur','$DateExpi','$securite')"; 
								$result = mysqli_query($db_handle, $sql);
								echo "Add successful. <br>";
								//on affiche le nouveau compte ajouté
								$sql = "SELECT * FROM acheteur";
								// avec son email
								if ($email != "")
									{
										$sql .= " WHERE email LIKE '%$email%'";
										
									}
									$result = mysqli_query($db_handle, $sql);
									echo "<h4>Informations sur le nouveau Compte ajoute:</h4>";
									echo "<table border='1'>";
									echo "<tr>";
									echo "<th>" . "Nom" . "</th>";
									echo "<th>" . "Prenom" . "</th>";
									echo "<th>" . "Adresse" . "</th>";
									echo "<th>" . "Adresse Factuel" . "</th>";
									echo "<th>" . "Email" . "</th>";
									echo "<th>" . "PassWord" . "</th>";
									echo "<th>" . "ville" . "</th>";
									echo "<th>" . "Code Postal" . "</th>";
									echo "<th>" . "Pays" . "</th>";
									echo "<th>" . "Numero de telephone" . "</th>";
									echo "<th>" . "Type de carte" . "</th>";
									echo "<th>" . "Numero de carte" . "</th>";
									echo "<th>" . "Nom du proprietaire de la carte" . "</th>";
									echo "<th>" . "Date d'expiration de la carte" . "</th>";
									echo "<th>" . "Cryptogramme" . "</th>";
									echo "</tr>";
								while ($data = mysqli_fetch_assoc($result)) 
								{
									echo "<tr>";
									echo "<td>" . $data['nom']  . "</td>";
									echo "<td>" . $data['prenom'] . "</td>";
									echo "<td>" . $data['adresse'] . "</td>";
									echo "<td>" . $data['adressefact']  . "</td>";
									echo "<td>" .  $data['email'] . "</td>";
									echo "<td>" .  $data['password'] . "</td>";
									echo "<td>" . $data['ville']  . "</td>";
									echo "<td>" . $data['codepostal'] . "</td>";
									echo "<td>" . $data['pays'] . "</td>";
									echo "<td>" . $data['telephone']  . "</td>";
									echo "<td>" .  $data['type_de_carte'] . "</td>";
									echo "<td>" . $data['numero_de_carte']  . "</td>";
									echo "<td>" . $data['nom_porteur'] . "</td>";
									echo "<td>" . $data['DateExpi']  . "</td>";
									echo "<td>" . $data['securite'] . "</td>";
								}
								echo "</table>";
							}
						} 
						else 
						{
							echo "Database not found. <br>";
						}
				 	}

				//************************************

				//si le bouton3 ("Supprimer") est cliqué

					/*if (isset($_POST["button3"])) 
					{
						if ($db_found) 
							{
								$sql = "SELECT * FROM book";
									if ($titre != "")
										{
											$sql .= " WHERE Titre LIKE '%$titre%'";
												if ($auteur != "") 
													{
														$sql .= " AND Auteur LIKE '%$auteur%'";
													}
										}
									$result = mysqli_query($db_handle, $sql);
									//regarder s'il y a des résultats
									if (mysqli_num_rows($result) == 0) 
										{
											//ce livre n'existe pas
											echo "Cannot delete. Book not found. <br>";
										} 
									else 
									{
										//on supprime ce item
										while ($data = mysqli_fetch_assoc($result)) 
											{
												$id = $data['ID'];
											}
									//on supprime ce item par son ID
									$sql = "DELETE FROM bookWHERE ID = $id";
									$result = mysqli_query($db_handle, $sql);
									echo "Delete successful. <br>";
									//On affiche les restes de livre dans notre BDD
									$sql = "SELECT * FROM book";
									$result = mysqli_query($db_handle, $sql);
									echo "<h4>Les livres restant dans la bibliothèque:</h4>";
									echo "<table border='1'>";
									echo "<tr>";
									echo "<th>" . "ID" . "</th>";
									echo "<th>" . "Titre" . "</th>";
									echo "<th>" . "Auteur" . "</th>";
									echo "<th>" . "Ann&eacute;e" . "</th>";
									echo "<th>" . "Editeur" . "</th>";
									echo "<th>" . "Couverture" . "</th>";
									echo "</tr>";
									while ($data = mysqli_fetch_assoc($result))
									 {
									 	echo "<tr>";
									 	echo "<td>" . $data['ID']  . "</td>";
									 	echo "<td>" . $data['Titre'] . "</td>";
									 	echo "<td>" . $data['Auteur'] . "</td>";
									 	echo "<td>" . $data['Annee']  . "</td>";
									 	echo "<td>" .  $data['Editeur'] . "</td>";
									 	$image = $data['Couverture'];
									 	echo "<td>" . "<img src='$image' height='120' width='100'>" . "</td>";
									 	echo "</tr>";
									 }
									echo "</table>";
								}
							} 
							else 
							{
								echo "Database not found. <br>";
							}
					}//fermer la connexion
					*/
mysqli_close($db_handle);
?>