<?php
$SelectionAchat = $_POST['SelectionAchat'];
$Trie = $_POST['Trie'];
$dateF = $_POST['dateF'];
$dateD = $_POST['dateD'];
$Supply = $_POST['Supply'];
$Prix = $_POST['Prix'];
$Negocier= 0;


if(($SelectionAchat=="AchatIm")&&($Trie=="MeubleArt"))
{
	if($Supply>= $Prix)
	{
		//Suppression de l'article dans la BDD du vendeur
	}
	else
	{
		echo "Vous n'avez pas assez d'argent sur votre compte";
	}
}
if(($SelectionAchat=="AchatIm")&&($Trie=="AccessoireVIP"))
{
	if($Supply>= $Prix)
	{
		//Suppression de l'article dans la BDD du vendeur
	}
	else
	{
		echo "Vous n'avez pas assez d'argent sur votre compte";
	}
}
if(($SelectionAchat=="AchatIm")&&($Trie=="scolaire"))
{
	if($Supply>= $Prix)
	{
		//Suppression de l'article dans la BDD du vendeur
	}
	else
	{
		echo "Vous n'avez pas assez d'argent sur votre compte";
	}
}


if(($SelectionAchat=="vendeur-acheteur")&&($Trie=="MeubleArt"))
{
	echo "Vous pouvez négocier le prix 5 fois maximum Attention !!!";
	for($Negocier=0; $Negocier<5;$Negocier++)
	{

	}


}
if(($SelectionAchat=="vendeur-acheteur")&&($Trie=="AccessoireVIP"))
{
	echo "Vous pouvez négocier le prix 5 fois maximum Attention !!!";
	for($Negocier=0; $Negocier<5;$Negocier++)
	{
		
	}

}
if(($SelectionAchat=="vendeur-acheteur")&&($Trie=="scolaire"))
{
	echo "Vous pouvez négocier le prix 5 fois maximum Attention !!!";
	for($Negocier=0; $Negocier<5;$Negocier++)
	{
		
	}

}



if(($SelectionAchat=="MeilleurOffre")&&($Trie=="MeubleArt"))
{

}
if(($SelectionAchat=="MeilleurOffre")&&($Trie=="AccessoireVIP"))
{

}
if(($SelectionAchat=="MeilleurOffre")&&($Trie=="scolaire"))
{
	
}

?>