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
			<div class="col-md-4 column backg wht-lttr">

				<?php dynamic_sidebar('craig-left-sidebar');?>

			</div>

			<div class="col-md-8 column">

				<img src="http://www.equitationstage.dreamhosters.com/wp-content/uploads/2014/11/craigOnHorse.jpg">


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