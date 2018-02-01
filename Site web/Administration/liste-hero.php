<?php

	include "baseDeDonnees.php";
	include "barre-navigation.php";
	
	$SQL_LISTE_HEROS = "SELECT id_hero, nom, sex, role, difficulty FROM heros";
	$resultatListeHeros = $basededonnees->query($SQL_LISTE_HEROS);
	$listeHeros = $resultatListeHeros->fetchAll();
	
?>	

<!doctype html>
<html lang="fr">
<head>
	<meta charset="utf-8">
	<title>Liste Heros</title>
	
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
	
	</style>
	
</head>
<body>

<h1>Liste des Héros</h1>

<script type="text/javascript" src="Ajax.js"></script>

<script type="text/javascript">
	function supprimerHero(id_hero)
		{
			

				
			var ajax = new Ajax();
			ajax.executer("POST","supprimer-hero-ajax.php","id=" + id_hero, function(ajax)
			{
				cible = document.getElementById(id_hero).remove();
			});
			
		}
</script>

<div id="liste-heros">

	<?php
		foreach($listeHeros as $heros)
		{
			?>
			<h3 id="<?=$heros['id_hero']?>">
			
			<a href="afficher-hero?heros=<?=$heros['id_hero']?>"><?=$heros['nom']?></a>
			
			<a href="modifier-hero.php?heros=<?=$heros['id_hero']?>">Modifier</a>
			<a href="#" onclick="supprimerHero(<?=$heros['id_hero']?>);">Supprimer</a>
			
			</h3>
			<?php
		}
		
		/*<a href="supprimer-hero.php?heros=<?=$heros['id_hero']?>">Supprimer</a>*/
	?>

</div>

<div id="test"></div>

<a href="ajouter-hero.php">Ajouter un nouveau héro</a>


<div>

</div>


</body>
</html>
