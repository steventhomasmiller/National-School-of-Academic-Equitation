
<?php

	get_header();

	if (have_posts()) :
		while (have_posts()) : the_post(); ?>

		<article class="post">
			<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
			<?php the_content(); ?>
		</article>

		<?php endwhile;

		else : 
			echo '<p>No content found</p>';
		endif;
		?>

	<div class="row">
		<div class="col-md-4"><?php get_sidebar("left"); ?></div>
		<div class="col-md-4 post-feed"><h2>News</h2>

<?php 
// the query
$the_query = new WP_Query( 'category_name=news' ); ?>

<?php if ( $the_query->have_posts() ) : ?>

	<!-- pagination here -->

	<!-- the loop -->
	<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
		<div class="calendar-item"><h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
		<span class="date"><?php the_time('F jS, Y') ?></span></h4>
		<?php the_excerpt(); ?>
	<?php endwhile; ?>
	<!-- end of the loop -->

	<!-- pagination here -->

	<?php wp_reset_postdata(); ?>

<?php else : ?>
	<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
<?php endif; ?>

</div>
			
<div class="col-md-3 calendar-sidebar">
	<h2>Upcoming Events</h2>
			<?php  
// the query
$the_query = new WP_Query( 'category_name=events' ); ?>

<?php if ( $the_query->have_posts() ) : ?>

	<!-- pagination here -->

	<!-- the loop -->
	<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
		<h4><?php the_excerpt('See more', FALSE); ?> </h4>
		<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>

	<?php endwhile; ?>
	<!-- end of the loop -->

	<!-- pagination here -->

	<?php wp_reset_postdata(); ?>

<?php else : ?>
	<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
<?php endif; ?>
	</div>
	</div> 
</div>
		

<?php get_footer(); ?>


