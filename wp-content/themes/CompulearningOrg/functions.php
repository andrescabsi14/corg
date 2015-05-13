<?php  

	add_theme_support( 'post-thumbnails' );

	function footerMenu() {
	  register_nav_menu('pie-pagina',__( 'pie-pagina' ));
	}
	add_action( 'init', 'footerMenu' );

	function socialMediaMenu() {
	  register_nav_menu('redes-sociales',__( 'redes-sociales' ));
	}
	add_action( 'init', 'socialMediaMenu' );



?>