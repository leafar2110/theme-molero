<footer class="footer">
	<div class="container">
		<div class="row">
			<div class="col-md-3 f-padding">
				<div class="separador-f">
					<h3>NAVEGACIÓN</h3>
					<p></p>
					
				</div>
				<div class="navegacion-f">
					<p><a href="#about">¿Quiénes somos?</a></p>
					<p><a href="#presente">Presente</a></p>
					<p><a href="#clientes">Nuestros Clientes</a></p>
					<p><a href="#equipo-humano">Equipo Humano</a></p>
					<p><a href="#about">Servicio</a></p>
					<p><a href="#instalaciones">Instalaciones</a></p>
					<p><a href="#maquinarias">Maquinarias de ultima Generacion</a></p>
					<p><a href="#producto">Producto</a></p>
					<p><a href="#software">Software</a></p>
					<p><a href="#compromiso">Nuestro Compromiso</a></p>
					<p><a href="#cliente">Contacto</a></p>

				</div>
			</div>
			<div class="col-md-3 f-padding">
				<div class="separador-f">
					<h3>REDES SOCIALES</h3>
				</div>
				<div>
					<div class=" content-social-f container">
						<div class="get-social-f">
							<div><a href=""><i class="fa fa-rss"></i></a></div>
							<div><a href=""><i class="fa fa-facebook"></i></a></div>
							<div><a href=""><i class="fa fa-twitter"></i></a></div>
							<div><a href=""><i class="fa fa-instagram"></i></a></div>
							<div><a href=""><i class="fa fa-youtube"></i></a></div>

						</div>
					</div>
				</div>
			</div>
			<div class="col-md-3 f-padding ubicacion">
				<div class="separador-f">
					<h3>NUEVAS INSTALACIONES</h3>
				</div>
				<div>
					<p>Pol. Ind. El Portal, C/ Marruecos 17, nave 3
					11408 Jerez de la Frontera (Cádiz)</p>
					<p> <strong>Tel./Fax: </strong> <br> <a href="tel:956 145 700">956 145 700</a> <br>
						<a href="tel:633 153 023 ">633 153 023 </a><br> <a href="tel:615 156 831">615 156 831</a></p>
						<p><a href="mailto:info@molerocar.com">info@molerocar.com</a> <br> <a href="mailto:www.molerocar.com">www.molerocar.com</a></p>
					</div>
				</div>
				<div class="col-md-3 f-padding">
					<div class="separador-f">
						<h3>COMENTARIOS RECIENTES</h3>
						<p></p>
					</div>
					<div>
						<?php $argsBanner = array( 'post_type' => 'testimonio', 
							'showposts' => 10,  );  

							$Banners = new WP_Query($argsBanner); ?>   
							<?php if ($Banners->have_posts()) : while($Banners->have_posts() ) : $Banners->the_post(); ?>  
								<?php $post_thumbnail_id = get_post_thumbnail_id( $Banners->id );  
								$url = wp_get_attachment_url( $post_thumbnail_id);?> 
								<p><?php the_field( 'autor' ); ?> dejó un comentario</p>
							<?php endwhile; endif; ?>
						</div>
					</div>
				</div>
			</div>
			<div class="copy">
				<p class="container"><small>© Copyright 2018</small></p>
			</div>
		</footer>


		<div class="modal fade" id="modal-subs" tabindex="-1" role="dialog" aria-labelledby="basicModal" aria-hidden="true">
			<div class="modal-dialog">
				<div id="modal-content" class="modal-content">
					<div class="modal-header text-center">
						<h1 class="">¡SUSCRíBETE!</h1>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<div class="modal-body">
						<?php es_subbox($namefield = "YES", $desc = "", $group = "Public"); ?>

						<button type="button" class="btn btn-secondary b-close" data-dismiss="modal">Cerrar</button>
					</div>

				</div>
			</div>
		</div>

		<!-- ***********************SUBIR*************************** -->
		<?php  get_template_part('sections/partials/subirAlcielo'); ?>
		<!-- ***********************END SUBIR*************************** -->
		<script type="text/javascript" src="<?php echo get_template_directory_uri();?>/assets/js/slick.min.js"></script>
		<script type="text/javascript" src="<?php echo get_template_directory_uri();?>/assets/js/jquery.min.js"></script>
		<script type="text/javascript" src="<?php echo get_template_directory_uri();?>/assets/js/bootstrap.min.js"></script>
		<script type="text/javascript" src="<?php echo get_template_directory_uri();?>/assets/js/main.js"></script>
		<script type="text/javascript" src="<?php echo get_template_directory_uri();?>/assets/js/wow.min.js"></script>
		<script type="text/javascript">
			$(document).ready(function(){
				$('.autoplay').slick({
					slidesToShow: 1,
					slidesToScroll: 1,
					autoplay: true,
					autoplaySpeed: 4000,
					infinite: true,
					fade: true,
					cssEase: 'linear',
				});
				$('.opinion').slick({
					slidesToShow: 1,
					slidesToScroll: 1,
					infinite: true,
					fade: true,
					cssEase: 'linear',
				});
				$('.autoplay-2').slick({
					slidesToShow: 3,
					slidesToScroll: 1,
					dots: true,
					autoplay: true,
					autoplaySpeed: 3000,
					infinite: true,
					responsive: [{
						breakpoint: 768,
						settings: {
							arrows: true,
							slidesToShow: 1,
						}
					}, {
						breakpoint: 480,
						settings: {
							arrows: true,
							slidesToShow: 1
						}
					}]
				});
				$('.maquinaria').slick({
					slidesToShow: 3,
					slidesToScroll: 1,
					dots: true,
			/*	autoplay: true,
			autoplaySpeed: 4000,*/
			infinite: true,
			responsive: [{
				breakpoint: 768,
				settings: {
					arrows: true,
					slidesToShow: 1,
				}
			}, {
				breakpoint: 480,
				settings: {
					arrows: true,
					slidesToShow: 1
				}
			}]
		});

			});

		</script>
		<?php wp_footer();?>
		<script>
			new WOW().init();
		</script>
	</body>
	</html>