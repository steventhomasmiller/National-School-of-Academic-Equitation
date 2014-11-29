<?php

/*
Template Name: single page template
*/

get_header(); ?>


<div class="container-fluid">
	<div class="row-fluid clearfix">
		<div class="col-md-12 column sidespacing">

					<?php
					if (have_posts()) :
					while (have_posts()) : the_post(); ?>

					<article class="post page">
					<h2><?php the_title(); ?></h2>
					<?php the_content(); ?>
					</article>

					<?php endwhile;

					else : 
					echo '<p>No content found</p>';
					endif;?>


		</div>
	</div>
</div>






<?php
get_footer();

?>