<?php

	include "baseDeDonnees.php";
	include "barre-navigation.php";
	include "DAO.php";
	
	$SQL_HEROS = "SELECT * FROM heros WHERE id_hero = " . $_GET['heros'];
    
	
	$curseurHeros = $basededonnees->query($SQL_HEROS);
	$heros = $curseurHeros->fetch();
	
	$filtresListe = array(
		'nom' => FILTER_SANITIZE_ENCODED,
		'description' => FILTER_SANITIZE_ENCODED,
		'touche_clavier' => FILTER_SANITIZE_ENCODED
	);
	
	$donneesFiltree = filter_input_array(INPUT_POST, $filtresListe);
	
	if($donneesFiltree['nom'] != '' && $donneesFiltree['description'] != '' && $donneesFiltree['touche_clavier'] != '')
	{
		
		$DAO = new DAO();
	
		$DAO->ajouterHabilite($basededonnees, $heros);
		
		
			
		header('Refresh: 2; URL=liste-hero.php');
	}
	else
		echo 'ca pas marcher'
	
	
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
	
	<h2>Traitement du formulaire</h2>
	
	<?php
	
		var_dump($_POST);
	
	?>

</body>
</html>
