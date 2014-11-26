<?php 

function wordpress_resources() {

	wp_enqueue_style('style', get_stylesheet_uri());
	wp_enqueue_style('mediaStyle', get_stylesheet_uri());

}

add_action('wp_enqueue_scripts', 'wordpress_resources');

//Navigation Menu
register_nav_menus(array(
	'primary' => __( 'Primary Menu', 'NSAE Theme'),
	'footer' => __( 'Footer Menu' ),

));

//Header and Thumbnails

	add_theme_support('post-thumbnails');
	set_post_thumbnail_size(200,200, true);
	add_theme_support( 'custom-header', $args );

//Post excerpts

	function excerpt_read_more_link($output) {
 	global $post;
 	return $output . '<a href="'. get_permalink($post->ID) . '"> See more...</a>';
	}
	add_filter('the_excerpt', 'excerpt_read_more_link');

//Right sidebar

register_sidebar(array(
	"name" => "Right Sidebar",
	"id" => "right-sidebar",
	"description" => "This will be on the right",
	"before_widget" => "<div class='widget'>",
	"after_widget" => "</div>",
	"before_title" => "<h2 class='widget_title'>",
	"after_title" => "</h2>"
));

register_sidebar(array(
	"name" => "Contact Right Sidebar",
	"id" => "conract-right-sidebar",
	"description" => "This will be on the right",
	"before_widget" => "<div class='widget'>",
	"after_widget" => "</div>",
	"before_title" => "<h2 class='widget_title'>",
	"after_title" => "</h2>"
));

//center sidebar


register_sidebar(array(
	"name" => "Center Sidebar",
	"id" => "center-sidebar",
	"description" => "This is where the address will go",
	"before_widget" => "<div class='widget'>",
	"after_widget" => "</div>",
	"before_title" => "<h2 class='widget_title'>",
	"after_title" => "</h2>"
));

//left sidebar

register_sidebar(array(
	"name" => "Left Sidebar",
	"id" => "left-sidebar",
	"description" => "This is where the address will go",
	"before_widget" => "<div class='widget'>",
	"after_widget" => "</div>",
	"before_title" => "<h2 class='widget_title'>",
	"after_title" => "</h2>"
));

//footer left

register_sidebar(array(
	"name" => "Footer Left",
	"id" => "footer-left",
	"description" => "This will be for the sitemap",
	"before_widget" => "<div class='widget'>",
	"after_widget" => "</div>",
	"before_title" => "<h2 class='widget_title'>",
	"after_title" => "</h2>"
	
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

register_sidebar(array(
	"name" => "Craig left Sidebar",
	"id" => "craig-left-sidebar",
	"description" => "This will be on craig page left",
	//"before_widget" => "<div class='widget'>",
	//"after_widget" => "</div>",
	"before_title" => "<h3 class='widget_title'>",
	"after_title" => "</h3>"
));

register_sidebar(array(
	"name" => "Craig Right Sidebar",
	"id" => "craig-right-sidebar",
	"description" => "This will be on craig page right",
	"before_widget" => "<div class='widget'>",
	"after_widget" => "</div>",
	"before_title" => "<h3 class='widget_title'>",
	"after_title" => "</h3>"
));

register_sidebar(array(
	"name" => "Craig Center Sidebar",
	"id" => "craig-center-sidebar",
	"description" => "This will be on craig page right",
	"before_widget" => "<div class='widget'>",
	"after_widget" => "</div>",
	"before_title" => "<h3 class='widget_title'>",
	"after_title" => "</h3>"
));

register_sidebar(array(
	"name" => "Footer Menu 1",
	"id" => "footer-1",
	"description" => "This will be on left, number 1 position",
	"before_widget" => "<div class='widget'>",
	"after_widget" => "</div>",
));

register_sidebar(array(
	"name" => "Footer Menu 2",
	"id" => "footer-2",
	"description" => "This will be on left, number 2 position",
	"before_widget" => "<div class='widget'>",
	"after_widget" => "</div>",
));

register_sidebar(array(
	"name" => "Footer Menu 3",
	"id" => "footer-3",
	"description" => "This will be on left, number 3 position",
	"before_widget" => "<div class='widget'>",
	"after_widget" => "</div>",
));

register_sidebar(array(
	"name" => "Footer Menu 4",
	"id" => "footer-4",
	"description" => "This will be in the center, number 4 position",
	"before_widget" => "<div class='widget'>",
	"after_widget" => "</div>",
));

register_sidebar(array(
	"name" => "Footer Menu 5",
	"id" => "footer-5",
	"description" => "This will be on the right, number 5 position",
	"before_widget" => "<div class='widget'>",
	"after_widget" => "</div>",
));

register_sidebar(array(
	"name" => "Footer Menu 6",
	"id" => "footer-6",
	"description" => "This will be on the right, number 6 position",
	"before_widget" => "<div class='widget'>",
	"after_widget" => "</div>",
));

register_sidebar(array(
	"name" => "Footer Menu 7",
	"id" => "footer-7",
	"description" => "This will be on second tier, number 7 position",
	"before_widget" => "<div class='widget'>",
	"after_widget" => "</div>",
));

?>
