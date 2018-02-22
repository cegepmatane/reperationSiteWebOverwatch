<?php
	include "barre-navigation.php";
?>
<!doctype html>
<html lang="fr">
<head>
	<meta charset="utf-8">
	<title>Overwatch - Se connecter</title>
</head>
<body>
<h1>Overwatch</h1>
<h2>Se connecter</h2>

	<link rel="stylesheet" href="css/decoration.css">

<form method="post" action="traitement-authentification-membre.php">

	<div>
		<label for="pseudonyme">Pseudonyme</label>
		<input type="text" name="pseudonyme" id="pseudonyme"/>
	</div>
	<div>
		<label for="motdepasse">Mot de passe</label>
		<input type="password" name="motdepasse" id="motdepasse"/>
	</div>
	<input type="submit" name="authentification-membre" value="Se connecter"/>

</form>

</body>
</html>
