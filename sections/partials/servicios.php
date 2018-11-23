<h2 class="text-center"><strong>SERVICIOS</strong></h2>
<div class="row">
	<?php $argsBanner = array( 'post_type' => 'servicio', 
		'showposts' => 12,  );  

		$Banners = new WP_Query($argsBanner); ?>   
		<?php if ($Banners->have_posts()) : while($Banners->have_posts() ) : $Banners->the_post(); ?>  
			<?php $post_thumbnail_id = get_post_thumbnail_id( $Banners->id );  
			$url = wp_get_attachment_url( $post_thumbnail_id);?> 
			<div class="col-md-4">
				<div class="content-service">
					<div class="img-service">
						<img src="<?php echo $url; ?>" alt="" class="img-fluid">
					</div>
					<div class="text-service">
						<h3><strong><?php the_title(); ?></strong></h3>
						<div class="content-text-service">
							<p><?php echo excerpt('15'); ?></p>
						</div>
						<div class="leer-service">
							<a href="<?php the_permalink() ?>"><p><strong>SEGUIR LEYENDO</strong></p></a>
						</div>
					</div>
				</div>
			</div>
		<?php endwhile; endif; ?>
	</div>