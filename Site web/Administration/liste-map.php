<?php

	include "baseDeDonnees.php";
	include "barre-navigation.php";
	include "DAO.php";
	
	$DAO = new DAO();
	
	$listeMaps = $DAO->afficherListeMap($basededonnees);
	/*$SQL_LISTE_MAPS = "SELECT id_map, nom, emplacement, mode, objectifs, type FROM map";
	$resultatListeMaps = $basededonnees->query($SQL_LISTE_MAPS);
	$listeMaps = $resultatListeMaps->fetchAll();*/
	
?>	
<!doctype html>
<html lang="fr">
<head>
	<meta charset="utf-8">
	<title>Liste des maps</title>
	
	<style>
	*{
		padding = 0;
		margin = 0;
		
        
        
	}
	h1{
		text-align: center;
	}
	body{
		background-color: lightgrey;
	}
	#retour{
		text-align: center;
	}

	</style>
	
</head>
<body>

<h1>Liste des maps</h1>


<div id="liste-maps">

	<?php
		foreach($listeMaps as $map)
		{
			?>
			<h3>
			
			<a href="afficher-map?map=<?=$map['id_map']?>"><?=$map['nom']?></a>
			
			<a href="modifier-map.php?map=<?=$map['id_map']?>">Modifier</a>
			<a href="supprimer-map.php?map=<?=$map['id_map']?>">Supprimer</a>
			
			</h3>
			<?php
		}
	?>

</div>

<a href="ajouter-map.php">Ajouter une nouvelle map ?</a>

</body>
</html>
