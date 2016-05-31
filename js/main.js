jQuery(document).ready(function($) {

	//shortcut to run all the material commands from https://github.com/FezVrasta/bootstrap-material-design
	$.material.init();
	
	$('.grid').masonry({
	  // set itemSelector so .grid-sizer is not used in layout
	  itemSelector: '.grid-item'
	});
	$('ul.dropdown-menu [data-toggle=dropdown]').on('click', function(event) {
 	  // Avoid following the href location when clicking
 	  event.preventDefault();
 	  // Avoid having the menu to close when clicking
 	  event.stopPropagation();
 	  // opening the one you clicked on
 	  $(this).parent().find("ul").parent().find("li.dropdown").toggleClass('open');
 	  $(this).parent().toggleClass('open');
 	});
});