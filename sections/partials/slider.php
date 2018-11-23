<div class="autoplay">
	<?php $argsBanner = array( 'post_type' => 'carrusel', 
		'showposts' => 3,  );  

		$Banners = new WP_Query($argsBanner); ?>   
		<?php if ($Banners->have_posts()) : while($Banners->have_posts() ) : $Banners->the_post(); ?>  
			<?php $post_thumbnail_id = get_post_thumbnail_id( $Banners->id );  
			$url = wp_get_attachment_url( $post_thumbnail_id);?> 
			<div><img class="img-carrusel" src="<?php echo $url; ?>" width="100%" alt="1"/></div>
		<?php endwhile; endif; ?>
	</div>