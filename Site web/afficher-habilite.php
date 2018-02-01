<?php

	include "barre-navigation.php";
	include "baseDeDonnees.php";
	include "administration\DAO.php";
	include ("clicks.php");
	
	$id = $_GET['habilite'];
	
	$DAO = new DAO();
	
	$habilite = $DAO->lireHabilite($basededonnees, $id);

	
	
	
?>	

<!doctype html>
<html lang="fr">
<head>
	<meta charset="utf-8">
	<title>Habilite</title>
	
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

<h1><?=$habilite['nom']?></h1>



			<div id="liste-habilite">

	
		
			<div>Description : <?=$habilite['description']?></div>
			<div>Touche clavier : <?=$habilite['touche_clavier']?></div>
		
		
	

			</div>



<div>

</div>


</body>
</html>
