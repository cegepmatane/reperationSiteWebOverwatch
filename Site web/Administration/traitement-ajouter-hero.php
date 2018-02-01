<?php

	include "baseDeDonnees.php";
	include "barre-navigation.php";
	
	$conn = new mysqli($hote, $usager, $motdepasse, $base);
	
	if (mysqli_connect_errno())
	{
		echo "Failed to connect to MySQL: " . mysqli_connect_error();
	}
	
	$SQL_AJOUTER_HERO = "INSERT INTO heros(nom, sex, role, difficulty) VALUES('".  $_POST['nom']  ."','".  $_POST['sex']  ."', '".  $_POST['role']  ."', '".  $_POST['difficulty']  ."')";
	
	echo $SQL_AJOUTER_HERO;
	
	//$basededonnees->exec($SQL_AJOUTER_HERO);
	
	if ($conn->query($SQL_AJOUTER_HERO) === TRUE) {
    $last_id = $conn->insert_id;
    echo "New record created successfully. Last inserted ID is: " . $last_id;
} 	else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
	
	header('Refresh: 2; URL=liste-hero.php');
	
?>	

<!doctype html>
<html lang="fr">
<head>
	<meta charset="utf-8">
	<title>Traitement</title>
	
	<style>
	
	
	
	</style>
	
	
</head>
<body>
	
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
				$cheminMiniImage = $_SERVER["DOCUMENT_ROOT"] . "/" . $cheminProjet . $cheminIllustration . "mini/heros" .  $last_id . ".jpg"; 

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
	
	?>

</body>
</html>
