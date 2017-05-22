jQuery(document).ready(function() {
	
	jQuery('.dynRoll').addClass("bt_hidden").viewportChecker({
		classToAdd: 'bt_visible animated rollIn', 
		offset: 100, 
		repeat: true, 
		callbackFunction: function(elem, action){},
		scrollHorizontal: false 
	});
	jQuery('.dynZoomIn').addClass("bt_hidden").viewportChecker({
		classToAdd: 'bt_visible animated zoomIn', 
		offset: 100, 
		repeat: true, 
		callbackFunction: function(elem, action){},
		scrollHorizontal: false 
	});	
	jQuery('.dynBounceInUp').addClass("bt_hidden").viewportChecker({
		classToAdd: 'bt_visible animated bounceInUp', 
		offset: 100, 		
		repeat: true, 		
		callbackFunction: function(elem, action){},		
		scrollHorizontal: false 	});		


	



		jQuery(function(){
			jQuery('#menu').slicknav({
				label: '',
				closeOnClick:true
			});
		});


		
		jQuery(document).scroll(function(){
			jQuery('#menu, .slicknav_menu').addClass("animated slideInDown");
		});
	
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


});	





