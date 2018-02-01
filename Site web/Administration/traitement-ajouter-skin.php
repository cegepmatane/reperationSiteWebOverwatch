<?php

	include "baseDeDonnees.php";
	include "barre-navigation.php";
	include "DAO.php";
	
	//$SQL_MAP = "SELECT * FROM map WHERE id_map = " . $_GET['map'];
    
	
	$curseurMap = $basededonnees->query($SQL_MAP);
	$map = $curseurMap->fetch();
	
	$filtresListe = array(
		
		'nom' => FILTER_SANITIZE_ENCODED,
		'prix' => FILTER_VALIDATE_INT,
		'qualite' => FILTER_SANITIZE_ENCODED,
		'evenement' => FILTER_VALIDATE_INT
		
	);
	
	$donneesFiltres = filter_input_array(INPUT_POST, $filtresListe);
	
	if($donneesFiltres['nom'] != '' && $donneesFiltres['prix'] != '' && $donneesFiltres['qualite'] != '' && $donneesFiltres['evenement'] != '')
	{
		//$SQL_AJOUTER_SKIN = "INSERT INTO skin(id_map ,nom, prix, qualite, evenement) VALUES('".  $map['id_map']  ."','".  $_POST['nom']  ."', '".  $_POST['prix']  ."', '".  $_POST['qualite']  ."','".  $_POST['evenement']  ."')";
	
		//echo $SQL_AJOUTER_SKIN;
	
		//$basededonnees->exec($SQL_AJOUTER_SKIN);
		$DAO = new DAO();
	
		$DAO->ajouterSkin($basededonnees);
		//echo "Salut !";
	}
	else
	{
		echo "Sa fonctionne pas";
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
	
	<h2>Traitement du formulaire</h2>
	
	<?php
	
		var_dump($_POST);
		header('Refresh: 2; URL=liste-map.php');
	?>

</body>
</html>
