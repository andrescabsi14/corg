$(document).ready(function(){
	mainSlider();
	owl_testimonial();
	socialMenu();
});//End doc ready


// Main Slider
function mainSlider(){


	//SLIDER 1
	$('#carousel-example-generic').carousel({
		interval: 10000
	});

		$('.carousel-indicators li').click(function(){
			$('#carousel-example-generic').carousel('pause');
		});


		//URL HASH
		var url = document.location.toString();
		if (url.match('#')) {
		    // Clear active item
		    $('#carousel-example-generic .carousel-inner .item.active').removeClass('active');
		    $('#carousel-example-generic .carousel-indicators li.active').removeClass('active');

		    // Activate item number #hash
		    $('.carousel-inner div:nth-child(' + url.split('#')[1] + ')').addClass('active');
		    $('.carousel-indicators li:nth-child(' + url.split('#')[1] + ')').addClass('active');
		}

		$('#carousel-example-generic').bind('slid', function (e) {
		    // Update location based on slide (index is 0-based)
		    window.location.hash = "#"+ parseInt($('#carousel-example-generic .carousel-inner .item.active').index()+1);
		});


}
// Navigation Events
function owl_testimonial(){
    $('#testimonials_slider').owlCarousel({
    	items:1,
	    loop:true,
	    margin:10,
	    autoplay: true,
	    nav: false,
	    dots: true,
	    autoplayTimeout: 10000,
	});

}

function socialMenu(){
	$('header .top_header .social_nav .menu-redes-sociales-container ul li.menu-item:nth-child(1) a').html('<span class="linkedin_small pull-right"></span>');
	$('header .top_header .social_nav .menu-redes-sociales-container ul li.menu-item:nth-child(2) a').html('<span class="twitter_small pull-right"></span>');
	$('header .top_header .social_nav .menu-redes-sociales-container ul li.menu-item:nth-child(3) a').html('<span class="facebook_small pull-right"></span>');
	$('header .top_header .social_nav .menu-redes-sociales-container ul li a').attr('target', '_blank');
}



