<?php
	/*
	* Template Name: Three Column
	*/

get_header();

if (have_posts()) :
	while (have_posts()) : the_post(); ?>

	<article class="post page">
		<h2><?php the_title(); ?></h2>
		<?php the_content(); ?>
		<div class="col1of3">
	    	<?php the_block("Column 1"); ?>
		    </div>
		    <div class="col2of3">
		    	<?php the_block("Column 2"); ?>
		    </div>
		    <div class="col3of3">
		    	<?php the_block("Column 3"); ?>
		    </div>

			</article>
			
	<?php endwhile;

	else : 
		echo '<p>No content found</p>';
	endif;

get_footer();

?>