<?php

	include "baseDeDonnees.php";
	include "barre-navigation.php";
	include "DAO.php";
	
	$filtresListe = array(
		
		'nom' => FILTER_SANITIZE_ENCODED,
		'prix' => FILTER_VALIDATE_INT,
		'qualite' => FILTER_SANITIZE_ENCODED,
		'evenement' => FILTER_VALIDATE_INT
		
	);
	
	$donneesFiltres = filter_input_array(INPUT_POST, $filtresListe);
	
	if($donneesFiltres['nom'] != '' && $donneesFiltres['prix'] != '' && $donneesFiltres['qualite'] != '' && $donneesFiltres['evenement'] != '')
	{
		//$SQL_MODIFIER_SKIN = "UPDATE skin SET nom = '".$_POST['nom']."', prix = '".$_POST['prix']."', qualite = '".$_POST['qualite']."', evenement = '".$_POST['evenement']."' WHERE id_skin = '".$_GET['skin']."'";
	
		//echo $SQL_MODIFIER_SKIN;
	
		//$basededonnees->exec($SQL_MODIFIER_SKIN);
		
		$DAO = new DAO();
	
		$DAO->modifierSkin($basededonnees);
		
	}
	else
	{
		echo "Sa fonctionne pas du tout.";
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

	<h1>Skin</h1>
	
	<h2>Traitement du formulaire</h2>
	
	<?php
	
		var_dump($_POST);
		header('Refresh: 2; URL=liste-map.php');
	?>

</body>
</html>
