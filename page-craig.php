<?php

/*
Template Name: craig template
*/


get_header(); ?>

<div class="row-fluid">

	<div class="col-md-12">
		<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
			<?php
				// $ID = 68;
				
				$my_id = 62;
				$post_id_62 = get_post($my_id);
				$content = $post_id_62->post_content;
				$content = apply_filters('the_content', $content);
				$content = str_replace(']]>', ']]>', $content);
				echo $content;
			?>
	</div>

</div>


		<div class="row-fluid">
			<div class="col-md-4 column backg wht-lttr">

				<?php dynamic_sidebar('craig-left-sidebar');?>

			</div>

			<div class="col-md-8 column">

				<?php echo do_shortcode('[wonderplugin_slider id="1"]'); ?>


			</div>
		</div>

				<div class="row-fluid">

					<div class="col-md-4">

						<div class="gap-maker-1 article-bkg">

							<?php dynamic_sidebar( 'craig-center-sidebar' ); ?>

						</div>

					</div>

					<div class="col-md-4">

						<div class="gap-maker-2 article-bkg">

							<?php dynamic_sidebar( 'craig-right-sidebar' ); ?>

						</div>

					</div>
				</div>




<?php

get_footer();

?>