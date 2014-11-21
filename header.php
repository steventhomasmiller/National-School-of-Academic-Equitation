<!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
		<title><?php bloginfo('name'); ?></title>
		<?php wp_enqueue_script(“jquery”); ?>
		<?php wp_head(); ?>
	</head>
<body <?php body_class(); ?>>

	
<header>
<div class="header-max">
<img src="http://localhost:8888/nsae/wordpress/wp-content/uploads/2014/11/logo-header.png"  alt="NSAE Logo" class="logo">

<h1>The National School of Academic Equitation</h1>
<h2>Classical Horsemanship for the Modern Rider</h2>
<div class="quicklinks"> 
<a href="#" >Quicklinks</a>  <!-- dropdown -->
</div>

		<nav id="main-nav"><!-- ***** wp nav array ***** -->
		<?php
		$args = array( 'theme_location' => 'primary' );
		?>
		<?php
		           	wp_nav_menu( $args);
		       ?>
		</nav>

</div>



</header>


<div class="container-fluid clear-left position-rel pad-bottom">
