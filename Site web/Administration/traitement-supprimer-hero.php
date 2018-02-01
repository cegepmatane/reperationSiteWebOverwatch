<?php

	include "baseDeDonnees.php";
	include "barre-navigation.php";
	
	if($_POST['supprimer'] == "oui")
	{
		$SQL_SUPPRIMER_HERO = "DELETE FROM heros WHERE id_hero = '".$_GET['heros']."'";
		
		echo $SQL_SUPPRIMER_HERO;
	
		$basededonnees->exec($SQL_SUPPRIMER_HERO);
		
		header('Refresh: 2; URL=liste-hero.php');
	}
	
	
	
	
?>	

<!doctype html>
<html lang="fr">
<head>
	<meta charset="utf-8">
	<title>Traitement</title>
	
	<style>
	
	
	
	</style>
	
	
</head>
<body>

	
	<h2>Traitement</h2>
	
	<?php
	
		var_dump($_POST);
	
	?>

</body>
</html>
