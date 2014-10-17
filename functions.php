<?php 

function wordpress_resources() {

	wp_enqueue_style('style', get_stylesheet_uri());

}

add_action('wp_enqueue_scripts', 'wordpress_resources');

//Navigation Menu
register_nav_menus(array(
	'primary' => __( 'Primary Menu' ),
	'footer' => __( 'Footer Menu' ),

));

//Sidebars

register_sidebar(array(
	"name" => "Right Sidebar",
	"id" => "right-sidebar",
	"description" => "This will be on the right",
	"before_widget" => "<div class='widget'>",
	"after_widget" => "</div>",
	'before_title' => "<h3 class='widget_title'>",
	"after_title" => "</h3>",
));


//Second sidebar

if ( function_exists('register_sidebar') ) {
register_sidebar(array(
'name' => 'Homepage Sidebar',
'id' => 'homepage-sidebar',
'description' => 'Appears as the sidebar on the custom homepage',
'before_widget' => '<div style="height: 280px"></div><li id="%1$s" class="widget %2$s">',
'after_widget' => '</li>',
'before_title' => '<h2 class="widgettitle">',
'after_title' => '</h2>',
));
}