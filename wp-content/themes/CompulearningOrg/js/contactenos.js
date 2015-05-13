$(document).ready(function(){

	var owl_contactenos = $("#owl_contactenos"); // save reference to variable
	owl_contactenos.owlCarousel({
		items: 1,
    	pagination: true,
    	paginationNumbers: true,
    	addClassActive: true,
	});

	$("#owl_contactenos .owl-pagination .owl-page").attr('id', function(i) {
			return 'slide'+(i+1);
	});
	$("#owl_contactenos #slide1 .owl-numbers").html('Indicaciones');
	$("#owl_contactenos #slide2 .owl-numbers").html('Mapa');

});//End doc ready