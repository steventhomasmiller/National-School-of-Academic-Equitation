<footer class="site-footer">

	<div id="footer-address">
		<ul>
			<li><h5>The National School of Academic Equitation</h5></li>
			<li>11901 215th Place SE</li>
			<li>Snohomish, WA 98296</li>
			<li>nsae@classical-equitation.com</li>
		</ul>
	</div>

	<div class="row">
    <div class="span2">...</div>
    <div class="span2">...</div>
    <div class="span2">...</div>
    <div class="span2">...</div>
    <div class="span2">...</div>
    <div class="span2">...</div>
    </div>

		<nav class="site-nav">    <!-- Footer Navigation -->
			<?php
				$args = array( 'theme_location' => 'footer' );
				?>
			<?php wp_nav_menu( $args ); ?>
		</nav>
			<p><?php bloginfo('name'); ?> - &copy; <?php echo date('Y'); ?></p>
	</footer>

</div><!-- container -->

<?php wp_footer(); ?>


<script src="//localhost:35729/livereload.js"></script>
</body>
</html>