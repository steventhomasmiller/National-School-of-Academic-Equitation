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
				<a href="<?php echo get_settings('home'); ?>"><img src="http://www.equitationstage.dreamhosters.com/wp-content/uploads/2014/11/logo-transparent-black-e1416957287241.png" alt="NSAE Logo" class="logo"></a>
			</div>
		</div>

	<div class="heading">
		<h1>The National School of Academic Equitation</h1>
		<h2>Classical Horsemanship for the Modern Rider</h2>
	</div>

			<div class="quicklinks"> <!-- dropdown -->
					<ul id="quickdrop">
					    <li><a href="#" onmouseover="quicklinkopen('q1')" onmouseout="quickclosetimer()">Quicklinks</a>
					        <div id="q1" onmouseover="quickcancelclosetimer()" onmouseout="quickclosetimer()">
					        <a href="#">Clinic Tours</a>
					        <a href="#">Quickpay Renewal</a>
					        <a href="#">Craig's Gallery</a>
	<!--quicklinks-->		<a href="#">Mary Anne's Gallery</a>
					        <a href="#">Comments and Testimonials</a>
					        <a href="#">Affiliated Instructors</a>
					        <a href="#">Resources</a>
					        <a href="#">Foundation of Equestrian Arts</a>
					        <a href="#">Other Stuff</a>
					        </div>
					    </li>
					</ul>
			</div><!-- end quicklinks -->						
</div><!-- end header max -->

	<div class="nav-wrap">
		<nav>
			<?php if (function_exists('widgetize_my_dropdown_menus')) {
				widgetize_my_dropdown_menus('primary'); } ?>						
		</nav>		
	</div>

</header>

<div class="container-fluid position-rel pad-bottom tuck clearfix">