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
		</div>
	</footer>
	

	
	<script>
		jQuery(function(){
			jQuery('#menu').slicknav();
		});
	</script>
	
	
	
<?php wp_footer();?>
</body>
</html>


