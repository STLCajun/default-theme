<?php

add_action( 'init', 'register_my_menus' );
add_action( 'init', 'create_post_type' );
add_action( 'init', 'create_taxonomies' );

add_theme_support( 'post-thumbnails' ); 
add_theme_support( 'admin-bar' ); 

function register_my_menus() {
  register_nav_menus(
    array(
    	  'header-menu' => __( 'Header Menu' ),
    	  'footer-menu' => __( 'Footer Menu' ) 
		  )
  );
}

function create_post_type() {
	register_post_type( 'event',
		array(
			'labels' => array(
				'name' => __( 'Events' ),
				'singular_name' => __( 'Event' )
			),
		'public' => true,
		'has_archive' => true,
		'supports' => array('title','editor','author','thumbnail','excerpt','comments','page-attributes')
		)
	);
}

function create_taxonomies() {

	register_taxonomy('type',array('event'), array(
	    'hierarchical' => true,
	    //'labels' => $labels,
	    'show_ui' => true,
	    'query_var' => true,
	    'rewrite' => array( 'slug' => 'type' ),
	  ));
}
  
?>
