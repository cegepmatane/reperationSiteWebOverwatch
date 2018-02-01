<?php
	include "baseDeDonnees.php";
	include "barre-navigation.php";
	include "DAO.php";
	
	$DAO = new DAO();
	
	$map = $DAO->afficherMapPourSkin($basededonnees);
	
	/*$SQL_MAP = "SELECT * FROM map WHERE id_map = " . $_GET['map'];
	$curseurMap = $basededonnees->query($SQL_MAP);
	$map = $curseurMap->fetch();*/
?>
<!doctype html>
<html lang="fr">
<head>
	<meta charset="utf-8">
	<title>Ajouter un skin</title>
	
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
		
		<h1>Ajouter un skin</h1>

		<form method="post" action="traitement-ajouter-skin.php?map=<?=$map['id_map']?>">
		
			<div>
			
				<label for="nom">Nom</label>
				<input id="nom" name="nom" type="text">
			
			</div>
			
			<div>
			
				<label for="prix">Prix</label>
				<input id="prix" name="prix" type="text">
			
			</div>
			
			<div>
			
				<label for="qualite">Qualité</label>
				<input id="qualite" name="qualite" type="text">
			
			</div>
			
			<div>
			
				<label for="evenement">Evenement (1 pour oui, 0 pour non)</label>
				<input id="evenement" name="evenement" type="text">
			
			</div>
			
			<input type="submit" name="enregistrer">
		
		</form>

</body>
</html>
