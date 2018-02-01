<?php
	include "barre-navigation.php";
?>
<!doctype html>
<html lang="fr">
<head>
	<meta charset="utf-8">
	<title>Ajouter une map</title>
	
	<style>
		body{
			
			background-color:lightgrey;
		}
		
		
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
		
		<h1>Ajouter une map</h1>

		<form method="post" action="traitement-ajouter-map.php" enctype="multipart/form-data">
		
			<div>
			
				<label for="nom">Nom</label>
				<input id="nom" name="nom" type="text">
			
			</div>
			
			<div>
			
				<label for="emplacement">Emplacement</label>
				<input id="emplacement" name="emplacement" type="text">
			
			</div>
			
			<div>
			
				<label for="mode">Mode</label>
				<input id="mode" name="mode" type="text">
			
			</div>
			
			<div>
			
				<label for="objectifs">Nombre d'objectifs</label>
				<input id="objectifs" name="objectifs" type="number">
			
			</div>
			
			<div>
			
				<label for="type">Description</label>
				<input id="type" name="type" type="text">
			
			</div>
			
			<div>
			
				<label for="illustration">Illustration</label>
				<input id="illustration" name="illustration" type="file">
			
			</div>
			
			<input type="submit" name="enregistrer">
		
		</form>

</body>
</html>
