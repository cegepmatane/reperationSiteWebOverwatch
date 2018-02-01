	<?php
	session_start();
	//include "barre-navigation.php";
?>
	<style>
	*{
		padding = 0;
		margin = 0;
		
	}
	
	body{
		background-color: lightgrey;
	}

	
	
	#lien
	{
		margin-left: 300px;
	}
	
	ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color: #333;
	}

	li {
		float: left;
	}

	li a {
		display: block;
		color: white;
		text-align: center;
		padding: 14px 16px;
		text-decoration: none;
	}

	/* Change the link color to #111 (black) on hover */
	li a:hover {
		background-color: #111;
	}
	</style>


<div>
	<?php
		if(!empty($_SESSION["membre"]))
			echo "Bonjour, " . $_SESSION["membre"]["nom"];
	?>

	<ul>
		<li><a href="accueil.php">Accueil</a></li>
	  <li><a href="liste-hero.php">Liste des héros</a></li>
	  <li><a href="liste-map.php">Liste des maps</a></li>
	  <li><a href="contact.php">Contact</a></li>
	  
	  
	</ul>


</div>

