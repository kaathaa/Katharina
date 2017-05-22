	<footer>
		<div class="container">
			<div class="row">
				<div class="eight columns">
					<?php if ( is_active_sidebar( 'footer-widget' ) ) : ?>
						<?php dynamic_sidebar( 'footer-widget' ); ?>
					<?php endif; ?>	
				</div>
				<div class="four columns">
					<nav>
						<?php 
						$args= array(
							'theme_location' => 'footernav',
						);
						wp_nav_menu($args);
						?>
					</nav>
				</div>
			</div>
			<i id="toTop" class="fa fa-arrow-circle-up fa-4x" aria-hidden="true"></i>
		</div>
	</footer>
	
	

	

	
	
	

	
<?php wp_footer();?>
</body>
</html>


