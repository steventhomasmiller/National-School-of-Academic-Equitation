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
					
			<div class="nav-wrap"></div> <!-- creates the full width with box shadow, tucked behind logo -->

			<div class="header-max">
				<div class="logo">
				<h1><img src="http://localhost:8888/nsae/wordpress/wp-content/uploads/2014/11/logo-header.png" alt="NSAE Logo"></h1>
				</div>
					
						<div class="heading-text">
							<h1>The National School of Academic Equitation</h1>
							<h2>Classical Horsemanship for the Modern Rider</h2>
						</div>

				<div class="quicklinks">
					<a href="#" >Quicklinks</a> <!-- dropdown -->
				</div>

				<div>
					<div class="menu-header"><!-- ***** wp nav array ***** -->
						<?php
						$args = array( 'theme_location' => 'primary' );
						?>
						<?php
						wp_nav_menu( $args);
						?>
					</div>
				</div>

			</div><!--header max -->
				
		</header>

<div class="container-fluid clear-left position-rel pad-bottom">
