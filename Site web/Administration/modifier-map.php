<?php

	include "baseDeDonnees.php";
	include "barre-navigation.php";
	include "DAO.php";
	
	$DAO = new DAO();
	
	list($map,$listeSkin) = $DAO->afficherMap($basededonnees);
	/*$SQL_MAP = "SELECT * FROM map WHERE id_map = " . $_GET['map'];
	$curseurMap = $basededonnees->query($SQL_MAP);
	$map = $curseurMap->fetch();*/
	
	/*$SQL_LISTE_SKIN = "SELECT id_skin, id_map, nom, prix, qualite, evenement FROM skin";
	$resultatListeSkin = $basededonnees->query($SQL_LISTE_SKIN);
	$listeSkin = $resultatListeSkin->fetchAll();*/
?>

<!doctype html>
<html lang="fr">
<head>
	<meta charset="utf-8">
	<title>Modifier une map</title>
	
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

		
		<h1>Modifier une map</h1>

		<form method="post" action="traitement-modifier-map.php?map=<?=$map['id_map']?>" enctype="multipart/form-data">
		
			<div>
			
				<label for="nom">Nom</label>
				<input id="nom" name="nom" type="text" value="<?=$map['nom']?>">
			
			</div>
			
			<div>
			
				<label for="emplacement">Emplacement</label>
				<input id="emplacement" name="emplacement" type="text" value="<?=$map['emplacement']?>">
			
			</div>
			
			<div>
			
				<label for="mode">Mode</label>
				<input id="mode" name="mode" type="text" value="<?=$map['mode']?>">
			
			</div>
			
			<div>
			
				<label for="objectifs">Nombre d'objectifs</label>
				<input id="objectifs" name="objectifs" type="number" value="<?=$map['objectifs']?>">
			
			</div>
			
			<div>
			
				<label for="type">Description</label>
				<input id="type" name="type" type="text" value="<?=$map['type']?>">
			
			</div>
			
			<div>
			
				<label for="illustration">Illustration</label>
				<input id="illustration" name="illustration" type="file">
			
			</div>
			
			<div>
			
				<?php
				foreach($listeSkin as $skin)
				{
					
					if($skin['id_map'] == $map['id_map'])
					{
						?>
						<h3>
						
						<a href="afficher-skin?skin=<?=$skin['id_skin']?>"><?=$skin['nom']?></a>
						
						<a href="modifier-skin.php?skin=<?=$skin['id_skin']?>">Modifier</a>
						<a href="supprimer-skin.php?skin=<?=$skin['id_skin']?>">Supprimer</a>
						
						
						</h3>
						<?php
					}
					
					
				}
			?>
			
			</div>
			
			
			<input type="submit" name="enregistrer">
		
		</form>

		<a href="ajouter-skin.php?map=<?=$map['id_map']?>">Ajouter un nouveau skin ?</a>
		
</body>
</html>
