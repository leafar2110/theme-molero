	<div id="equipo-humano" class="row">
		<?php $argsBanner = array( 'post_type' => 'equipo', 
			'showposts' => 6,  );  

			$Banners = new WP_Query($argsBanner); ?>   
			<?php if ($Banners->have_posts()) : while($Banners->have_posts() ) : $Banners->the_post(); ?>  
				<?php $post_thumbnail_id = get_post_thumbnail_id( $Banners->id );  
				$url = wp_get_attachment_url( $post_thumbnail_id);?> 
				<div class="col-md-6">
					<div class="content-person">
						<div class="content-img-person">
							<?php $imagen = get_field( 'imagen' ); ?>
							<?php if ( $imagen ) { ?>
								<img src="<?php echo $imagen['url']; ?>" alt="<?php echo $imagen['alt']; ?>"class="img-fluid" />
							<?php } ?>
						</div>
						<div class="text-person">
							<h3><strong><?php the_field( 'autor' ); ?></strong></h3>
							<p><?php the_field( 'profesion' ); ?></p>
						</div>
					</div>
				</div>
			<?php endwhile; endif; ?>
		</div>