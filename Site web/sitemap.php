<?php
	header('Content-type: application/xml');
	
	include "baseDeDonnees.php";
	include "administration\DAO.php";
	
	$DAO = new DAO();
	
	$hero = $DAO->lireHero($basededonnees);
	
	$url="http://localhost/projet-listes-overwatch/Site%20web/";
?>
<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">
	<url>
		<loc><?=$url."accueil.php"?></loc>
	</url>
	<url>
		<loc><?=$url."liste-hero.php"?></loc>
	</url>
	<url>
		<loc><?=$url."liste-map.php"?></loc>
	</url>
	<url>
		<loc><?=$url."contact.php"?></loc>
	</url>
	<url>
		<loc><?=$url."formulaire1.php"?></loc>
	</url>
	
	
	
	

	
</urlset>


