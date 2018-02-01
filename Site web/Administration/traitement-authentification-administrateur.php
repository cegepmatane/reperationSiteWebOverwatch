<?php
	session_start();
	include "basededonnees.php";
	
	// 1ere étape de sécurisation = PHP FILTER
	$filtreMembre = array();
	$filtreMembre['pseudonyme'] = FILTER_SANITIZE_STRING;
	$filtreMembre['motdepasse'] = FILTER_SANITIZE_STRING;
	$membreCandidat = filter_input_array(INPUT_POST, $filtreMembre);
	//print_r($membreCandidat);
	echo "<p></p>";
	
	// 2ème étape de sécurisation = requêtes préparées SQL - TODO
	$SQL_TROUVER_ADMIN = "SELECT * FROM membre WHERE pseudonyme = '" . $membreCandidat['pseudonyme'] . "' AND role = 'administrateur'";
	//echo $SQL_TROUVER_MEMBRE;
	$requeteTrouverMembre = $basededonnees->prepare($SQL_TROUVER_ADMIN);
	$requeteTrouverMembre->execute();
	$membreTrouve = $requeteTrouverMembre->fetch();
	//print_r($membreTrouve);
	
	// http://php.net/manual/en/function.strcmp.php
	if(strcmp($membreCandidat["motdepasse"],$membreTrouve["motdepasse"]) == 0)
	{	
		echo "Authentification reussie";
		$_SESSION['pseudonyme'] = $membreTrouve['pseudonyme'];
		//var_dump($_SESSION);
		$_SESSION['membre'] = array();
		$_SESSION['membre']['pseudonyme'] = $membreTrouve['pseudonyme'];
		$_SESSION['membre']['nom'] = $membreTrouve['nom'];
		var_dump($_SESSION);
		header('Location: accueil.php');
		
	}
	else
	{	
		echo "Probleme d'authentification";
		echo " , vous vous etes trompés en vous identifiant ou vous n'êtes pas un administrateur.";
	}
		
?>

<!doctype html>
<html lang="fr">
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>

</body>
</html>
