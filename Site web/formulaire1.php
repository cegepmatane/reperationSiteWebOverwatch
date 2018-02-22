<?php

	include "baseDeDonnees.php";
	include "barre-navigation.php";
	
	session_start();
?>	

<!doctype html>
<html lang="fr">
<head>
	<meta charset="utf-8">
	<title>formulaire</title>
	
	<link rel="stylesheet" href="css/decoration.css">
	
</head>
<body>

<div><a href="formulaire1.php">Information personnelles</a>-></div>

<h1>Formulaire d'inscription</h1>

<h2>Informations personelles</h2>



	<form action="formulaire2.php" method="post">
	
		<div>Prenom : <input type="text" name="prenom"

		<?php
		
			if(!empty($_SESSION['prenom']))
			{
				?> value=<?= $_SESSION['prenom'];
			}
		
		?>

		></div>
		<div>Nom : <input type="text" name="nom" 
		
		<?php
		
			if(!empty($_SESSION['nom1']))
			{
				?> value=<?= $_SESSION['nom1'];
			}
		
		?>></div>
		
		<div>Homme <input type="radio" name="sex" value="homme" 
		<?php
		
			if(!empty ($_SESSION['sex']))
				if($_SESSION['sex'] == 'homme')
				 echo 'checked';
			
		
		?>><img src="imagesHero\homme.png" height="30px"></div>
		
		<div>Femme <input type="radio" name="sex" value="femme" 
		<?php
		
			if(!empty ($_SESSION['sex']))
				if($_SESSION['sex'] == 'femme')
				 echo 'checked';
			
		
		?>><img src="imagesHero\femme.png" height="30px"></div>
		
		<input type="submit">
		
		
	</form>
		
	

</div>



<div>

</div>


</body>
</html>
