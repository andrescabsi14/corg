<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title><?php bloginfo('name'); ?> | <?php the_title(); ?></title>
	<link rel="shortcut icon" href="favicon.ico" />
	<link href="<?php bloginfo('template_directory'); ?>/stylesheets/styles.css" rel="stylesheet" type="text/css" />
	<link href="<?php bloginfo('template_directory'); ?>/stylesheets/owl.carouselv2.css" rel="stylesheet" type="text/css" />
	<script>
	  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
	  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
	  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

	  ga('create', 'UA-57852901-1', 'auto');
	  ga('send', 'pageview');

	</script>
</head>
<body <?php body_class( $class ); ?>>
	<!-- ///////////////////////////////////////////////////////////////
	MENU PPAL
	/////////////////////////////////////////////////////////////// -->
	<header>
		<div class="top_header row">
			<div class="social_nav container"> 
				<ul class="col-xs-2 pull-right">
					<?php wp_nav_menu( array( 'theme_location' => 'redes-sociales' ) ); ?>
				</ul>
			</div>
		</div>

		<div class="main_header row">
			<div class="container_main_nav container">
				<div class="container_logo col-xs-2">
					<a href="/"><div class="logo"></div></a>
				</div>
				<ul class="container_main_nav col-xs-9 pull-right">
					<?php
						$args = array(
							'post_type' => 'menu',
							'posts_per_page' => -1
						);
						$query = new WP_Query( $args );
					 ?>
					<?php if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>
						<li>
							<a href="<?php the_permalink(); ?>">
								<div clasS="img"><span style="background: url('<?php the_field( "icono" ); ?>') no-repeat center;"></span></div>
								<div class="container_nav_txt">
									<span><?php the_title(); ?></span>
								</div>
							</a>
						</li>
					<?php endwhile; ?>
					<?php else: ?>
						<p>No se encontraron menus.</p>
					<?php endif; ?>
					<?php rewind_posts(); ?><?php wp_reset_query(); ?>
				</ul>
			</div>
		</div>
	</header>
	<section class="main_content">