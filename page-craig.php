<?php
/*
Template Name: craig template
*/
get_header(); ?>


<div class="row-fluid">

	<div class="col-md-12 sidespacing">

		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

		<article id="post-<?php the_ID(); ?>" class="post">

		<?php the_content(); ?>
		</article>

		<?php endwhile; endif; ?>

	</div>

</div>

		<div class="row-fluid"><!-- craig page left sidebar -->
			<div class="col-md-4 column backg wht-lttr left-craig">

				<?php dynamic_sidebar('craig-left-sidebar');?>

			</div>
		</div>

<div class="row-fluid">
  <div class="col-sm-8" id="craig-row-right"><!-- slider -->
  	<img src="http://placehold.it/618x400">

			<div class="row-fluid"><!-- nested row -->

					<div class="col-md-6 col-sm-12 article-bkg" id="center-craig">
						<div><!-- craig page center sidebar -->

							<?php dynamic_sidebar( 'craig-center-sidebar' ); ?>

						</div>
					</div>

							<div class="col-md-6 col-sm-12 article-bkg" id="right-craig">
								<div><!-- craig page right sidebar -->

									<?php dynamic_sidebar( 'craig-right-sidebar' ); ?>

								</div>
							</div>


							<div class="col-md-6 col-sm-6 sidespacing article-bkg"><!--nested under row-->
	
									<?php
										$the_slug = 'radio interviews';
										$args=array(
											'post_name' => $the_slug,
											'post_type' => 'post',
											'post_status' => 'publish',
											'posts_per_page' => 1
										);
										$my_posts = get_posts( $args );
										if( $my_posts ) {
											
										}
									?>
								<h3>
									<a href="<?php echo get_permalink( $my_posts[0]->ID ); ?>"><?php echo 'Radio Interviews'; ?></a>
								</h3>
								<h4>On Denver radio, April 2nd 2008</h4>
								
								<h4>On Denver radio, July 16th 2008</h4>
								

							</div>

					<div class="col-md-6 col-sm-6 sidespacing article-bkg"><!--nested under row-->

						<?php dynamic_sidebar( 'connect-with-craig' ); ?>
						

					</div>

			</div><!-- end nested row -->

  </div>
</div>

<?php get_footer(); ?>