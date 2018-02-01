<?php

	include "baseDeDonnees.php";
	include "barre-navigation.php";
	include "DAO.php";
	
	if($_POST['supprimer'] == "oui")
	{
		//$SQL_SUPPRIMER_SKIN = "DELETE FROM skin WHERE id_skin = '".$_GET['skin']."'";
		
		//echo $SQL_SUPPRIMER_SKIN;
	
		//$basededonnees->exec($SQL_SUPPRIMER_SKIN);
		
		$DAO = new DAO();
		$DAO->supprimerSkin($basededonnees);
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
		header('Refresh: 2; URL=liste-map.php');
	?>

</body>
</html>
