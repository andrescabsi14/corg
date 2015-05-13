<?php get_header(); ?>

	<section class="main_content inner">
		<article class="container_nosotros col-xs-12">
			<div class="container">
				<h1 class="col-xs-12"><?php the_title(); ?></h1>
				<div class="row">
					<article class="container_slider_nosotros col-xs-6">
						<div id="owl_nosotros" class="owl-carousel owl-theme">
							<?php
								$args = array(
									'post_type' => 'slide_nosotros',
									'posts_per_page' => -1
								);
								$query = new WP_Query( $args );
							 ?>
							<?php if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>

								<div class="item">
									<?php the_post_thumbnail('full'); ?>
									<span class="image_description"><?php the_title(); ?></span>
								</div>

							<?php endwhile; ?>
							<?php else: ?>
								<p>No se encontraron menus.</p>
							<?php endif; ?>
							<?php rewind_posts(); ?><?php wp_reset_query(); ?>

						</div>
					</article>
					<article class="container_nosotros col-xs-6">
						<?php the_content(); ?>
					</article>
				</div>
			</div>
		</article>
	</section>
<?php get_footer(); ?>