<?php 

function wordpress_resources() {

	wp_enqueue_style('style', get_stylesheet_uri());

}

add_action('wp_enqueue_scripts', 'wordpress_resources');

//Register Navigation Menus Here
register_nav_menus(array(
	'primary' => __( 'Primary Menu' ),
	'footer' => __( 'Footer Menu' ),

	//test comment
));