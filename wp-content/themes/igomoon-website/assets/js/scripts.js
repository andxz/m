jQuery(document).ready(function($){

	$('.mobile-menu').mmenu({
		offCanvas: {
			position: "right",
			direction: "left"
		},
		classes: "mm-dark"
	},{
		// configuration
		classNames: {
			selected: "current-menu-item"
		},
		offCanvas: {
			pageSelector: ".site-container",
		}
	});

	$('#toggle-mobile-menu').click(function(){
		$('.mobile-menu').trigger("open.mm");
	});

});