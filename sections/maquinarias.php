<section id="maquinarias" class="maquinarias container">
	<div class="titulo-maqui text-center">
		<h4><strong>MAQUINARIAS DE ÚLTIMA GENERACIÓN</strong></h4>
	</div>

	<div class="row maquinaria">
		<?php $argsBanner = array( 'post_type' => 'maquinarias', 
			'showposts' => 12,  );  

			$Banners = new WP_Query($argsBanner); ?>   
			<?php if ($Banners->have_posts()) : while($Banners->have_posts() ) : $Banners->the_post(); ?>  
				<?php $post_thumbnail_id = get_post_thumbnail_id( $Banners->id );  
				$url = wp_get_attachment_url( $post_thumbnail_id);?> 
				<div class="separador-maqui">
					<div class="content-card-maqui">
						<div class="content-img-maqui">
							<img class="img-carrusel img-fluid" src="<?php echo $url; ?>" width="100%" alt="3"/>
						</div>
						<div class="content-text-maqui text-center">
							<div class="content-icon"><i class="fa fa-<?php the_field( 'icono' ); ?>"></i></div>
							<h5><?php the_title(); ?></h5>
							<div class="content-info">
								<p><?php the_excerpt(); ?></p>		
							</div>

						</div>
					</div>
				</div>
			<?php endwhile; endif; ?>

		</div>
		<div class="container">
			<div class="row content-border ">
				<div class="col-md-12 linea-separador">
					<div class="content-linea"><i class="fa fa-gears icon-separador"></i></div>
				</div>
			</div>
			
		</div>
	</section>