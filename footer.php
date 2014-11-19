<div class="clear-fix"></div>
	<footer class="container-fluid site-footer">
		<div class="row-fluid">
			<div class="col-md-4 col-md-offset-4">
				<ul>
				<li><h5>The National School of Academic Equitation</h5></li>
				<li>11901 215th Place SE</li>
				<li>Snohomish, WA 98296</li>
				<li>nsae@classical-equitation.com</li>
				</ul>
			</div>
		</div>

	<div class="row-fluid"> 
		<div class="col-md-12">
			<nav class="site-nav-foot"> <!-- Footer Navigation -->
				<?php
				$args = array( 'theme_location' => 'footer' );
				?>
				<?php wp_nav_menu( $args ); ?>
			</nav>
			<p><?php bloginfo('name'); ?> - &copy; <?php echo date('Y'); ?></p>
		</div>
	</div>

	</footer>

</div><!-- container -->

<script src="//localhost:35729/livereload.js"></script>
</body>
</html>