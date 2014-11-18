<!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<meta name="viewport" content="width=device-width">
		<title><?php bloginfo('name'); ?></title>
		<?php wp_enqueue_script(“jquery”); ?>
		<?php wp_head(); ?>
	</head>
<body <?php body_class(); ?>>

<div class="container-fluid">

	<!-- site header -->
	<header class="site-header">
		<h1>
			<a href="<?php bloginfo("url")?>"><img class="header" src="<?php header_image(); ?>" height="<?php echo get_custom_header()->height; ?>" width="<?php echo get_custom_header()->width; ?>" alt="Main photo" /></a></h1>
			<a href="<?php echo home_url(); ?>"><?php bloginfo('name'); ?></a>
		<h5><?php bloginfo('description'); ?></h5>
			<nav id="main-nav"><!-- ***** Header Navigation ***** -->
				<?php
					$args = array( 'theme_location' => 'primary' );
				?>
				 <?php
		            	wp_nav_menu( $args);
		        ?>
			</nav>
	</header><!-- /site header -->