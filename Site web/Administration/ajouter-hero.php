<?php
	include "barre-navigation.php";
?>
<!doctype html>
<html lang="fr">
<head>
	<meta charset="utf-8">
	<title>Ajouter un héro</title>
	
	<style>
	
		label
		{
			display:block
			
		}
		
		form div
		{
			margin-top:10px;
		}
	
	</style>
	
	
</head>
<body>
		
		<h1>Ajouter un héro</h1>

		<form method="post" action="traitement-ajouter-hero.php">
		
			<div>
			
				<label for="nom">Nom</label>
				<input id="nom" name="nom" type="text">
			
			</div>
			
			<div>
			
				<label for="sex">Sex</label>
				<input id="sex" name="sex" type="text">
			
			</div>
			
			<div>
			
				<label for="role">Role</label>
				<input id="role" name="role" type="text">
			
			</div>
			
			<div>
			
				<label for="difficulty">Difficulty</label>
				<input id="difficulty" name="difficulty" type="text">
			
			</div>
			
			
			<input type="submit" name="enregistrer">
		
		</form>

</body>
</html>
