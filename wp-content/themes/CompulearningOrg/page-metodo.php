
<?php get_header(); ?>
<?php if( have_posts() ) the_post(); ?>
	<section class="main_content inner">
		<article class="col-xs-12">
			<div class="container">
				<h1 class="col-xs-12 text-center"><?php the_title(); ?></h1>
				<div class="col-xs-offset-2 col-xs-8 text-center">
					<div id="owl_metodo" class="owl-carousel owl-theme">
						<?php
							$args = array(
								'post_type' => 'slider_metodo',
								'posts_per_page' => -1
							);
							$query = new WP_Query( $args );
						 ?>
						<?php if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>

							<div class="item">
								<?php the_post_thumbnail('full'); ?>
							</div>

						<?php endwhile; ?>
						<?php else: ?>
							<p>No se encontraron slides.</p>
						<?php endif; ?>
						<?php rewind_posts(); ?><?php wp_reset_query(); ?>
					</div>
				</div>
				<a class="green_link col-xs-offset-4 col-xs-4" href="<? the_field('como_descargar_e_instalar') ?>">Más sobre cómo descargar e Instalar</a>
			</div>
		</article>
	</section>
<?php get_footer(); ?>