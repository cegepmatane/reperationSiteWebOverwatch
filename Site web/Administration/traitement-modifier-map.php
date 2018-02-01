<?php

	include "baseDeDonnees.php";
	include "barre-navigation.php";
	include "DAO.php";
	
	//$SQL_MODIFIER_MAP = "UPDATE map SET nom = '".$_POST['nom']."', emplacement = '".$_POST['emplacement']."', mode = '".$_POST['mode']."', objectifs = '".$_POST['objectifs']."', type = '".$_POST['type']."' WHERE id_map = '".$_GET['map']."'";
	
	//echo $SQL_MODIFIER_MAP;
	
	//$basededonnees->exec($SQL_MODIFIER_MAP);
	
	$DAO = new DAO();
	
	$DAO->modifierMap($basededonnees);
	

?>	

<!doctype html>
<html lang="fr">
<head>
	<meta charset="utf-8">
	<title>Traitement de modification d'une map</title>
	
	<style>
	
	
	
	</style>
	
	
</head>
<body>

	<h1>Map Overwatch</h1>
	
	<h2>Traitement du formulaire</h2>
	
	<?php
		$cheminProjet = "Site web/";
		$cheminIllustration = "images/";
	
		//var_dump($_POST); 
		var_dump($_FILES);
		
		
		if(0 != $_FILES["illustration"])
		{	

			$fichierSource = $_FILES["illustration"]["tmp_name"];
			echo "<p>Le fichier source est " . $fichierSource . "</p>";
			
			$fichierDestination = $_SERVER["DOCUMENT_ROOT"] . "/" . $cheminProjet . $cheminIllustration . $_FILES["illustration"]["name"]; 
			echo "<p>Le fichier de destination est " . $fichierDestination . "</p>";
			
			$imageSize = getImageSize($fichierSource);
			$imageWidth = $imageSize[0];
			$imageHeight = $imageSize[1];
			
			$DESIRED_WIDTH = 300;
			$proportionalHeight = round(($DESIRED_WIDTH * $imageHeight) / $imageWidth);
			
			if(move_uploaded_file($fichierSource, $fichierDestination))
			{		
	
				$cheminGrandeImage = $_SERVER["DOCUMENT_ROOT"] . "/" . $cheminProjet . $cheminIllustration . $_FILES["illustration"]["name"]; 
				$cheminMiniImage = $_SERVER["DOCUMENT_ROOT"] . "/" . $cheminProjet . $cheminIllustration . "mini/map" .  $_GET['map'] . ".jpg"; 

				echo "Le repertoire mini est " . $cheminMiniImage;
				
				// TODO : generaliser la lecture de l'image originale au format (jpg, png, gif)
				$grandeImage = imagecreatefromjpeg($cheminGrandeImage); // lire l'image originale
				$miniImage = imagecreatetruecolor($DESIRED_WIDTH, $proportionalHeight); // creer la nouvelle image
				
				// TODO : adapter la taille lue aux comparaison des ratio largeur/hauteur des deux images
				imageCopyResampled($miniImage, $grandeImage, 0, 0, 0, 0, $DESIRED_WIDTH+1, $proportionalHeight+1, $imageWidth, $imageHeight);
				
				imagejpeg($miniImage, $cheminMiniImage); // sauvegarder la nouvelle image
				
				 imageDestroy($grandeImage);
				 imageDestroy($miniImage);
			}
		}
	
	
	
		//var_dump($_POST);
		header('Refresh: 2; URL=liste-map.php');
	?>
</body>
</html>
