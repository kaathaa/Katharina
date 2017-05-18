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
		scrollHorizontal: false 
	});
	
});