<?php

	include_once "baseDeDonnees.php";
	
	$ipaddress = md5($_SERVER['REMOTE_ADDR']);
	
	$SQL_RATING = "SELECT rate FROM tbl_rating WHERE user_id = '" . $ipaddress . "'";
	$curseurRating = $basededonnees->query($SQL_RATING);
	$listeRating = $curseurRating->fetch();
	echo $listeRating['rate'];
?>