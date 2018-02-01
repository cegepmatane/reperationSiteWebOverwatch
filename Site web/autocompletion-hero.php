<?php
	//print_r($_GET);
	// test avec http://localhost/aubergesduquebec/action/autocompletion-auberge.php?debut=rio
	
	// pas de if sur l'action car le script est ajax 
	// - recoit pas de champs get pour le bouton submit (pas de bouton submit utilisé)
	// - on sait que l'action est demandé car le script est pas inclus dans un autre script, 
	//   il est appelé spécialement par l'ajax
	include_once "baseDeDonnees.php";
	
	$recherche = filter_var($_GET['debut'], FILTER_SANITIZE_ENCODED);
	//echo $recherche;
	$SQL_SUGGESTION = "SELECT nom FROM heros WHERE nom LIKE '$recherche%'";
	// TODO or restaurant LIKE '$recherche%'";
	$requeteSuggestion = $basededonnees->prepare($SQL_SUGGESTION);
	$requeteSuggestion->execute();
	$listeSuggestion = $requeteSuggestion->fetchAll(PDO::FETCH_OBJ);
	//print_r($listeSuggestion);
	
	// Si on choisi de générer du HTML, le script est dédié à cet usage ajax seulement
?>
<div id="liste-suggestions">
	<?php
		foreach($listeSuggestion as $suggestion)
		{
			?>
				<div class="suggestion"><a href="#" onclick="choisirSuggestion(this);"><?php echo $suggestion->nom;?></a></div>
			<?php	
		}
	?>
</div>