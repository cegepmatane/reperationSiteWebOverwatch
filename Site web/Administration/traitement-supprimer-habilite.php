<?php

	include "baseDeDonnees.php";
	include "barre-navigation.php";
	include "DAO.php";
	
	if($_POST['supprimer'] == "oui")
	{
		
		$DAO = new DAO();
	
		$DAO->supprimerHabilite($basededonnees);
		
		
		/*$SQL_SUPPRIMER_HABILITE = "DELETE FROM habilite WHERE id_habilite = '".$_GET['habilite']."'";
		
		echo $SQL_SUPPRIMER_HABILITE;
	
		$basededonnees->exec($SQL_SUPPRIMER_HABILITE);*/
		
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
