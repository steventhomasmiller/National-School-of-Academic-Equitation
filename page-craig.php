<?php

/*
Template Name: craig template
*/


get_header(); ?>

<div class="row-fluid">
				<div class="col-md-12 pad-fix">

				<?php
					$my_id = 14;
					$post_id_14 = get_post($my_id);
					$content = $post_id_14->post_content;
					$content = apply_filters('the_content', $content);
					$content = str_replace(']]>', ']]>', $content);
					echo $content;
				?>

				</div>


</div>

<div class="clear-fix"></div>

<div class="row-fluid">

<div class="col-md-4 col-sm-4 pad-fix2 backg"><?php get_sidebar('craig-left-sidebar'); ?></div>

	

		
		<div class="col-sm-8">

		<?php echo do_shortcode('[wonderplugin_slider id="1"]'); ?>

		<div class="row-fluid"><!-- ************ nested column ************** -->

			<div class="col-sm-6 pad-fix"><p>left content</p></div>
			<div class="col-sm-6 pad-fix"><p>right content</p></div>

		</div>
		</div>

</div>


<?php

get_footer();

?>