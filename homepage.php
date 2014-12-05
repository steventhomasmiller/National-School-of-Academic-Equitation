
<?php

/*
Template Name: Home Page
*/

	get_header();?>

	<div class="row-fluid">
			<div class="col-md-12 home-gallery"><?php echo do_shortcode('[wonderplugin_slider id="2"]'); ?></div> <!-- Insert gallery code here -->

	<div class="row">
		<div class="col-md-4">
			<?php get_sidebar("left"); ?></div>
		<div class="col-md-4">
			<div class="post-feed">
			<h2>News</h2>

<?php 
// the query
$the_query = new WP_Query( 'category_name=news' ); ?>

<?php if ( $the_query->have_posts() ) : ?>

	<!-- pagination here -->

	<!-- the loop -->
	<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
		<h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
		<span class="date"><?php the_time('F jS, Y') ?></span></h4>
		<span class="excerpt"><?php the_excerpt(); ?></span>
	<?php endwhile; ?>
	<!-- end of the loop -->

	<!-- pagination here -->

	<?php wp_reset_postdata(); ?>

<?php else : ?>
	<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
<?php endif; ?>

</div>
</div>
			
<div class="col-md-4">
	<div class="calendar-sidebar">
	 <!-- Pay attention to this!!! -->
		<h2>Upcoming Events</h2>
		<?php  
// the query
$the_query = new WP_Query( array(
	"category_name" => "events",
	"post_status" => array( "published", "future" )
) ); ?>

<?php if ( $the_query->have_posts() ) : ?>

	<!-- pagination here -->

	<!-- the loop -->
	<?php while ( $the_query->have_posts() ) : $the_query->the_post(); 
	$eventDate = get_post_meta( get_the_id(), "Event Date", true );
	?>
		<div class="calendar-item"><h4><?php echo $eventDate; ?> </h4>
		<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></div>

	<?php endwhile; ?>
	<!-- end of the loop -->

	<!-- pagination here -->

	<?php wp_reset_postdata(); ?>

<?php else : ?>
	<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
<?php endif; ?>
<?php get_sidebar("right"); ?>
	
	</div>
	</div>
	</div>
	</div> 
</div>
		

<?php get_footer(); ?>


