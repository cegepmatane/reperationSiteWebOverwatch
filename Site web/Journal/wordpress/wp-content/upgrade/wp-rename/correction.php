<?php

	function renym_content_replace( $content ) {
		$search  = array( 'wordpress', 'map', 'Overwatch', 'héro');
		$replace = array( 'WordPress', 'carte', 'Cancer', 'personnage');
		return str_replace( $search, $replace, $content );
	}
	add_filter( 'the_content', 'renym_content_replace' );


?>