<div class="blank-divider"></div>
<footer class="container-fluid">

	<div id="footer-address">
		<ul>
			<li><h5>The National School of Academic Equitation</h5></li>
			<li>11901 215th Place SE</li>
			<li>Snohomish, WA 98296</li>
			<li>nsae@classical-equitation.com</li>
		</ul>


				<nav class="site-nav-foot">    <!-- Footer Navigation -->
					<?php
						$args = array( 'theme_location' => 'footer' );
						?>
					<?php wp_nav_menu( $args ); ?>
				</nav>
					<p><?php bloginfo('name'); ?> - &copy; <?php echo date('Y'); ?></p>


	</div>	

	<!--<div class="row">
    <div class="col-md-2">Home</div>
    <div class="col-md-2">Craig Stevens</div>
    <div class="col-md-2">Mary Anne Campbell</div>
    <div class="col-md-2">Instruction</div>
    <div class="col-md-2">Catalog</div>
    <div class="col-md-2">Clinic Tours</div>
    </div>-->

		
	</footer>

</div><!-- container -->

<?php wp_footer(); ?>


<script src="//localhost:35729/livereload.js"></script>
</body>
</html>