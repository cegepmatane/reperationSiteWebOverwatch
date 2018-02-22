<?php

	include "baseDeDonnees.php";
	include "barre-navigation.php";
	
	session_start();
	
	if(empty ($_SESSION['pseudo']) && empty ($_SESSION['mdp']))
	{
		$_SESSION['pseudo'] = $_POST['pseudo'];
		$_SESSION['mdp'] = $_POST['mdp'];
	}
	
	if(preg_match("/formulaire2.php$/",$_SERVER['HTTP_REFERER']))
	{
		if($_SESSION['pseudo'] != $_POST['pseudo'])
		{
			if($_POST['pseudo'] != '')
			{
				$_SESSION['pseudo'] = $_POST['pseudo'];
			}
		}
		
		if($_SESSION['mdp'] != $_POST['mdp'])
		{
			if($_POST['mdp'] != '')
			{
				$_SESSION['mdp'] = $_POST['mdp'];
			}
		}
	}
	
	if($_SESSION['pseudo'] == '' || $_SESSION['mdp'] == '')
	{
		header('Location: formulaire2.php');
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

<div><a href="formulaire1.php">Information personnelles</a>-><a href="formulaire2.php">Informations du compte</a>-><a href="formulaire3.php">Moyen de paiement</a>-></div>


<h1>Formulaire d'inscription</h1>

<h2>Moyen de paiement</h2>

	<form action="formulaire4.php" method="post">
	
		<select name="carte">
		  <option value="visa">Visa</option>
		  <option value="mastercard">Mastercard</option>
		  <option value="paypal">Paypal</option>
		</select>
	
		<div>Numero de carte de credit : <input type="text" name="numeroCarte"
		<?php
		
			if(!empty($_SESSION['numeroCarte']))
			{
				?> value=<?= $_SESSION['numeroCarte'];
			}
		
		?>
		></div>
		
		<input type="submit">
	</form>
	

</div>



<div>

</div>


</body>
</html>
