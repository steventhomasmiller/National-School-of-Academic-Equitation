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
	<div class="logoShadow">
		<div class="logoBackground">
			<a href="<?php echo get_site_url(); ?>"><img src="http://www.equitationstage.dreamhosters.com/wp-content/uploads/2014/11/logo-transparent-black-e1416957287241.png" alt="NSAE Logo" class="logo"></a>
		</div>
	</div>

	<h1>The National School of Academic Equitation</h1>
	<h2>Classical Horsemanship for the Modern Rider</h2>
		<div class="quicklinks"> 
		<a href="#" >Quicklinks</a>  <!-- dropdown -->
		</div>
			
		<div class="nav-wrap">
			<nav>
				<?php
					if (function_exists('widgetize_my_dropdown_menus')) {
					widgetize_my_dropdown_menus('primary');
					} 
				?>
			</nav>	
		</div>	

</div><!--header max -->				
</header>

<div class="container-fluid position-rel pad-bottom clearfix">
