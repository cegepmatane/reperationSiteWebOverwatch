<?php

	include "baseDeDonnees.php";
	include "barre-navigation.php";
	
	$SQL_HEROS = "SELECT * FROM heros WHERE id_hero = " . $_GET['heros'];
    
	
	$curseurHeros = $basededonnees->query($SQL_HEROS);
	$heros = $curseurHeros->fetch();
	
	$SQL_LISTE_HABILITE = "SELECT id_habilite, id_hero, nom, description, touche_clavier FROM habilite";
	$resultatListeHabilite = $basededonnees->query($SQL_LISTE_HABILITE);
	$listeHabilite = $resultatListeHabilite->fetchAll();
?>

<!doctype html>
<html lang="fr">
<head>
	<meta charset="utf-8">
	<title>Modifier un hero</title>
	
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

		
		<h1>Modifier un hero</h1>

		<form method="post" action="traitement-modifier-hero.php?heros=<?=$heros['id_hero']?>" enctype="multipart/form-data">
		
			<div>
			
				<label for="nom">Nom</label>
				<input id="nom" name="nom" type="text" value="<?=$heros['nom']?>">
			
			</div>
			
			<div>
			
				<label for="sex">Sex</label>
				<input id="sex" name="sex" type="text" value="<?=$heros['sex']?>">
			
			</div>
			
			<div>
			
				<label for="role">Role</label>
				<input id="role" name="role" type="text" value="<?=$heros['role']?>">
			
			</div>
			
			<div>
			
				<label for="difficulty">Difficulty</label>
				<input id="difficulty" name="difficulty" type="text" value="<?=$heros['difficulty']?>">
			
			</div>
			
			<div>
			
				<label for="illustration">Illustration</label>
				<input id="illustration" name="illustration" type="file">
			
			</div>
			
			<div>
			
				<?php
				foreach($listeHabilite as $habilite)
				{
					
					if($habilite['id_hero'] == $heros['id_hero'])
					{
						?>
						<h3>
						
						<a href="afficher-habilite?habilite=<?=$habilite['id_habilite']?>"><?=$habilite['nom']?></a>
						
						<a href="modifier-habilite.php?habilite=<?=$habilite['id_habilite']?>">Modifier</a>
						<a href="supprimer-habilite.php?habilite=<?=$habilite['id_habilite']?>">Supprimer</a>
						
						
						</h3>
						<?php
					}
					
					
				}
			?>
			
			</div>
			
			
			<input type="submit" name="enregistrer">
		
		</form>
		
		<a href="ajouter-habilite.php?heros=<?=$heros['id_hero']?>">Ajouter une nouvelle habilité</a>
		
		

</body>
</html>
