<?php

	include "baseDeDonnees.php";
	include "barre-navigation.php";
	
	$SQL_HABILITE = "SELECT * FROM habilite WHERE id_habilite = " . $_GET['habilite'];
    
	
	$curseurHabilite = $basededonnees->query($SQL_HABILITE);
	$habilite = $curseurHabilite->fetch();
?>

<!doctype html>
<html lang="fr">
<head>
	<meta charset="utf-8">
	<title>Supprimer une habilité</title>
	
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
		
		<h1>Supprimer une habilité</h1>

		<form method="post" action="traitement-supprimer-habilite.php?habilite=<?=$habilite['id_habilite']?>">
		
			<label>Voulez-vous vraiment supprimer cette habilité "<?=$habilite['nom']?>" ?</label>
			
			<input type="submit" name="supprimer" value="oui">
			<input type="submit" name="supprimer" value="non">
		
		</form>

</body>
</html>
