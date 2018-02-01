<?php
/**
 * @package Remplacement
 * @version 1.6
 */
/*
Plugin Name: Remplacement

Description: Ceci est un greffon qui remplace des mots dans le texte`.
Author: Poche
Version: 1.6

*/
	function search_content_replace( $content ) 
	{
		$search  = array( 'wordpress', 'map', 'Overwatch', 'hero');
		$replace = array( 'WordPress', 'carte', 'Blizzard', 'personnage');
		return str_replace( $search, $replace, $content );
	}
	add_filter( 'the_content', 'search_content_replace' );


?>