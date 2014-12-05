<?php 
	register_nav_menus(array(
		"main-menu" => "Main website navigation",
		"util-menu" => "Utilities for my website",
		"footer-nav" => "Menu that appears in the footer"
	)); 

	add_theme_support('post-thumbnails'); 
	set_post_thumbnail_size(200,200, true);
	
	//sidebars
	register_sidebar(array(
		"name" => "Right Sidebar",
		"id" => "right-sidebar",
		"description" => "Will appear on the Right",
		"before_widget" =>"<div class='widget'>",
		"after_widget" =>"</div>",
		"before_title" => "<h3 class='widget_title'>",
		"after_title" => "</h3>"
	));
	
	register_sidebar(array(
		"name" => "Footer Left",
		"id" => "footer-right-sidebar",
		"description" => "Will appear on the left side of the footer",
		"before_widget" =>"<div class='widget'>",
		"after_widget" =>"</div>",
		"before_title" => "<h3 class='widget_title'>",
		"after_title" => "</h3>"
	));
	
	register_sidebar(array(
		"name" => "Footer Center",
		"id" => "footer-center-sidebar",
		"description" => "Will appear on the center of the footer",
		"before_widget" =>"<div class='widget'>",
		"after_widget" =>"</div>",
		"before_title" => "<h3 class='widget_title'>",
		"after_title" => "</h3>"
	));
	
	register_sidebar(array(
		"name" => "Footer Left",
		"id" => "footer-left-sidebar",
		"description" => "Will appear on the right side of the footer",
		"before_widget" =>"<div class='widget'>",
		"after_widget" =>"</div>",
		"before_title" => "<h3 class='widget_title'>",
		"after_title" => "</h3>"
	));
?>

