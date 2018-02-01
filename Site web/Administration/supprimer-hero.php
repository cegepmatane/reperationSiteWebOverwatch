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
	<title>Supprimer un héro</title>
	
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
		
		<h1>Supprimer un héro</h1>

		<form method="post" action="traitement-supprimer-hero.php?heros=<?=$heros['id_hero']?>">
		
			<label>Voulez-vous vraiment supprimer le héro "<?=$heros['nom']?>" ?</label>
			
			<input type="submit" name="supprimer" value="oui">
			<input type="submit" name="supprimer" value="non">
		
		</form>

</body>
</html>
