<div class="clear-fix"></div>
<footer class="container-fluid">
<div id="footer-address">
<ul>
<li><h5>The National School of Academic Equitation</h5></li>
<li>11901 215th Place SE</li>
<li>Snohomish, WA 98296</li>
<li>nsae@classical-equitation.com</li>
</ul>
<nav class="site-nav-foot"> <!-- Footer Navigation -->
<?php
$args = array( 'theme_location' => 'footer' );
?>
<?php wp_nav_menu( $args ); ?>
</nav>
<p><?php bloginfo('name'); ?> - &copy; <?php echo date('Y'); ?></p>
</div>
</footer>
</div><!-- container -->
<script src="//localhost:35729/livereload.js"></script>
wp_footer();
</body>
</html>