<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
	<title>Molero</title>


	<?php wp_head();?>
</head>
<body>
	<header class="header">
		<nav class="navbar navbar-expand-lg navbar-light nav-app">
			<div class="container container-nav">
				<a class="navbar-brand" href="<?php echo bloginfo('url').'/index.php'; ?>"><img src="<?php echo get_template_directory_uri();?>/assets/img/logo.jpg" class="nav-logo img-fluid"></a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
					<i class="fa fa-bars icom"></i>
				</button>

				<div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
					<ul class="navbar-nav ">
						<li class="nav-item "><a class="nav-link" href="<?php echo bloginfo('url').'/index.php'; ?>">INICIO</a></li>
						<li class="nav-item"><a class="nav-link" href="<?php echo bloginfo('url').'/index.php#about'; ?>">¿QUIÉNES SOMOS?</a></li>
						<li class="nav-item"><a class="nav-link" href="<?php echo bloginfo('url').'/index.php#clientes'; ?>">CLIENTE</a></li>
						<li class="nav-item"><a class="nav-link" href="<?php echo bloginfo('url').'/index.php#presente'; ?>">PRESENTE</a></li>
						<li class="nav-item"><a class="nav-link" href="<?php echo bloginfo('url').'/index.php#equipo'; ?>">EQUIPO</a></li>
						<li class="nav-item"><a class="nav-link" href="<?php echo bloginfo('url').'/index.php#producto'; ?>">PRODUCTO</a></li>
						<li class="nav-item nav-comp"><a class="nav-link" href="<?php echo bloginfo('url').'/index.php#compromiso'; ?>"><strong>NUESTRO COMPROMISO</strong></a></li>
					</ul>
					<div class="cuadro"></div>
				</div>
			</div>
		</nav>
		<div class=" content-social container">
			<div class="get-social">
				<div><a href=""><i class="fa fa-rss"></i></a></div>
				<div><a href=""><i class="fa fa-facebook"></i></a></div>
				<div><a href=""><i class="fa fa-twitter"></i></a></div>
				<div><a href=""><i class="fa fa-instagram"></i></a></div>
				<div><a href=""><i class="fa fa-youtube"></i></a></div>

			</div>
		</div>
	</header>


	<!-- ***********************SECTION HOME*************************** -->
	<section class="home-portada" >
		<div class="">
			<div class=" padre-content">

				<div class="capa-home">
					<div class="container"><h2>Equipo Humano</h2>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- ***********************END SECTION HOME*************************** -->
	<section class="humano container">
		<div class="row">
			<?php $argsBanner = array( 'post_type' => 'equipo', 
				'showposts' => 999,  );  

				$Banners = new WP_Query($argsBanner); ?>   
				<?php if ($Banners->have_posts()) : while($Banners->have_posts() ) : $Banners->the_post(); ?>  
					<?php $post_thumbnail_id = get_post_thumbnail_id( $Banners->id );  
					$url = wp_get_attachment_url( $post_thumbnail_id);?> 
					<div class="col-md-3">
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
		</section>


		<?php  get_footer(); ?>
		<?php  get_footer(); ?>