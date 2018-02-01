<?php

	include "baseDeDonnees.php";
	include "barre-navigation.php";
	
	
	$SQL_HABILITE = "SELECT * FROM habilite WHERE id_habilite = " . $_GET['habilite'];
    
	
	$curseurHabilite = $basededonnees->query($SQL_HABILITE);
	$habilite = $curseurHabilite->fetch();
?>

<!doctype html>
<html lang="fr">
<head>
	<meta charset="utf-8">
	<title>Modifier une habilité</title>
	
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

		
		<h1>Modifier une habilité</h1>

		<form method="post" action="traitement-modifier-habilite.php?habilite=<?=$habilite['id_habilite']?>">
		
			<div>
			
				<label for="nom">Nom</label>
				<input id="nom" name="nom" type="text" value="<?=$habilite['nom']?>">
			
			</div>
			
			<div>
			
				<label for="description">Description</label>
				<input id="description" name="description" type="text" value="<?=$habilite['description']?>">
			
			</div>
			
			<div>
			
				<label for="touche_clavier">Touche clavier</label>
				<input id="touche_clavier" name="touche_clavier" type="text" value="<?=$habilite['touche_clavier']?>">
			
			</div>
			
			
			<input type="submit" name="enregistrer">
		
		</form>
		
		
		

</body>
</html>
