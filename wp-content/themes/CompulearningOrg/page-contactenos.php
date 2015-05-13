<?php get_header(); ?>
<?php if( have_posts() ) the_post(); ?>
	<section class="main_content inner">
		<article class="container_contactenos col-xs-12">
			<div class="container">
				<h1 class="col-xs-12"><?php the_title(); ?></h1>
				<div class="row">
					<article class="container_slider_contactenos col-xs-6">
						<h3>Visítenos</h3>
						<!-- Slider -->
						<div id="owl_contactenos" class="owl-carousel owl-theme">
							<div class="item"><img src="<?php the_field('indicaciones'); ?>" alt="contactenos indicaciones"></div>
							<div class="item">
								<iframe width="470" height="190" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.es/maps?f=q&amp;source=s_q&amp;hl=es-419&amp;geocode=&amp;q=Carrera+18+%23+78-40,+Bogot%C3%A1+-+Cundinamarca,+Colombia&amp;aq=0&amp;oq=Carrera+18+%23+78-40&amp;sll=4.665399,-74.059669&amp;sspn=0.001516,0.002642&amp;g=4.665452,-74.059702&amp;ie=UTF8&amp;hq=&amp;hnear=Carrera+18+%23+78-40,+Bogot%C3%A1,+Cundinamarca,+Colombia&amp;t=m&amp;ll=4.665506,-74.059578&amp;spn=0.001935,0.004957&amp;z=17&amp;iwloc=A&amp;output=embed"></iframe>
							</div>
						</div>
						<?php the_content(); ?>
					</article>
					<article class="container_contactenos_form col-xs-6">
						
						<?php if ( is_active_sidebar( 'formulario-contacto' ) ) : ?>
							<?php dynamic_sidebar( 'formulario-contacto' ); ?>
						<?php endif; ?>

					</article>
				</div>
			</div>
		</article>
	</section>
<?php get_footer(); ?>

