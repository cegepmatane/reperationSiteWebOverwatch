<?php

	include "baseDeDonnees.php";
	include "barre-navigation.php";
	
	session_start();

	if(empty ($_SESSION['prenom']) && empty ($_SESSION['nom']) && empty ($_SESSION['sex']))
	{
		$_SESSION['prenom'] = $_POST['prenom'];
		$_SESSION['nom'] = $_POST['prenom'] . ' ' . $_POST['nom'];
		$_SESSION['sex'] = $_POST['sex'];
		$_SESSION['nom1'] = $_POST['nom'];
	}
	
	if(preg_match("/formulaire1.php$/",$_SERVER['HTTP_REFERER']))
	{
		if($_SESSION['prenom'] != $_POST['prenom'])
		{
			if($_POST['prenom'] != '')
			{
				$_SESSION['prenom'] = $_POST['prenom'];
			}
		}
		if($_SESSION['nom1'] != $_POST['nom'])
		{
			if($_POST['sex'] != '')
			{
				$_SESSION['nom'] = $_POST['prenom'] . ' ' . $_POST['nom'];
				$_SESSION['nom1'] = $_POST['nom'];
			}
		}
		if($_SESSION['sex'] != $_POST['sex'])
		{
			if($_POST['sex'] != '')
			{
				$_SESSION['sex'] = $_POST['sex'];
			}
		}
	}
	
	
	
	if($_SESSION['prenom'] == '' || $_SESSION['nom'] == '' || $_SESSION['sex'] == null)
	{
		header('Location: formulaire1.php');
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

<div><a href="formulaire1.php">Information personnelles</a>-><a href="formulaire2.php">Informations du compte</a>-></div>

<h1>Formulaire d'inscription</h1>

<h2>Informations du compte</h2>

<h2><? $_SESSION[prenom] ?></h2>

	<form action="formulaire3.php" method="post">
	
		<div>Pseudo : <input type="text" name="pseudo"
		<?php
		
			if(!empty($_SESSION['pseudo']))
			{
				?> value=<?= $_SESSION['pseudo'];
			}
		
		?>
		></div>
		<div>Mot de passe : <input type="password" name="mdp"
		<?php
		
			if(!empty($_SESSION['mdp']))
			{
				?> value=<?= $_SESSION['mdp'];
			}
		
		?>
		></div>
		
		
		<input type="submit">
	</form>

</body>
</html>
