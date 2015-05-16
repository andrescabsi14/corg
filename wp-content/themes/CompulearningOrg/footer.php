	</section>

	<!-- ///////////////////////////////////////////////////////////////
	FOOTER
	/////////////////////////////////////////////////////////////// -->
	<footer class="footer">
		<section class="container">
			<div class="container_info col-xs-4">
				<?php
					$args = array(
						'post_type' => 'contenidos',
						'name' => 'footer-informacion'
					);
					$query = new WP_Query( $args );
				 ?>
				<?php if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>
					<?php the_content(); ?>
				<?php endwhile; ?>
				<?php else: ?>
				<?php endif; ?>
				<?php rewind_posts(); ?><?php wp_reset_query(); ?>	
			</div>
			<div class="container_bottom_nav col-xs-8">
				<ul>
				<?php
					$args = array(
						'post_type' => 'menu',
						'posts_per_page' => -1
					);
					$query = new WP_Query( $args );
				 ?>
				<?php if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>
					
					<li>
						<a href="<?php the_field('link'); ?>"><?php the_title(); ?></a>
					</li>
				<?php endwhile; ?>
				<?php else: ?>
					<p>No se encontraron menus.</p>
				<?php endif; ?>
				<?php rewind_posts(); ?><?php wp_reset_query(); ?>
				</ul>
			</div>

			
			<div class="container_credits col-xs-12 text-right">
				<a target="_blank" href="http://www.innov.com.co">powered by <strong>INNOV</strong></a>
			</div>
		</section>
	</footer>
	<script src="<?php bloginfo('template_directory'); ?>/js/jquery-2.1.1.min.js"></script>
	<script src="<?php bloginfo('template_directory'); ?>/js/owl.carousel_v2.min.js"></script>
	<script src="<?php bloginfo('template_directory'); ?>/js/bootstrap.min.js"></script>
	<script src="<?php bloginfo('template_directory'); ?>/js/index.js"></script>
</body>
</html>

