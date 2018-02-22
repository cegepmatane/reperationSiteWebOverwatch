<?php
	include "barre-navigation.php";
	include "baseDeDonnees.php";
	include "administration\DAO.php";
	
	$id = $_GET['habilite'];
	
	$DAO = new DAO();
	
	$habilite = $DAO->lireHabilite($basededonnees, $id);
?>	

<!doctype html>
<html lang="fr">
<head>
	<meta charset="utf-8">
	<title>Habilite</title>
	
	<link rel="stylesheet" href="css/decoration.css">
	
</head>
<body>

<h1><?=$habilite['nom']?></h1>

			<div id="liste-habilite">

			<div>Description : <?=$habilite['description']?></div>
			<div>Touche clavier : <?=$habilite['touche_clavier']?></div>
			
			</div>

</body>
</html>
