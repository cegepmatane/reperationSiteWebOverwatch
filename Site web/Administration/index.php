<?php
	//print_r($_POST);
?>
<!doctype html>
<html lang="fr">
<head>
	<meta charset="utf-8">
	<title>Overwatch - Se connecter</title>
</head>
<body>
<h1>Overwatch</h1>
<h2>Se connecter (administrateur seulement)</h2>


<form method="post" action="traitement-authentification-administrateur.php">

	<div>
		<label for="pseudonyme">Pseudonyme</label>
		<input type="text" name="pseudonyme" id="pseudonyme"/>
	</div>
	<div>
		<label for="motdepasse">Mot de passe</label>
		<input type="password" name="motdepasse" id="motdepasse"/>
	</div>
	<input type="submit" name="authentification-administrateur" value="Se connecter"/>

</form>

</body>
</html>

