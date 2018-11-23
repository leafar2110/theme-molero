	<div class="text-contact">
		<h3><strong>TESTIMONIOS</strong></h3>
		<p> Lo que nuestros clientes opinan</p>
	</div>
	<div class="">
		<div class="opinion">
			<?php $argsBanner = array( 'post_type' => 'testimonio', 
				'showposts' => 12,  );  

				$Banners = new WP_Query($argsBanner); ?>   
				<?php if ($Banners->have_posts()) : while($Banners->have_posts() ) : $Banners->the_post(); ?>  
					<?php $post_thumbnail_id = get_post_thumbnail_id( $Banners->id );  
					$url = wp_get_attachment_url( $post_thumbnail_id);?> 
					<div class="text-center content-opinion">
						<div class="centrar-grid  text-opinion">
							<p><?php the_excerpt(); ?></p>
						</div>
						<h4 class="text-center"><strong><?php the_field( 'autor' ); ?></strong></h4>
						<p><?php the_field( 'profesion' ); ?></p>
					</div>
				<?php endwhile; endif; ?>
			</div>
		</div>