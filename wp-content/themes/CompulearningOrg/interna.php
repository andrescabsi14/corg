<?php
/*
Template Name: Interna
*/

?>

<?php get_header(); ?>
<?php if( have_posts() ) the_post(); ?>
<section class="main-container inner">
	<section class="main-image <?php the_field( "texto" ); ?>">
		<figure style="background: url('<?php the_field( "imagen_principal" ); ?>') no-repeat center center; background-size: cover;">
			<div class="wrapcont darken">
				<h1><?php the_title(); ?></h1>
				<h4><?php the_field( "subtitulo" ); ?></h4>
			</div>
		</figure>
	</section>

	<section class="main-content wrapcont content">
		<div class="content">
			<?php the_content(); ?>
		</div>
	</section>
</section>
<?php get_footer(); ?>