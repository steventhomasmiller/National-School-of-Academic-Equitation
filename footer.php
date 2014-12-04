<div class="clear-fix"></div>

</div><!-- container -->

<div class="container-fluid backg footer list-style-none">

		<div class="clearfix">
			
				<p class="center"><a href="<?php home_url(); ?>"><img src="http://www.equitationstage.dreamhosters.com/wp-content/uploads/2014/11/logo-transparent-white-e1416545052273.png"></a></p>
			
		</div>


				  <h3 class="lttr">The National School of Academic Equitation</h3>
				  <p class="center">11901 215th Place S.E.<br>
				  Snohomish, WA 98296<br>
				  (360) 668-5242<br>
				  <a href="mailto:nsae@classical-equitation.com">nsae@classical-equitation.com</p></a>
				  <br />


				<div class="row-fluid widget-title-hidden footer-font pad-fix">
							<div class="col-md-2 footer-1 footer-menu">
									<?php dynamic_sidebar('footer-1'); ?>
							</div>
								
							<div class="col-md-2 footer-2 footer-menu">
									<?php dynamic_sidebar('footer-2'); ?>
							</div>
								
							<div class="col-md-2 footer-3 footer-menu">
									<?php dynamic_sidebar('footer-3'); ?>
							</div>
								
							<div class="col-md-2 footer-4 footer-menu">
									<?php dynamic_sidebar('footer-4'); ?>
							</div>
								
							<div class="col-md-2 footer-5 footer-menu">
									<?php dynamic_sidebar('footer-5'); ?>
							</div>
								
							<div class="col-md-2 footer-6 footer-menu">
									<?php dynamic_sidebar('footer-6'); ?>
							</div>
				</div><!--   ~~~~ end footer row 1 ~~~~ -->
		<div class="row-fluid">
			<div class="col-md-12 col-xs-1 text-small lttr">
				<p><?php bloginfo('name'); ?> - &copy; <?php echo date('Y'); ?> all rights reserved. Site created by (credits here).</p>
			</div>
		</div>
</div>

<script src="//localhost:35729/livereload.js"></script>
		<script type="text/javascript">	
		var timeout	    = 400;
		var closetimer	= 0;
		var listitem	= 0;

		function quicklinkopen(id)
		{	
			quickcancelclosetimer();
			if(listitem) listitem.style.visibility = 'hidden';
			listitem = document.getElementById(id);
			listitem.style.visibility = 'visible';
		}
			function quickclose()
			{
				if(listitem) listitem.style.visibility = 'hidden';
			}
		function quickclosetimer()
		{
			closetimer = window.setTimeout(quickclose, timeout);
		}
			function quickcancelclosetimer()
			{
				if(closetimer)
				{
					window.clearTimeout(closetimer);
					closetimer = null;
				}
			}
		document.onclick = quickclose; 
		</script>
</body>
</html>