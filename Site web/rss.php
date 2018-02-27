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

    $SQL_LISTE_MAP = "SELECT * FROM map";
    $resultatListeMap = $basededonnees->query($SQL_LISTE_MAP);
    $listeMap = $resultatListeMap->fetchAll(PDO::FETCH_OBJ);
    ?>



<?php
        foreach($listeMap as $map)
        {
            //var_dump($map);
            ?>
            <map>

                <title><![CDATA[<?php echo htmlentities($map->nom); ?>]]</title>
                <link><![CDATA[http://localhost/Site%20map/afficher-map.php?map=<?php echo $map->id_map; ?>]]</link>
                <description><![CDATA[<?php echo $map->emplacement; ?>]]</description>
                <pubDate></pubDate>
            </map>
            <a href="afficher-map.php?map=<?=$map->id_map?>">
            <h3><?=$map->nom?></h3></a>
            <?php
            //print_r($map);

        }
?>

</channel>

</rss>