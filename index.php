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
		<div class="col-md-4"><?php get_sidebar("right"); ?></div>
		<div class="col-md-4"><?php get_sidebar("center"); ?></div>
		<div class="col-md-4"><?php get_sidebar("left"); ?></div>
	</div>

<?php get_footer(); ?>


