jQuery(document).ready(function($) {

	//shortcut to run all the material commands from https://github.com/FezVrasta/bootstrap-material-design
	$.material.init();
	
	$('.grid').masonry({
	  // set itemSelector so .grid-sizer is not used in layout
	  itemSelector: '.grid-item',
	  // use element for option
	  //columnWidth: '.grid-sizer',
	  // percentPosition: true,
	  // gutter: 10,
	  // fitWidth: true,
	  // columnWidth: 120
	});

});