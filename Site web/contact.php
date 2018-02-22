<?php
	include "barre-navigation.php";
?>
<!doctype html>
<html lang="fr">
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>
<h1>Contact</h1>
    <form  action="traitement-contact.php" method="POST">
	
    <input type="hidden" name="action" value="submit">
    <label>Nom :</label>
    <input id="name" name="name" type="text" value="" size="30"/><br>
    <label>Email :</label>
    <input id="email" name="email" type="text" value="" size="30"/><br>
    <label>Message :</label>
    <textarea id="message" name="message" rows="7" cols="30"></textarea><br>
    <input type="submit" value="Envoyer"/>
    </form>

</body>
</html>
