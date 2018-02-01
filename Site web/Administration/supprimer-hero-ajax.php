<?php

	include_once "baseDeDonnees.php";
	
	$SQL_SUPPRIMER_HERO = "DELETE FROM heros WHERE id_hero = '".$_POST['id']."'";
	$basededonnees->exec($SQL_SUPPRIMER_HERO);
	
	
?>