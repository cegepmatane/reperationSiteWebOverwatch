<?php

	$usager = 'root';
	$motdepasse = '';
	$hote = 'localhost';
	$base = 'overwatch';
	$dsn = 'mysql:dbname='.$base.';host=' . $hote;
	$basededonnees = new PDO($dsn, $usager, $motdepasse);
	
	
?>
