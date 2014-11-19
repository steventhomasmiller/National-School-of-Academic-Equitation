<?php

/*
Template Name: craig template
*/


get_header(); ?>

<div class="row-fluid">
				<div class="col-md-12">

				<?php
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

	<div class="col-md-4 col-sm-4 pull-left backg wht-lttr"><?php dynamic_sidebar('craig-left-sidebar'); ?></div>
</div>
		<div class="row-fluid">
			<div class="col-md-8 col-sm-8 col-xs-12 pull-right"> <?php echo do_shortcode('[wonderplugin_slider id="1"]'); ?>
		</div>
				
					<div class="row-fluid"><!-- ************ nested column ************** -->

						<div class="col-md-4 col-sm-4 col-xs-12 pull-left article-bkg marg-top"><?php dynamic_sidebar( 'craig-center-sidebar' ); ?></div><!-- column center -->
					</div>


					<div class="row-fluid">
						<div class="col-md-4 col-sm-4 col-xs-12 pull-right article-bkg marg-top"><?php dynamic_sidebar( 'craig-right-sidebar' ); ?></div><!-- column right -->

					</div>
		</div>

</div>


<?php

get_footer();

?>