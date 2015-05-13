<?php
/*
Template Name: Contáctenos
*/

?>

<?php get_header(); ?>
<?php if( have_posts() ) the_post(); ?>
<section class="main-container contactenos">
	<section class="main-content wrapcont">
		<h1 class="line">Contáctenos</h1>
		<article class="container_slider_contactenos">
			<h4>Visítenos</h4>
			<!-- Slider -->
			<div id="owl_contactenos" class="owl-carousel owl-theme">
				<div class="item"><img src="<?php the_field("indicaciones") ?>" alt="contactenos indicaciones"></div>
				<div class="item">
					<iframe width="100%" height="190" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.es/maps?f=q&amp;source=s_q&amp;hl=es-419&amp;geocode=&amp;q=Carrera+18+%23+78-40,+Bogot%C3%A1+-+Cundinamarca,+Colombia&amp;aq=0&amp;oq=Carrera+18+%23+78-40&amp;sll=4.665399,-74.059669&amp;sspn=0.001516,0.002642&amp;g=4.665452,-74.059702&amp;ie=UTF8&amp;hq=&amp;hnear=Carrera+18+%23+78-40,+Bogot%C3%A1,+Cundinamarca,+Colombia&amp;t=m&amp;ll=4.665506,-74.059578&amp;spn=0.001935,0.004957&amp;z=17&amp;iwloc=A&amp;output=embed"></iframe>
				</div>
			</div>
			<?php the_content(); ?>
		</article>
		<article class="container_contactenos_form">
			<h4>Reciba una llamada de un consultor</h4>
			<!-- Formulario -->
			<?php if ( is_active_sidebar( 'formulario-contacto' ) ) : ?>
				<?php dynamic_sidebar( 'formulario-contacto' ); ?>
			<?php endif; ?>
		</article>
	</section>
</section>
<?php get_footer(); ?>








