<?php

	include "baseDeDonnees.php";
	include "barre-navigation.php";
	
	session_start();
	
	if(empty ($_SESSION['carte']) && empty ($_SESSION['numeroCarte']))
	{
		$_SESSION['carte'] = $_POST['carte'];
		$_SESSION['numeroCarte'] = $_POST['numeroCarte'];
	}
	
	if(preg_match("/formulaire3.php$/",$_SERVER['HTTP_REFERER']))
	{
		if($_SESSION['carte'] != $_POST['carte'])
		{
			if($_POST['carte'] != '')
			{
				$_SESSION['carte'] = $_POST['carte'];
			}
		}
		
		if($_SESSION['numeroCarte'] != $_POST['numeroCarte'])
		{
			if($_POST['numeroCarte'] != '')
			{
				$_SESSION['numeroCarte'] = $_POST['numeroCarte'];
			}
		}
	}
	
	if($_SESSION['numeroCarte'] == '')
	{
		header('Location: formulaire3.php');
	}
	
	
?>	

<!doctype html>
<html lang="fr">
<head>
	<meta charset="utf-8">
	<title>formulaire</title>
	
	<link rel="stylesheet" href="css/decoration.css">
	
</head>
<body>

<div><a href="formulaire1.php">Information personnelles</a>-><a href="formulaire2.php">Informations du compte</a>-><a href="formulaire3.php">Moyen de paiement</a>-><a href="formulaire4.php">Email</a>-></div>



<h1>Formulaire d'inscription</h1>

<h2>Email</h2>

	<form action="traitement-formulaire.php" method="post">
	
		
		<div>Email : <input type="text" name="email"
		<?php
		
			if(!empty($_SESSION['email']))
			{
				?> value=<?= $_SESSION['email'];
			}
		
		?>
		></div>
		
		<input type="submit">
	</form>

</body>
</html>
