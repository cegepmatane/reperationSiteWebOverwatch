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
	<title>Hero</title>
	
	<link rel="stylesheet" href="css/decoration.css">
	
</head>
<body>

<h1><?=$heros['nom']?></h1>

<a href="librairie/pdf-heros.php?heros=<?=$heros['id_hero']?>">Générer un PDF ?</a>

<div id="liste-heros">

		<div><img src="images\mini\heros<?=$heros['id_hero']?>.jpg" style="width:304px;height:228px;"></div>
		<div>Sex : <?=$heros['sex']?></div>
		<div>Role : <?=$heros['role']?></div>
		<div>Difficulty : <?=$heros['difficulty']?></div>
		
		<h2>Habilités</h2>
		
		<div id="liste-habilite">

			<?php
				foreach($listeHabilite as $habilite)
				{
					if($habilite['id_hero'] == $heros['id_hero'])
					{
						?>
						<h3>
						<a href="afficher-habilite?habilite=<?=$habilite['id_habilite']?>"><?=$habilite['nom']?></a>
						</h3>
						<?php
					}	
				}
			?>
		</div>
</div>

</body>
</html>
