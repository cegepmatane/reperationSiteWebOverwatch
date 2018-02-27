<?xml version="1.0" encoding="UTF-8"?>
<rss version="2.0"
    xmlns:content="http://purl.org/rss/1.0/modules/content/"
    xmlns:wfw="http://wellformedweb.org/CommentAPI/"
    xmlns:dc="http://purl.org/dc/elements/1.1/"
    xmlns:atom="http://www.w3.org/2005/Atom"
    xmlns:sy="http://purl.org/rss/1.0/modules/syndication/"
    xmlns:slash="http://purl.org/rss/1.0/modules/slash/"
    >
<channel>

	<link rel="stylesheet" href="css/decoration.css">

<?php
    include "basededonnees.php";
	include "barre-navigation.php";

    $SQL_LISTE_HEROS = "SELECT * FROM heros";
    $resultatListeHeros = $basededonnees->query($SQL_LISTE_HEROS);
    $listeHeros = $resultatListeHeros->fetchAll(PDO::FETCH_OBJ);
    ?>



<?php
        foreach($listeHeros as $heros)
        {
            //var_dump($map);
            ?>
            <heros>

                <title><![CDATA[<?php echo htmlentities($heros->nom); ?>]]</title>
                <link><![CDATA[http://localhost/Site%20map/afficher-hero.php?heros=<?php echo $heros->id_hero; ?>]]</link>
                <role><![CDATA[<?php echo $heros->role; ?>]]</role>
                <pubDate></pubDate>
            </heros>
            <a href="afficher-hero.php?heros=<?=$heros->id_hero?>">
            <h3><?=$heros->nom?></h3></a>
            <?php
            //print_r($map);

        }
?>

</channel>

</rss>