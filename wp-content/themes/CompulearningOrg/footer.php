	</section>

	<!-- ///////////////////////////////////////////////////////////////
	FOOTER
	/////////////////////////////////////////////////////////////// -->
	<footer class="footer">
		<section class="container">
			<ul class="container_info col-xs-4">
				<li><strong>Dirección:</strong> Cra 18 N° 78 - 40 Of. 403 - Bogotá - Colombia </li>
				<li><strong>Correo Electrónico:</strong> info@compulearning.edu.co </li>
				<li><strong>Teléfonos:</strong> +571 621 9327 - 621 9303 - 621 8317 </li>
				<li><strong>Móvil:</strong> +57 312 431 3742</li>
			</ul>
			<!-- <ul class="container_bottom_nav col-xs-8">
				<li><a href="contactenos.html">CONTÁCTENOS</a></li>
				<li><a href="http://compulearning2.azurewebsites.net/certificados.php">CERTIFICADOS</a></li>
				<li><a href="http://compulearning2.azurewebsites.net/instituciones-educativas.html">INST. EDUCATIVAS</a></li>
				<li><a href="http://compulearning2.azurewebsites.net/ingresar.php">PROFESORES</a></li>
				<li><a href="http://www.compulearning.edu.co/CompulearningEduCo/cursos-presenciales-capacitacion-empresarial.html">PRESENCIALES</a></li>
				<li><a href="metodo.html">MÉTODO</a></li>
				<li><a href="nosotros.html">NOSOTROS</a></li>
			</ul> -->
			<?php wp_nav_menu( array( 'theme_location' => 'pie-pagina' ) ); ?>
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