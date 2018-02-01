<?php
	include "baseDeDonnees.php";
	include "barre-navigation.php";
	
	$SQL_HEROS = "SELECT * FROM heros WHERE id_hero = " . $_GET['heros'];
    
	
	$curseurHeros = $basededonnees->query($SQL_HEROS);
	$heros = $curseurHeros->fetch();
?>
<!doctype html>
<html lang="fr">
<head>
	<meta charset="utf-8">
	<title>Ajouter une habilité</title>
	
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
		
		<h1>Ajouter une habilité</h1>

		<form method="post" action="traitement-ajouter-habilite.php?heros=<?=$heros['id_hero']?>">
		
			<div>
			
				<label for="nom">Nom</label>
				<input id="nom" name="nom" type="text">
			
			</div>
			
			<div>
			
				<label for="description">Description</label>
				<input id="description" name="description" type="text">
			
			</div>
			
			<div>
			
				<label for="touche_clavier">Touche clavier</label>
				<input id="touche_clavier" name="touche_clavier" type="text">
			
			</div>
			
			
			
			<input type="submit" name="enregistrer">
		
		</form>

</body>
</html>
