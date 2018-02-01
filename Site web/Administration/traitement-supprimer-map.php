<?php

	include "baseDeDonnees.php";
	include "barre-navigation.php";
	include "DAO.php";
	
	if($_POST['supprimer'] == "Oui")
	{
		/*$SQL_SUPPRIMER_MAP = "DELETE FROM map WHERE id_map = '".$_GET['map']."'";
		
		echo $SQL_SUPPRIMER_MAP;
	
		$basededonnees->exec($SQL_SUPPRIMER_MAP);*/
		
		$DAO = new DAO();
		$DAO->supprimerMap($basededonnees);
	}
	
	
	
	
?>	

<!doctype html>
<html lang="fr">
<head>
	<meta charset="utf-8">
	<title>Traitement de suppression d'une map</title>
	
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
