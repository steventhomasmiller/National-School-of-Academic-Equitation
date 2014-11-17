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

				<!-- **************** placed this code outside of our work area until i get it working properly *********** -->

							<nav class="navbar navbar-default" role="navigation"><!-- code used from twittem/wp-bootstrap-navwalker in github-->
							  <div class="container-fluid">
							    <!-- Brand and toggle get grouped for better mobile display -->
							    <div class="navbar-header">
							      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
							        <span class="sr-only">Toggle navigation</span>
							        <span class="icon-bar"></span>
							        <span class="icon-bar"></span>
							        <span class="icon-bar"></span>
							      </button>
							      <a class="navbar-brand" href="<?php echo home_url(); ?>">
							                <?php bloginfo('name'); ?>
							            </a>
							    </div>

							        <?php
							            wp_nav_menu( array(
							                'menu'              => 'primary',
							                'theme_location'    => 'primary',
							                'depth'             => 2,
							                'container'         => 'div',
							                'container_class'   => 'collapse navbar-collapse',
							        		'container_id'      => 'bs-example-navbar-collapse-1',
							                'menu_class'        => 'nav navbar-nav',
							                'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
							                'walker'            => new wp_bootstrap_navwalker())
							            );
							        ?>
							    </div>
							</nav>
				<!-- ************************** end of nav menu project code ************************** -->
<hr>

<div class="container-fluid">

	<!-- site header -->
	<header class="site-header">
		<h1>
			<a href="<?php bloginfo("url")?>"><img class="header" src="<?php header_image(); ?>" height="<?php echo get_custom_header()->height; ?>" width="<?php echo get_custom_header()->width; ?>" alt="Main photo" /></a></h1>
			<a href="<?php echo home_url(); ?>"><?php bloginfo('name'); ?></a>
		<h5><?php bloginfo('description'); ?></h5>
			<nav class="site-nav"><!-- ***** Header Navigation ***** -->
				<?php
					$args = array( 'theme_location' => 'primary' );
				?>
				 <?php
		            	wp_nav_menu( $args);
		        ?>
			</nav>
	</header><!-- /site header -->