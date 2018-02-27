<?php

	include "baseDeDonnees.php";
	include "barre-navigation.php";
	
	session_start();
	

	if(empty ($_SESSION['email']))
	{
		$_SESSION['email'] = $_POST['email'];
	}
	
	if(preg_match("/formulaire4.php$/",$_SERVER['HTTP_REFERER']))
	{
		if($_SESSION['email'] != $_POST['email'])
	{
		if($_POST['email'] != '')
		{
			$_SESSION['email'] = $_POST['email'];
		}
	}
	}
	
	
	
	if($_SESSION['email'] == '')
	{
		header('Location: formulaire4.php');
	}
	
	if($_SESSION['email'] != '')
	{
		$SQL_AJOUTER_MEMBRE = "INSERT INTO membre(pseudonyme, motdepasse, courriel, nom, role) VALUES('".  $_SESSION['pseudo']  ."','".  $_SESSION['mdp']  ."', '".  $_SESSION['email']  ."', '".  $_SESSION['nom']  ."', '".  'membre'  ."')";
	
		echo $SQL_AJOUTER_MEMBRE;
		
		$basededonnees->exec($SQL_AJOUTER_MEMBRE);
		
		session_destroy();
		
		$_SESSION = '';
		
		header('Refresh: 2; URL=accueil.php');
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

<h1>Traitement formulaire</h1>

	<?php
	
		var_dump($_SESSION);
	
	?>

</body>
</html>
