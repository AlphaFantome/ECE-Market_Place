<?php

require_once ('connexion.php');

function InsererVendeur ($nom,$prenom,$adresse,$adressefact,$email,$password,$ville,$codepostal,$pays,$telephone,$type_de_carte,$numero_de_carte,$nom_porteur,$DateExpi,$securite)
{
    echo "InsererVendeur";
    $dbconn= MyConnection();
    $sql="INSERT INTO vendeur (Nom,Prenom,Adresse,AdresseFact,Email,Password,Ville,CodePostal,Pays,Telephone,TypeCarte,NumeroCarte,NomProprietaire,DateExpiration,Cryptogramme) VALUES ('$nom','$prenom','$adresse','$adressefact','$email','$password','$ville','$codepostal','$pays','$telephone','$type_de_carte','$numero_de_carte','$nom_porteur','$DateExpi','$securite')";
    $result = mysqli_query( $dbconn , $sql);
}

function TrouverVendeurParMail ($email)
{
    echo "TrouverVendeurParMail";
     $dbconn= MyConnection();
    $sql="SELECT * FROM vendeur WHERE Email LIKE '%$email%'";
    $result = mysqli_query( $dbconn , $sql);

    while($data=mysqli_fetch_assoc($result))
    {
        echo "Nom " .$data['Nom'] ."<br>";
        echo "Prénom " .$data['Prenom'] ."<br>";
        echo "Email " .$data['Email'] ."<br>";
        echo "Pays " .$data['Pays'] ."<br>";
    }
}

function afficherVendeur()
{
	$dbconn= MyConnection();
	$sql="SELECT * FROM vendeur";
	$result = mysqli_query( $dbconn , $sql);
	while($data=mysqli_fetch_assoc($result))
    {
        echo "Nom " .$data['Nom'] ."<br>";
        echo "Prénom " .$data['Prenom'] ."<br>";
        echo "Email " .$data['Email'] ."<br>";
        echo "Pays " .$data['Pays'] ."<br>";
    }
}


?>