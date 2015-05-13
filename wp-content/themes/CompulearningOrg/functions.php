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

	/*Register our sidebars and widgetized areas.
	*****************************************************/
	function innov_widgets_init() {

		register_sidebar(array(
			'id' => 'formulario-contacto',
			'name' => 'Formulario Contácto',
			'before_widget' => ' ',
			'after_widget' => ' ',
			'before_title' => '<h4 style="display: none;">',
			'after_title' => '</h4>',
		));
	}
	add_action ( 'widgets_init', 'innov_widgets_init' );

?>