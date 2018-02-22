<?php
		include_once "baseDeDonnees.php";
		include "barre-navigation.php";
	?>	
<!doctype html>
<html lang="fr">
<head>
	<meta charset="utf-8">
	<title>Liste des maps</title>
	
	<link rel="stylesheet" href="css/decoration.css">
	
	
	
	<?php
	if(!empty($_GET['action-rechercher']))
	{
		include_once "baseDeDonnees.php";
		
		$recherche = $_GET['recherche'];
		$SQL_RECHERCHE = "SELECT id_map, nom, emplacement, mode, objectifs, type FROM map WHERE nom LIKE '$recherche%' or emplacement LIKE '$recherche%' or mode LIKE '$recherche%' or objectifs LIKE '$recherche%' or type LIKE '$recherche%'";
		$requeteRecherche = $basededonnees->query($SQL_RECHERCHE);
		$listeMaps = $requeteRecherche->fetchAll();
	}
	else
	{
		$SQL_LISTE_MAP = "SELECT id_map, nom, emplacement, mode, objectifs, type FROM map";
		$resultatListeMaps = $basededonnees->query($SQL_LISTE_MAP);
		$listeMaps = $resultatListeMaps->fetchAll();
	}
?>
	
	
</head>
<body>

<h1>Liste des maps</h1>

<script type="text/javascript" src="librairie/Ajax.js"></script>
<script type="text/javascript">

	function autocompleterRecherche()
		{
			champs = document.getElementById('champs-recherche');
			
			var ajax = new Ajax();
			ajax.executer("GET","autocompletion-map.php","debut=" + champs.value, 
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

<div id="liste-maps">

	<?php
		foreach($listeMaps as $map)
		{
			?>
			<h3>
			
			<a href="afficher-map?map=<?=$map['id_map']?>"><?=$map['nom']?></a>
			
			
			</h3>
			<?php
		}
	?>

</div>

</body>
</html>
