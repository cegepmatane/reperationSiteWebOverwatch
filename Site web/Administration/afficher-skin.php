<?php

	include "baseDeDonnees.php";
	include "barre-navigation.php";
	include "DAO.php";
	
	$DAO = new DAO();
	
	$skin = $DAO->afficherSkin($basededonnees);
	
	
	/*$SQL_SKIN = "SELECT * FROM skin WHERE id_skin = " . $_GET['skin'];
    
	
	$curseurSkin = $basededonnees->query($SQL_SKIN);
	$skin = $curseurSkin->fetch();*/
	
?>	

<!doctype html>
<html lang="fr">
<head>
	<meta charset="utf-8">
	<title>Skin</title>
	
	<style>
	*{
		padding = 0;
		margin = 0;
		
        
        
	}
	h1{
		text-align: center;
	}
	body{
		background-color: lightgrey;
	}
	
	</style>
	
</head>
<body>

<h1><?=$skin['nom']?></h1>



<div id="liste-skin">

	
		
		<div>Prix : <?=$skin['prix']?></div>
		<div>Qualité : <?=$skin['qualite']?></div>
		
		<?php
				
					
				if($skin['evenement'] == 0)
				{
					?>
						<div>Evenement : Non</div>
					<?php
				}
				else
				{
					?>
						<div>Evenement : Oui</div>
					<?php
				}					
					
			
			?>
		
		
	

</div>



<div>

</div>


</body>
</html>
