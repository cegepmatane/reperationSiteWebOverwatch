<?php

	include "baseDeDonnees.php";

	class DAO
	{
		public static function afficherHero($basededonnees)
		{
			$SQL_HERO = "SELECT * FROM heros WHERE id_hero = " . $_GET['heros'];
			$curseurHeros = $basededonnees->query($SQL_HERO);
			$heros = $curseurHeros->fetch();
			
			$SQL_LISTE_HABILITE = "SELECT id_habilite, id_hero, nom, description, touche_clavier FROM habilite";
			$resultatListeHabilite = $basededonnees->query($SQL_LISTE_HABILITE);
			$listeHabilite = $resultatListeHabilite->fetchAll();
			
			return array($heros,$listeHabilite);
			
		}
		
		public static function lireHabilite($basededonnees, $idHabilite)
		{
			$SQL_HABILITE = "SELECT * FROM habilite WHERE id_habilite = :id_habilite"; 
			$requeteHabilite = $basededonnees->prepare($SQL_HABILITE);
			$requeteHabilite->bindParam(':id_habilite', $idHabilite, PDO::PARAM_INT);
			$requeteHabilite->execute();
			$habilite = $requeteHabilite->fetch();
			
			return($habilite);
			
		}
		public static function lireHero($basededonnees)
		{
			$SQL_HERO = "SELECT * FROM heros"; 
			$requeteHero = $basededonnees->prepare($SQL_HERO);
			$requeteHero->execute();
			$hero = $requeteHero->fetchAll(PDO::FETCH_OBJ);
			
			return($hero);
			
		}
		public static function lireMap($basededonnees)
		{
			$SQL_MAP = "SELECT * FROM map"; 
			$requeteHero = $basededonnees->prepare($SQL_MAP);
			$requeteHero->execute();
			$map = $requeteHero->fetchAll(PDO::FETCH_OBJ);
			
			return($map);
			
		}
		
		public static function afficherHabilitePourHero($basededonnees, $idHero)
		{
			$SQL_HABILITE = "SELECT * FROM habilite WHERE id_hero = :id_hero"; 
			$requeteHabilite = $basededonnees->prepare($SQL_HABILITE);
			$requeteHabilite->bindParam(':id_hero', $idHero, PDO::PARAM_INT);
			$requeteHabilite->execute();
			$habilite = $requeteHero->fetchAll(PDO::FETCH_OBJ);
			
			return($habilite);
			
		}
		
		public static function ajouterHabilite($basededonnees, $hero)
		{
			$SQL_AJOUTER_HABILITE = "INSERT INTO habilite(id_hero, nom, description, touche_clavier) VALUES(:id_hero,:nom,:description,:touche_clavier)"; 

			$requeteAjouterHabilite = $basededonnees->prepare($SQL_AJOUTER_HABILITE);
			$requeteAjouterHabilite->bindParam(':id_hero', $hero['id_hero'], PDO::PARAM_INT);
			$requeteAjouterHabilite->bindParam(':nom', $_POST['nom'], PDO::PARAM_STR);
			$requeteAjouterHabilite->bindParam(':description', $_POST['description'], PDO::PARAM_STR);
			$requeteAjouterHabilite->bindParam(':touche_clavier', $_POST['touche_clavier'], PDO::PARAM_STR);
				
			$requeteAjouterHabilite->execute();
		}
		
		public static function modifierHabilite($basededonnees)
		{
			$SQL_MODIFIER_HABILITE = "UPDATE habilite SET nom = :nom, description = :description, touche_clavier = :touche_clavier WHERE id_habilite = '".$_GET['habilite']."'"; 

			$requeteModifierHabilite = $basededonnees->prepare($SQL_MODIFIER_HABILITE);
			$requeteModifierHabilite->bindParam(':nom', $_POST['nom'], PDO::PARAM_STR);
			$requeteModifierHabilite->bindParam(':description', $_POST['description'], PDO::PARAM_STR);
			$requeteModifierHabilite->bindParam(':touche_clavier', $_POST['touche_clavier'], PDO::PARAM_STR);
				
			$requeteModifierHabilite->execute();
		}
		
		public static function supprimerHabilite($basededonnees)
		{
			$SQL_SUPPRIMER_HABILITE = "DELETE FROM habilite WHERE id_habilite = '".$_GET['habilite']."'";
			$requeteSupprimerHabilite = $basededonnees->prepare($SQL_SUPPRIMER_HABILITE);
			$requeteSupprimerHabilite->execute();
		}
		
		public static function afficherListeMap($basededonnees)
		{
			$SQL_LISTE_MAPS = "SELECT id_map, nom, emplacement, mode, objectifs, type FROM map";
			$resultatListeMaps = $basededonnees->query($SQL_LISTE_MAPS);
			$listeMaps = $resultatListeMaps->fetchAll();
			
			return $listeMaps;
		}
		
		public static function afficherMap($basededonnees)
		{
			$SQL_MAP = "SELECT * FROM map WHERE id_map = " . $_GET['map'];
			$curseurMap = $basededonnees->query($SQL_MAP);
			$map = $curseurMap->fetch();
			
			$SQL_LISTE_SKIN = "SELECT id_skin, id_map, nom, prix, qualite, evenement FROM skin";
			$resultatListeSkin = $basededonnees->query($SQL_LISTE_SKIN);
			$listeSkin = $resultatListeSkin->fetchAll();
			
			return array($map,$listeSkin);
			
		}
		
		public static function afficherSkin($basededonnees)
		{
			$SQL_SKIN = "SELECT * FROM skin WHERE id_skin = " . $_GET['skin'];
			$curseurSkin = $basededonnees->query($SQL_SKIN);
			$skin = $curseurSkin->fetch();
			
			return $skin;
		}
		
		public static function ajouterMap($basededonnees)
		{
			$SQL_AJOUTER_MAP = "INSERT INTO map(nom, emplacement, mode, objectifs, type) VALUES(:nom,:emplacement,:mode,:objectifs,:type)"; 
			$requeteAjouterMap = $basededonnees->prepare($SQL_AJOUTER_MAP);
			$requeteAjouterMap->bindParam(':nom', $_POST['nom'], PDO::PARAM_STR);
			$requeteAjouterMap->bindParam(':emplacement', $_POST['emplacement'], PDO::PARAM_STR);
			$requeteAjouterMap->bindParam(':mode', $_POST['mode'], PDO::PARAM_STR);
			$requeteAjouterMap->bindParam(':objectifs', $_POST['objectifs'], PDO::PARAM_INT);	
			$requeteAjouterMap->bindParam(':type', $_POST['type'], PDO::PARAM_STR);
			$requeteAjouterMap->execute();
			//echo "Sa se rend ici ";
		}
		
		public static function ajouterSkin($basededonnees)
		{
			$SQL_MAP = "SELECT * FROM map WHERE id_map = " . $_GET['map'];
			$curseurMap = $basededonnees->query($SQL_MAP);
			$map = $curseurMap->fetch();
			
			$SQL_AJOUTER_SKIN = "INSERT INTO skin(id_map ,nom, prix, qualite, evenement) VALUES(:map,:nom,:prix,:qualite,:evenement)"; 
			$requeteAjouterSkin = $basededonnees->prepare($SQL_AJOUTER_SKIN);
			$requeteAjouterSkin->bindParam(':map', $map['id_map'], PDO::PARAM_INT);
			$requeteAjouterSkin->bindParam(':nom', $_POST['nom'], PDO::PARAM_STR);
			$requeteAjouterSkin->bindParam(':prix', $_POST['prix'], PDO::PARAM_INT);
			$requeteAjouterSkin->bindParam(':qualite', $_POST['qualite'], PDO::PARAM_STR);
			$requeteAjouterSkin->bindParam(':evenement', $_POST['evenement'], PDO::PARAM_INT);	
			
			$requeteAjouterSkin->execute();
			//echo "Sa se rend ici ";
			
		}
		
		public static function modifierMap($basededonnees)
		{
			$SQL_MODIFIER_MAP = "UPDATE map SET nom = :nom, emplacement = :emplacement, mode = :mode, objectifs = :objectifs, type = :type WHERE id_map = '".$_GET['map']."'"; 
			$requeteModifierMap = $basededonnees->prepare($SQL_MODIFIER_MAP);
			$requeteModifierMap->bindParam(':nom', $_POST['nom'], PDO::PARAM_STR);
			$requeteModifierMap->bindParam(':emplacement', $_POST['emplacement'], PDO::PARAM_STR);
			$requeteModifierMap->bindParam(':mode', $_POST['mode'], PDO::PARAM_STR);
			$requeteModifierMap->bindParam(':objectifs', $_POST['objectifs'], PDO::PARAM_INT);	
			$requeteModifierMap->bindParam(':type', $_POST['type'], PDO::PARAM_STR);
			$requeteModifierMap->execute();
			//echo "Sa se rend ici encore";
		}
		
		public static function modifierSkin($basededonnees)
		{	
			$SQL_MODIFIER_SKIN = "UPDATE skin SET nom = :nom, prix = :prix, qualite = :qualite, evenement = :evenement WHERE id_skin = '".$_GET['skin']."'"; 
			$requeteModifierSkin = $basededonnees->prepare($SQL_MODIFIER_SKIN);
			
			$requeteModifierSkin->bindParam(':nom', $_POST['nom'], PDO::PARAM_STR);
			$requeteModifierSkin->bindParam(':prix', $_POST['prix'], PDO::PARAM_INT);
			$requeteModifierSkin->bindParam(':qualite', $_POST['qualite'], PDO::PARAM_STR);
			$requeteModifierSkin->bindParam(':evenement', $_POST['evenement'], PDO::PARAM_INT);	
			
			$requeteModifierSkin->execute();
			//echo "Sa se rend ici ";
			
		}
		
		public static function afficherSupprimerMap($basededonnees)
		{
			$SQL_MAP = "SELECT * FROM map WHERE id_map = " . $_GET['map'];
			$curseurMap = $basededonnees->query($SQL_MAP);
			$map = $curseurMap->fetch();
			
			return $map;
			
		}
		
		public static function afficherSupprimerSkin($basededonnees)
		{
			$SQL_SKIN = "SELECT * FROM skin WHERE id_skin = " . $_GET['skin'];
			$curseurSkin = $basededonnees->query($SQL_SKIN);
			$skin = $curseurSkin->fetch();
			
			return $skin;
			
		}
		
		public static function afficherMapPourSkin($basededonnees)
		{
			$SQL_MAP = "SELECT * FROM map WHERE id_map = " . $_GET['map'];
			$curseurMap = $basededonnees->query($SQL_MAP);
			$map = $curseurMap->fetch();
			
			return $map;
			
		}
		
		public static function supprimerMap($basededonnees)
		{
			$SQL_SUPPRIMER_MAP = "DELETE FROM map WHERE id_map = '".$_GET['map']."'";
			$requeteSupprimerMap = $basededonnees->prepare($SQL_SUPPRIMER_MAP);
			$requeteSupprimerMap->execute();
			//echo "Sa se rend ici encore";
		}
		
		public static function supprimerSkin($basededonnees)
		{
			$SQL_SUPPRIMER_SKIN = "DELETE FROM skin WHERE id_skin = '".$_GET['skin']."'";
			$requeteSupprimerSkin = $basededonnees->prepare($SQL_SUPPRIMER_SKIN);
			$requeteSupprimerSkin->execute();
			//echo "Sa se rend ici encore";
		}
		
		public static function afficherMembre($basededonnees)
		{
			$SQL_MEMBRE = "SELECT COUNT(*) AS nombre FROM membre WHERE 1";
			$requeteAfficherMembre = $basededonnees->query($SQL_MEMBRE);
			$nombreMembre = $requeteAfficherMembre->fetch();
			
			return $nombreMembre;
		}
		
	}

	
	
?>
