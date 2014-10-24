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

//Right sidebar

register_sidebar(array(
	"name" => "Right Sidebar",
	"id" => "right-sidebar",
	"description" => "This will be on the right",
	"before_widget" => "<div class='widget'>",
	"after_widget" => "</div>",
	"before_title" => "<h3 class='widget_title'>",
	"after_title" => "</h3>"
));


//center sidebar


register_sidebar(array(
	"name" => "Center Sidebar",
	"id" => "center-sidebar",
	"description" => "This is where the address will go",
	"before_widget" => "<div class='widget'>",
	"after_widget" => "</div>",
	"before_title" => "<h3 class='widget_title'>",
	"after_title" => "</h3>"
));

//footer left

register_sidebar(array(
	"name" => "Footer Left",
	"id" => "footer-left",
	"description" => "This will be for the sitemap",
	"before_widget" => "<div class='widget'>",
	"after_widget" => "</div>",
	"before_title" => "<h3 class='widget_title'>",
	"after_title" => "</h3>"
	
));

//footer right

register_sidebar(array(
	"name" => "Footer Right",
	"id" => "footer-right",
	"description" => "This will also be for the sitemap",
	"before_widget" => "<div class='widget'>",
	"after_widget" => "</div>",
	"before_title" => "<h3 class='widget_title'>",
	"after_title" => "</h3>"
	
));

	
?>	

