
<?php get_header(); ?>
<!-- ///////////////////////////////////////////////////////////////
CONTENIDO
/////////////////////////////////////////////////////////////// -->
<section class="container_slider col-xs-12">
	<div class="container">
		<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
		<!-- Indicators -->
		<ol class="carousel-indicators">
			<li data-target="#carousel-example-generic" data-slide-to="0" class="cursos active">
				<div>Cursos<span></span></div>
			</li>
			<li data-target="#carousel-example-generic" data-slide-to="1" class="basico">
				<div>Básico<span></span></div>
			</li>
			<li data-target="#carousel-example-generic" data-slide-to="2" class="graficas">
				<div>Gráficas<span></span></div>
			</li>
			<li data-target="#carousel-example-generic" data-slide-to="3" class="tablas">
				<div>Tablas Dinámicas<span></span></div>
			</li>
			<li data-target="#carousel-example-generic" data-slide-to="4" class="macros">
				<div>Macros<span></span></div>
			</li>
		</ol>

		<!-- Wrapper for slides -->
		<div id="main_courses_slider" class="carousel-inner" role="listbox">
			<!-- ///////////////////////////////////////////////////////////////
			SLIDER BIENVENIDA
			/////////////////////////////////////////////////////////////// -->
			<?php
				$args = array(
					'post_type' => 'contenidos',
					'name' => 'slide-bienvenida'
				);
				$query = new WP_Query( $args );
			 ?>
			<?php if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>
				<div class="item active" data-hash="graficas">
					<div class="descriptive_txt col-xs-7">
						<div class="slider_content_wrapper">
							<h1><?php the_field('titulo'); ?></h1>
							<h3><?php the_field('subtitulo'); ?></h3>
						</div>
					</div>
					<div class="descriptive_img col-xs-5">
						<img src="<?php the_field('imagen'); ?>" alt="">
					</div>
				</div>
			<?php endwhile; ?>
			<?php else: ?>
			<?php endif; ?>
			<?php rewind_posts(); ?><?php wp_reset_query(); ?>	
			<!-- ///////////////////////////////////////////////////////////////
			SLIDES
			/////////////////////////////////////////////////////////////// -->
			<?php
				$args = array(
					'post_type' => 'slider_inicio',
					'posts_per_page' => -1
				);
				$query = new WP_Query( $args );
			 ?>
			<?php if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>

				<div class="item" data-hash="<?php the_field('texto_boton'); ?>">
					<h2 class="col-xs-12"><?php the_title(); ?> <span><?php the_field('subtitulo') ?></span></h2>
					<div class="col-xs-8">
						<p class="price"><?php the_field('precio') ?></p>
						<p class="duracion_curso <?php the_field('texto_boton'); ?>">
							<span class="time_icon"></span>
							<strong>Duración:</strong> <?php the_field('duracion') ?>
						</p>
						<p class="video_curso <?php the_field('texto_boton'); ?>">
							<span class="video_icon"></span>
							<?php the_field('horas_video') ?>
						</p>
						<a class="demo_video" href="<?php the_field('video_demo') ?>">Ver Video Demo </a>
						<h3 class="downloads_label">Descargas sin restricciones</h3>
						<a class="downloads <?php the_field('texto_boton'); ?>" href="<?php the_field('temario') ?>">
							<span class="icon_download"></span>Temario Detallado
						</a>
						<a class="downloads <?php the_field('texto_boton'); ?>" href="<?php the_field('curso_demostracion') ?>">
							<span class="icon_download"></span>Curso Demostración
						</a>
						<a class="downloads <?php the_field('texto_boton'); ?>" href="<?php the_field('archivos_trabajo') ?>">
							<span class="icon_download"></span>Archivos de Trabajo
						</a>
					</div><!--End_left_side_col-->
					<div class="col-xs-4">
					  	<img class="product_img pull-right" src="<?php the_field('imagen_curso'); ?>" alt="">
					  	<a class="buy_btn_link pull-right" href="<?php the_field('compra_curso') ?>">
					  		<div class="buy_btn pull-right">Comprar Curso</div>
					  	</a>
					</div><!--End_right_side_col-->
				</div><!--End_tab_1-->

			<?php endwhile; ?>
			<?php else: ?>
				<p>No se encontraron menus.</p>
			<?php endif; ?>
			<?php rewind_posts(); ?><?php wp_reset_query(); ?>

		</div><!-- end_carousel_inner -->

		<!-- Controls -->
		<a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
		<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
		<span class="sr-only">Previous</span>
		</a>
		<a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
		<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
		<span class="sr-only">Next</span>
		</a>
		</div>
	</div>
</section>

		<article class="container_testimonials col-xs-12">
			<div class="container">
				<!-- Testimonial Slider-->
				<div id="testimonials_slider">
					<?php
						$args = array(
							'post_type' => 'testimonios',
							'posts_per_page' => -1
						);
						$query = new WP_Query( $args );
					 ?>
					<?php if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>

						<div class="item">
							<div class="container_image_testimonial col-xs-4">
								<a target="_blank" href="<?php the_field('link_testimonio') ?>"><img src="<?php the_field('imagen'); ?>" alt=""></a>
							</div>
							<div class="container_txt_testimonial col-xs-8">
								<h3><a target="_blank" href="https://www.youtube.com/user/elbesodelhorror"><?php the_field('nombre_nickname'); ?></a></h3>
								<p><?php the_field('testimonio'); ?></p>
							</div><!--END TESTIMONIAL-->
						</div>

					<?php endwhile; ?>
					<?php else: ?>
						<p>No se encontraron menus.</p>
					<?php endif; ?>
					<?php rewind_posts(); ?><?php wp_reset_query(); ?>

				</div><!--End slider-->
				<div class="testimonials_main_title_container">
					<h3 class="testimonials_main_title">TESTIMONIOS <span>EN YOUTUBE</span></h3>
				</div>
			</div><!--End container-->
		</article>
<?php get_footer(); ?>