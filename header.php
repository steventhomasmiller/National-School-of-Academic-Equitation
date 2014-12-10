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


<div>
			<div class="quicklinks"> <!-- dropdown -->
                Quicklinks
                    <ul class="quickdrop">
                        <li><a href="#">Clinic Tours</a>
                        <li><a href="#">Quickpay Renewal</a>
                        <li><a href="#">Craig's Gallery</a>
                        <li><a href="#">Mary Anne's Gallery</a>
                        <li><a href="#">Comments and Testimonials</a>
                        <li><a href="#">Resources</a>
                        <li><a href="#">Foundation of Equestrian Arts</a>                       
                    </ul>
            </div><!-- end quicklinks --> 	

		<form role="search" method="get" class="search-form" action="<?php echo home_url( '/' ); ?>">		
			<label>			
				<input type="search" class="search-field" placeholder="<?php echo esc_attr_x( 'Search …', 'placeholder' ) ?>" value="<?php echo get_search_query() ?>" name="s" title="<?php echo esc_attr_x( 'Search for:', 'label' ) ?>" />
			</label>
		</form>
</div>	



</div><!-- end header max -->

	<div class="nav-wrap">
		<nav>
			<?php if (function_exists('widgetize_my_dropdown_menus')) {
				widgetize_my_dropdown_menus('primary'); } ?>						
		</nav>
	</div>

</header>

<div class="container-fluid position-rel pad-bottom tuck clearfix">