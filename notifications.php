<?php

	$AchatIm = $_POST['AchatIm'];
	$VendeurAcheteur = $_POST['VendeurAcheteur']



    		<option value="vendeur-acheteur"name="vendeur-acheteur">Transaction Vendeur-Acheteur</option>
    		<option value="MeilleurOffre" name="MeilleurOffre">MeilleurOffre</option> 
    		<option value="Tous1" name="Tous1">Tous</option>		
    	</select>
    	
    	<p>Choisissez le type d'articles désirer:</p>
    	<select id="Trie">
    		<option value="MeubleArt" name="MeubleArt">Meubles d'art</option>
    		<option value="AccessoireVIP" name="AccessoireVIP">Accessoire VIP</option>
    		<option value="scolaire" name="scolaire">Matériel scolaire</option> 
    		<option value="Tous2" name="Tous2">Tous</option>		
    	</select>
    	
    	<p>Choisissez le budget désirer:</p>
    	<select id="Budget">
    		<option value="PrixBas" name="PrixBas">Moins de 25€</option>
    		<option value="PrixMoyen" name="PrixMoyen">Entre 25€ et 75€</option>
    		<option value="PrixElevé" name="PrixElevé">Supérieur à 75€</option> 	
    		<option value="Tous3" name="Tous3">Tous</option>	