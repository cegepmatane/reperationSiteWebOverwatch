<?php

	include "baseDeDonnees.php";
	include "barre-navigation.php";
	include "DAO.php";
	
	$DAO = new DAO();
	
	$skin = $DAO->afficherSupprimerSkin($basededonnees);
	
	/*$SQL_SKIN = "SELECT * FROM skin WHERE id_skin = " . $_GET['skin'];
    
	
	$curseurSkin = $basededonnees->query($SQL_SKIN);
	$skin = $curseurSkin->fetch();*/
?>

<!doctype html>
<html lang="fr">
<head>
	<meta charset="utf-8">
	<title>Modifier un skin</title>
	
	<style>
	
		label
		{
			display:block
			
		}
		
		form div
		{
			margin-top:10px;
		}
	
	</style>
	
	
</head>
<body>

		
		<h1>Modifier un skin</h1>

		<form method="post" action="traitement-modifier-skin.php?skin=<?=$skin['id_skin']?>">
		
			<div>
			
				<label for="nom">Nom</label>
				<input id="nom" name="nom" type="text" value="<?=$skin['nom']?>">
			
			</div>
			
			<div>
			
				<label for="prix">Prix</label>
				<input id="prix" name="prix" type="text" value="<?=$skin['prix']?>">
			
			</div>
			
			<div>
			
				<label for="qualite">Qualité</label>
				<input id="qualite" name="qualite" type="text" value="<?=$skin['qualite']?>">
			
			</div>
			
			<div>
			
				<label for="evenement">Evenement (1 pour oui, 0 pour non)</label>
				<input id="evenement" name="evenement" type="text" value="<?=$skin['evenement']?>">
			
			</div>
			
			
			<input type="submit" name="enregistrer">
		
		</form>
		
		
		

</body>
</html>
