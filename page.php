<?php
/*
Template Name: page template
*/
get_header(); 


if (have_posts()) :
	while (have_posts()) : the_post(); ?>

	<article class="post page">
		<h2><?php the_title(); ?></h2>
		<?php the_content(); ?>
	</article>

	<?php endwhile;

	else : 
		echo '<p>No content found</p>';
	endif; ?>


<?php
	$mypages = get_pages( array( 'child_of' => $post->ID, 'sort_column' => 'post_date', 'sort_order' => 'desc' ) );

	foreach( $mypages as $page ) {		
		$content = $page->post_content;
		if ( ! $content ) // Check for empty page
			continue;

		$content = apply_filters( 'the_content', $content );
	?>
		<h2><a href="<?php echo get_page_link( $page->ID ); ?>"><?php echo $page->post_title; ?></a></h2>
		<div class="col-md-12 sidespacing"><?php echo $content; ?></div>
	<?php
	}	
?>

<?php
get_footer();

?>