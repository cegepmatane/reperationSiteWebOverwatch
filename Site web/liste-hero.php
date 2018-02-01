

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
	

	#recherche-avec-autocompletion
	{
		position:relative; /* pour qu'il soit parent positionnel de la div de resultat */
	}

	
	#recherche-avec-autocompletion input[type=text]
	{
		display:inline-block;
		height:30px; /* meme chiffre que top du resultat */
		width:400px;
	}
	
	#resultat-autocompletion
	{
		border:solid 2px black;
		position:absolute;
		display:none;
		background-color:white;
		width:400px;
		top:30px;
		left:0;
	}
	
	</style>
	
	<?php
		include_once "baseDeDonnees.php";
		include "barre-navigation.php";
		include ("clicks.php");
	?>
	<?php
	if(!empty($_GET['action-rechercher']))
	{
		include_once "baseDeDonnees.php";
		
		$recherche = $_GET['recherche'];
		$SQL_RECHERCHE = "SELECT id_hero, nom, sex, role FROM heros WHERE nom LIKE '$recherche%' or sex LIKE '$recherche%' or role LIKE '$recherche%'";
		$requeteRecherche = $basededonnees->query($SQL_RECHERCHE);
		$listeHeros = $requeteRecherche->fetchAll();
	}
	else
	{
		$SQL_LISTE_HEROS = "SELECT id_hero, nom, sex, role, difficulty FROM heros";
		$resultatListeHeros = $basededonnees->query($SQL_LISTE_HEROS);
		$listeHeros = $resultatListeHeros->fetchAll();
	}
?>
	
</head>
<body>

<h1>Liste des Héros</h1>

<script type="text/javascript" src="librairie/Ajax.js"></script>
<script type="text/javascript">

	function autocompleterRecherche()
		{
			champs = document.getElementById('champs-recherche');
			
			var ajax = new Ajax();
			ajax.executer("GET","autocompletion-hero.php","debut=" + champs.value, 
				function(ajax)
				{
					cible = document.getElementById('resultat-autocompletion');
					cible.style.display = 'block';
					cible.innerHTML = ajax.responseText;
				}
			);
			
		}
</script>
<script type="text/javascript">
	function choisirSuggestion(lien)
	{
		
		champRecherche = document.getElementById('champs-recherche');
		champRecherche.value = lien.innerHTML;
		
		suggestions = document.getElementById('resultat-autocompletion');
		suggestions.style.display = 'none';
	}
</script>

<div id="recherche-avec-autocompletion">
	<form method="get">

		<input type="text" id="champs-recherche" name="recherche" onkeyup="autocompleterRecherche()">
		<input type="submit" name="action-rechercher" value="Rechercher">

	</form>
	<div id="resultat-autocompletion">

	</div>
</div>

<div id="liste-heros">

	<?php
		foreach($listeHeros as $heros)
		{
			?>
			<h3>
			
			<a href="afficher-hero?heros=<?=$heros['id_hero']?>"><?=$heros['nom']?></a>
			
			
			</h3>
			<?php
		}
	?>

</div>


<div>

</div>


</body>
</html>
