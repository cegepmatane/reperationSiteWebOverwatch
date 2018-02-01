<?php
/**
 * @package Majuscule
 * @version 1.6
 */
/*
Plugin Name: Majuscule

Description: Ceci est un greffon qui met les certains mots en majuscule.
Author: math
Version: 1.6

*/
	function search_content_replace( $content ) 
	{
		$search  = array( 'hero', 'habilite', 'offense', 'deffense');
		$replace = array( 'HERO', 'HABILITE', 'OFFENSE', 'DEFFENSE');
		return str_replace( $search, $replace, $content );
	}
	add_filter( 'the_content', 'search_content_replace' );


?>