<?php
/*
Template Name: Compra curso
*/

?>
<?php get_header(); ?>
	<!-- ///////////////////////////////////////////////////////////////
	CONTENIDO
	/////////////////////////////////////////////////////////////// -->
	<section class="main_content inner">
		<article class="container_compra_curso col-xs-12">
			<div class="container">
				<h1 class="col-xs-12"><?php the_title(); ?></h1>
				<div class="row">
					<article class="col-xs-5">
						<h3>Pago en efectivo</h3>
						<p>Si desea efectuar el pago en efectivo, puede hacerlo por medio de alguna de las siguientes opciones:</p>
						<p>• Consignar en DAVIVIENDA, cuenta de ahorros empresarial No 006900673275 y enviar un correo a info@compulearning.edu.co con el número de la consignación. (parte superior derecha del formato Davivienda).</p>
						<p>• Asistir a nuestras instalaciones en Bogotá en la Cra. 18 No. 78-40 Of. 403</p>
						<a class="btn_exito" href="/contactenos/">Ver Mapa</a>
					</article>
					<article class=" container_form col-xs-7">
						<h3>Pago ONLINE</h3>
						<!-- ///////////////////////////////////////////////////////////////
						BTN BASICO
						/////////////////////////////////////////////////////////////// -->
						<div class="purchaseBtn">
							<?php the_field( "codigo_boton_de_compra" ); ?>
						</div>
						<!--end_form-->
					</article><!--end_container_form-->
				</div>
			</div>
		</article>
	</section>
<?php get_footer(); ?>
	