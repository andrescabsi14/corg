$(document).ready(function(){

	var owl_nosotros = $("#owl_nosotros"); // save reference to variable
	owl_nosotros.owlCarousel({
		items: 1,
    	navigation : true,
    	navigationText: ["<",">"],
    	pagination: true,
    	paginationNumbers: true,
    	addClassActive: true,
	});
	var totalSlides = $("#owl_nosotros .owl-pagination .owl-page").length;
	//console.log(totalSlides);
	$("#owl_nosotros .owl-pagination").append('<div class="total_Slide"> - '+ totalSlides +'</div>');
});//End doc ready