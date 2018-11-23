<section id="instalaciones" 	class="instalaciones">
	<div class="text-center titulo-instalaciones container info-equipo-1">
		<h2><strong>INSTALACIONES</strong></h2>
		<p>Conócelas</p>
	</div>
	<div class="fondo-instalaciones">
		<div class="capa ">
			<div class="text-instalaciones text-center">
				<p>Contamos aproximadamente con 500m2 de taller distribuidos entre planta baja, alta y patio. Disponemos de dos cuartos de baño, oficina y sala de reuniones.</p>
			</div>
			<div class="container">
				<div class="autoplay-2">
					<?php $argsBanner = array( 'post_type' => 'instalaciones', 
						'showposts' => 111,  );  

						$Banners = new WP_Query($argsBanner); ?>   
						<?php if ($Banners->have_posts()) : while($Banners->have_posts() ) : $Banners->the_post(); ?>  
							<?php $post_thumbnail_id = get_post_thumbnail_id( $Banners->id );  
							$url = wp_get_attachment_url( $post_thumbnail_id);?> 
							<div class="content-img-inst"><img class="img-fluid" src="<?php echo $url; ?>" alt="1"/></div>
						<?php endwhile; endif; ?>
					</div>
				</div>
			</div>
		</section>