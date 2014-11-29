<?php
/*
Template Name: craig template
*/
get_header(); ?>


<div class="row-fluid">

	<div class="col-md-12">

		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

		<article id="post-<?php the_ID(); ?>" class="post">

		<h2><?php the_title(); ?></h2>
		<?php the_content(''); ?>
		</article>

		<?php endwhile; endif; ?>

	</div>

</div>

		<div class="row-fluid"><!-- craig page left sidebar -->
			<div class="col-md-4 column backg wht-lttr">

				<?php dynamic_sidebar('craig-left-sidebar');?>

			</div>
		</div>

<div class="row-fluid">
  <div class="col-sm-8" id="craig-row-right"><!-- slider -->
  	<img src="http://placehold.it/618x400">

			<div class="row-fluid"><!-- nested row -->

					<div class="col-xs-12 col-sm-6 article-bkg" id="center-craig">
						<div><!-- craig page center sidebar -->

							<?php dynamic_sidebar( 'craig-center-sidebar' ); ?>

						</div>
					</div>

							<div class="col-xs-12 col-sm-6 article-bkg" id="right-craig">
								<div><!-- craig page right sidebar -->

									<?php dynamic_sidebar( 'craig-right-sidebar' ); ?>

								</div>
							</div>


							<div class="col-md-6"><!--nested under row-->

								<p>this is stuff</p>

							</div>

					<div class="col-md-6"><!--nested under row-->

						<p>this is stuff</p>

					</div>

			</div><!-- end nested row -->

  </div>
</div>

<?php get_footer(); ?>