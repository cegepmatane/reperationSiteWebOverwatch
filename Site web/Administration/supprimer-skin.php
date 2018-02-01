<?php

	include "baseDeDonnees.php";
	include "barre-navigation.php";
	include "DAO.php";
	
	$DAO = new DAO();
	
	$skin = $DAO->afficherSupprimerSkin($basededonnees);
	
	/*$SQL_SKIN = "SELECT * FROM skin WHERE id_skin = " . $_GET['skin'];
	$curseurSkin = $basededonnees->query($SQL_SKIN);
	$skin = $curseurSkin->fetch();*/
?>

<!doctype html>
<html lang="fr">
<head>
	<meta charset="utf-8">
	<title>Supprimer un skin</title>
	
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
		
		<h1>Supprimer un skin</h1>

		<form method="post" action="traitement-supprimer-skin.php?skin=<?=$skin['id_skin']?>">
		
			<label>Voulez-vous vraiment supprimer cette habilité "<?=$skin['nom']?>" ?</label>
			
			<input type="submit" name="supprimer" value="oui">
			<input type="submit" name="supprimer" value="non">
		
		</form>

</body>
</html>
