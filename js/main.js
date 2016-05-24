jQuery(document).ready(function($) {

	//shortcut to run all the material commands from https://github.com/FezVrasta/bootstrap-material-design
	$.material.init();
	
	$('.grid').masonry({
	  // set itemSelector so .grid-sizer is not used in layout
	  itemSelector: '.grid-item'
	});

});