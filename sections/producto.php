<section id="producto" class="text-center section-product">
	<h2> <strong>PRODUCTOS</strong></h2>
	<div class="producto">
		<div class="capa-producto">
			<div class="content-producto">
				<p>En nuestro afán por la calidad mantenemos un importante acuerdo comercial con <strong>Cial. Navarro Hnos. S.A. </strong>que nos ofrecen todo tipo de
				recambios y materiales del más alto nivel y un servicio post-venta que nos permite ofrecerlos con las máximas garantías.</p>
				<p>Utilizamos productos de <strong>primera línea</strong>, gracias a lo cuál conseguimos una reparación de <strong>calidad</strong> que podemos <strong>garantizar</strong> en el tiempo.</p>
				<p>Ofrecemos <strong>GARANTÍA DE POR VIDA</strong> en la pintura puesto que nuestros productos y sitemas de trabajo nos lo permiten, garantizando la
				tranquilidad y satisfacción de nuestros clientes y consiguiendo alcanzar los estándares de calidad que otros no pueden ofrecer.</p>
				<p>Procuramos que todos nuestros productos sean <strong>respetuosos</strong> con el <strong>medio ambiente.</strong></p>
				<p>Nuestro objetivo es ser una referencia en el sector, por lo que apostamos por la combinación perfecta como es:</p>

				<div class="product-marcas row">
					<?php $argsBanner = array( 'post_type' => 'producto', 
						'showposts' => 3,  );  

						$Banners = new WP_Query($argsBanner); ?>   
						<?php if ($Banners->have_posts()) : while($Banners->have_posts() ) : $Banners->the_post(); ?>  
							<?php $post_thumbnail_id = get_post_thumbnail_id( $Banners->id );  
							$url = wp_get_attachment_url( $post_thumbnail_id);?> 
							<div class="col-md-4"><img src="<?php echo $url; ?>" alt="" class="img-fluid img-product"></div>
						<?php endwhile; endif; ?>
					</div>
				</div>
			</div>
		</div>
	</section>