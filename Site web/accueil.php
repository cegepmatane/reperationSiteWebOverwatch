<?php
	session_start();
	include ("visiteur.php");
	include ("clicks.php");
?>
<!doctype html>
<html lang="fr">
<head>
	<meta charset="utf-8">
	<title>Page d'accueil</title>
	
	<style>
	@import url(http://netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css);
	*{
		padding = 0;
		margin = 0;
		
        
        
	}
	h1{
		text-align: center;
	}
	
	#divdate{
	
		width:270px;
		padding:5px;
		border:3px solid black;
		
		font-size: 20px;
	}
	#decompte{
		font-weight:bold;
	}
	
	
	fieldset, label { margin: 0; padding: 0; }
            body{ margin: 20px; }
            h1 { font-size: 1.5em; margin: 10px; }
 
            .rating { 
                border: none;
                float: left;
            }
 
            .rating > input { display: none; } 
            .rating > label:before { 
                margin: 5px;
                font-size: 1.25em;
                font-family: FontAwesome;
                display: inline-block;
                content: "\f005";
            }
 
            
 
            .rating > label { 
                color: #ddd; 
                float: right; 
            }
 
            .rating > input:checked ~ label, 
            .rating:not(:checked) > label:hover,  
            .rating:not(:checked) > label:hover ~ label { color: #FFD700;  }
 
            .rating > input:checked + label:hover, 
            .rating > input:checked ~ label:hover,
            .rating > label:hover ~ input:checked ~ label, 
            .rating > input:checked ~ label:hover ~ label { color: #FFED85;  }

           
      
          
	

	</style>
	
	<script type="text/javascript" src="Ajax.js"></script>

	<script type="text/javascript">
		function afficherNote()
			{
				

					
				var ajax = new Ajax();
				//alert("Allo")
				ajax.executer("POST","afficher-site-rating-ajax.php", function(ajax)
				{
					//alert(ajax.responseText);
					cible = document.getElementById("note");
					cible.innerHTML = cible.innerHTML + ajax.responseText;
				});
				
			}
			
		
	</script>
	
	
</head>
<body>

<h1>Page d'accueil</h1>




<?php
		include_once "baseDeDonnees.php";
		include "barre-navigation.php";
		include "Administration/DAO.php";
		
		$DAO = new DAO();
	
		$nombreMembre = $DAO->afficherMembre($basededonnees);
		
		echo "Il y a " . $nombreMembre[0] . " inscrits sur ce site !";
	?>
	<?php
	if(!empty($_GET['action-rechercher']))
	{
		include_once "baseDeDonnees.php";
		
		$recherche = $_GET['recherche'];
		$SQL_RECHERCHE = "SELECT id_hero, nom, sex, role FROM heros WHERE nom LIKE '$recherche%' or sex LIKE '$recherche%' or role LIKE '$recherche%'";
		$requeteRecherche = $basededonnees->query($SQL_RECHERCHE);
		$listeHeros = $requeteRecherche->fetchAll();
		
		$recherche2 = $_GET['recherche'];
		$SQL_RECHERCHE2 = "SELECT id_map, nom, emplacement, mode, objectifs, type FROM map WHERE nom LIKE '$recherche%' or emplacement LIKE '$recherche%' or mode LIKE '$recherche%' or objectifs LIKE '$recherche%' or type LIKE '$recherche%'";
		$requeteRecherche2 = $basededonnees->query($SQL_RECHERCHE2);
		$listeMaps = $requeteRecherche2->fetchAll();
	}
	else
	{
		$SQL_LISTE_HEROS = "SELECT id_hero, nom, sex, role, difficulty FROM heros";
		$resultatListeHeros = $basededonnees->query($SQL_LISTE_HEROS);
		$listeHeros = $resultatListeHeros->fetchAll();
		
		$SQL_LISTE_MAP = "SELECT id_map, nom, emplacement, mode, objectifs, type FROM map";
		$resultatListeMaps = $basededonnees->query($SQL_LISTE_MAP);
		$listeMaps = $resultatListeMaps->fetchAll();
		
	}
?>

<div id="recherche-accueil">
	<form method="get">

		<input type="text" id="champs-recherche" name="recherche">
		<input type="submit" name="action-rechercher" value="Rechercher">

	</form>
</div>




<div id="divdate">
<p id="date">
<?php
date_default_timezone_set('America/New_York');
$date = date("d-m-Y H:i:s");
echo "Date : $date";


$jours = ceil((strtotime("4/1/2017") - time())/(60*60*24));

$s='';
if ($jours!=1) {
     $s='s';
}


?>
</p>
<p id="decompte">
<?php
echo $jours. " jour$s avant le premier avril!";
?>
</p>
</div>

<div class="main">

            <div class="content">
         
                
                <div>
				

                    <!-- Demo 1 start -->
			
                    <h2>Donnez une note à notre site</h2>
					
                    <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
					<script>
                        $(document).ready(function () {
							
						
							
							
                            $("#demo1 .stars").click(function () {
                           
                                $.post('rating.php',{rate:$(this).val()},function(d){
                                    if(d>0)
                                    {
                                        alert('Vous avez deja vôté, désolé');
                                    }else{
                                        alert('Merci pour le vôte');
                                    }
                                });
								
								$.get("afficher-site-rating-ajax.php", function(data)
								{
									//alert("DataLoaded : " + data);
									cible = document.getElementById("note");
									//alert(cible.innerHTML);
									cible.innerHTML = "<p>Votre note précédente était " + data + " ! Si ce n'est pas ce que vous venez de cliquer, c'est que vous aviez déja vôté !</p>"
								});
                                $(this).attr("checked");
                            });
                        });
                    </script>
					
					
                    <fieldset id='demo1' class="rating">
                        <input class="stars" type="radio" id="star5" name="rating" value="5" />
                        <label class = "full" for="star5" title="Super - 5 stars"></label>
                        <input class="stars" type="radio" id="star4" name="rating" value="4" />
                        <label class = "full" for="star4" title="Vraiment bon - 4 stars"></label>
                        <input class="stars" type="radio" id="star3" name="rating" value="3" />
                        <label class = "full" for="star3" title="Bon - 3 stars"></label>
                        <input class="stars" type="radio" id="star2" name="rating" value="2" />
                        <label class = "full" for="star2" title="Pas bon - 2 stars"></label>
                        <input class="stars" type="radio" id="star1" name="rating" value="1" />
                        <label class = "full" for="star1" title="Mauvais - 1 star"></label>
						
                    </fieldset>
					
					 <br></br>
					
					<div id="note"></div>
					
					

 </div>
 
 <br></br>
 
 
 <h2>Votre recherche</h2>
			
<div id="liste-heros">

	<?php
		foreach($listeHeros as $heros)
		{
			?>
			<h3>
			
			<a href="afficher-hero?heros=<?=$heros['id_hero']?>"><?=$heros['nom']?></a>
			
			
			</h3>
			<?php
		}
	?>
	
	<?php
		foreach($listeMaps as $map)
		{
			?>
			<h3>
			
			<a href="afficher-map?map=<?=$map['id_map']?>"><?=$map['nom']?></a>
			
			
			</h3>
			<?php
		}
	?>

</div>
            


</body>
</html>
