<?php
$nom=$_POST['nom'];
$prenom=$_POST['prenom'];
$email=$_POST['email'];
$telephone=$_POST['telephone'];
$adresse=$_POST['adresse'];
$codepostal=$_POST['codepostal'];
$pays=$_POST['pays'];
$adresse2=$_POST['adresse2'];
$type_de_carte=$_POST['type_de_carte'];
$numero_de_carte=$_POST['numero_de_carte'];
$DateExpi=$_POST['DateExpi'];
$securite=$_POST['securite'];
$nom_porteur=$_POST['nom_porteur'];


$host ="localhost";
$dbUsername="root";
$dbPassword="";
$dbname="ece market-place"

$conn=new mysqli($host,$dbUsername,$dbPassword,$dbname);
	if(mysqli_connect_error())
	{
		die('Connect Error('.mysqli_conect_error().')'.mysqli_connect_error());
	}
	else
	{
		$SELECT = "SELECT email From register Where email = ? Limit 1";
		$INSERT = "INSERT Into register (nom,prenom,email,telephone,adresse,codepostal,pays,adresse2,type_de_carte,numero_de_carte,DateExpi,securite,nom_porteur) values(?,?,?,?,?,?,?,?,?,?,?,?,?)";
		//Prepare statement
		$stmt = $conn -> prepare($SELECT);
		$stmt -> bind_param("s"$email);
		$stmt -> execute();
		$stmt ->bind_result($email);
		$stmt ->store_result();
		$rnum=$stmt ->num_rows;
		if($rnum==0)
		{
			$stmt->close();

			$stmt = $conn->prepare($INSERT);
			$stmt->bind_param("sssisisssiiis", $nom,$prenom,$email,$telephone,$adresse,$codepostal,$pays,$adresse2,$type_de_carte,$numero_de_carte,$DateExpi,$securite,$nom_porteur);
			$stmt->execute();
			echo "Votre inscription à bien été faite !";

		}
		else
		{
			echo "Votre adresse mail est déjà utilisé";
		}
		$stmt->close();
		$conn->close();

	}
?>