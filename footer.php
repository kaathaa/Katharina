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
			jQuery('#menu').slicknav({
				label: '',
				closeOnClick: 'true',
			});
		});
	</script>
	
	<script>
		jQuery(document).scroll(function(){
			jQuery('#menu, .slicknav_menu').addClass("animated slideInDown");
		});
	</script>
	
	
	
	<script>
	jQuery(window).scroll(function() {
		if (jQuery(this).scrollTop()) {
				jQuery('#toTop').fadeIn();
			} else {
				jQuery('#toTop').fadeOut();
			}

		var menuHeight = jQuery( '.menu-hauptnavigation-container' ).height();
		var acutalPage = '';
		var actualWindowPosition = jQuery(window).scrollTop();
		jQuery('section').each( function( i, val ) {
			var sectionPart = jQuery( this );
			var sectionID = sectionPart.attr( 'id' );

			if( sectionPart.offset().top < ( actualWindowPosition + menuHeight ) ) {
			  acutalPage = sectionID;
			}
		});
		  
		var pushUrl = '';
		if( acutalPage != '' ) {
			pushUrl = '#' + acutalPage;
		}
		  
			window.history.pushState(acutalPage, 'Titel', pushUrl);
		});		
	</script>
	


	
	
	
<?php wp_footer();?>
</body>
</html>


