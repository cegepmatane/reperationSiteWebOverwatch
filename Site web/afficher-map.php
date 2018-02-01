<?php

	include "baseDeDonnees.php";
	include "barre-navigation.php";
	include ("clicks.php");
	
	$SQL_MAP = "SELECT * FROM map WHERE id_map = " . $_GET['map'];
    

	$curseurMap = $basededonnees->query($SQL_MAP);
	$map = $curseurMap->fetch();
	
	$SQL_LISTE_SKIN = "SELECT id_skin, id_map, nom, prix, qualite, evenement FROM skin";
	$resultatListeSkin = $basededonnees->query($SQL_LISTE_SKIN);
	$listeSkin = $resultatListeSkin->fetchAll();
?>	

<!doctype html>
<html lang="fr">
<head>
	<meta charset="utf-8">
	<title>Map</title>
	
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

<h1><?=$map['nom']?></h1>


<a href="librairie/pdf.php?map=<?=$map['id_map']?>">Générer un PDF ?</a>


<div id="liste-map">

		<div><img src="images\mini\map<?=$map['id_map']?>.jpg" style="width:400px;height:250px;"></div>
		
		<div>Emplacement : <?=$map['emplacement']?></div>
		<div>Mode : <?=$map['mode']?></div>
		<div>Nombre d'objectifs : <?=$map['objectifs']?></div>
		<div>Description : <?=$map['type']?></div>
		

		
		<h2>Skins<h2>
		
		<div id="liste-skin">

			<?php
				foreach($listeSkin as $skin)
				{
					
					if($skin['id_map'] == $map['id_map'])
					{
						?>
						<h3>
						
						<a href="afficher-skin?skin=<?=$skin['id_skin']?>"><?=$skin['nom']?></a>
						
						
						</h3>
						<?php
					}
					
					
				}
			?>

		</div>	
</div>


        


<div>

</div>


</body>
</html>
