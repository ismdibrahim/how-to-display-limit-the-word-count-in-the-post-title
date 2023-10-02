<?php

function max_title_length( $title ) {

	if (is_singular('post') || is_single('post')) {
        $max = 100;
        if( strlen( $title ) > $max ) {
        return substr( $title, 0, $max ). " &hellip;";
        } else {
        return $title;
        }
    }else {
    	$max = 60;
        if( strlen( $title ) > $max ) {
        return substr( $title, 0, $max ). " &hellip;";
        } else {
        return $title;
        }
    }
    
    
}

add_filter( 'the_title', 'max_title_length');
