<?php

	include "baseDeDonnees.php";
	include "barre-navigation.php";
	include "DAO.php";
	
	$DAO = new DAO();
	
	$map = $DAO->afficherSupprimerMap($basededonnees);
	/*$SQL_MAP = "SELECT * FROM map WHERE id_map = " . $_GET['map'];
    
	
	$curseurMap = $basededonnees->query($SQL_MAP);
	$map = $curseurMap->fetch();*/
?>

<!doctype html>
<html lang="fr">
<head>
	<meta charset="utf-8">
	<title>Supprimer une map</title>
	
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
		
		<h1>Supprimer une map</h1>

		<form method="post" action="traitement-supprimer-map.php?map=<?=$map['id_map']?>">
		
			<label>Voulez-vous vraiment supprimer la map "<?=$map['nom']?>" ?</label>
			
			<input type="submit" name="supprimer" value="Oui">
			<input type="submit" name="supprimer" value="Non">
		
		</form>

</body>
</html>
