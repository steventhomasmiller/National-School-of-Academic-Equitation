<?php
/*
Template Name: News Template
*/
get_header(); ?>

<?php 
// the query
$the_query = new WP_Query( 'category_name=news' ); ?>

<?php if ( $the_query->have_posts() ) : ?>

	<!-- pagination here -->

	<!-- the loop -->
	<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
		<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>&nbsp;
		<span class="date"><?php the_time('F jS, Y') ?></span></h3>
		<span class="excerpt"><?php the_excerpt(); ?></span>
		<hr>
	<?php endwhile; ?>
	<!-- end of the loop -->

	<!-- pagination here -->

	<?php wp_reset_postdata(); ?>

<?php else : ?>
	<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
<?php endif; ?>

<?php get_footer(); ?>