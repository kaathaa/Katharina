	<footer>
		<div class="container">
			<div class="row">
				<div class="nine columns">
					<p>text</p>					
				</div>
				<div class="three columns">
					<nav>
						<?php 
						$args= array(
							'theme_location' => 'footernav',
							'container' => 'nav',
						);
						wp_nav_menu($args);
						?>
					</nav>
				</div>
			</div>
			<i id="toTop" class="fa fa-arrow-circle-up fa-4x" aria-hidden="true"></i>
		</div>
	</footer>
	
	

	
	<script>
		jQuery(function(){
			jQuery('#menu').slicknav();
		});
	</script>
	
	<script>
		jQuery(document).scroll(function(){
			jQuery('#menu').addClass("animated slideInDown");
		});
	</script>
	
	
	<script>
		jQuery(window).scroll(function() {
			if (jQuery(this).scrollTop()) {
				jQuery('#toTop').fadeIn();
			} else {
				jQuery('#toTop').fadeOut();
			}
		});

		jQuery("#toTop").click(function () {
		   jQuery("html, body").animate({scrollTop: 0}, 1000);
		});
	</script>

	
	
	
<?php wp_footer();?>
</body>
</html>


