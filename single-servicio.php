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
				<a class="navbar-brand" href="<?php bloginfo('url');?>"><img src="<?php echo get_template_directory_uri();?>/assets/img/logo.jpg" class="nav-logo img-fluid"></a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
					<i class="fa fa-bars icom"></i>
				</button>

				<div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
					<ul class="navbar-nav ">
						<li class="nav-item "><a class="nav-link" href="<?php echo bloginfo('url').'/index.php'; ?>">INICIO</a></li>
						<li class="nav-item"><a class="nav-link" href="<?php echo bloginfo('url').'/#about'; ?>">¿QUIÉNES SOMOS?</a></li>
						<li class="nav-item"><a class="nav-link" href="<?php echo bloginfo('url').'/#clientes'; ?>">CLIENTE</a></li>
						<li class="nav-item"><a class="nav-link" href="<?php echo bloginfo('url').'/#presente'; ?>">PRESENTE</a></li>
						<li class="nav-item"><a class="nav-link" href="<?php echo bloginfo('url').'/#equipo'; ?>">EQUIPO</a></li>
						<li class="nav-item"><a class="nav-link" href="<?php echo bloginfo('url').'/#producto'; ?>">PRODUCTO</a></li>
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
					<div class="container"><h2>servicio</h2>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- ***********************END SECTION HOME*************************** -->


	<?php if ( have_posts() ) : the_post(); ?>
		<section class="single-servicio container">
			<div class="row">
				<div class="col-md-6 img-single">
					<img src="<?php the_post_thumbnail_url('medium');?>" alt="" class="img-fluid" >
				</div>
				<div class="col-md-6">
					<h3><strong><?php the_title(); ?></strong></h3>
					<div class="">
						<p><?php the_excerpt(); ?></p>
					</div>
				</div>
			</div>
		</section>


		<?php else : ?>
			<p><?php _e('Ups!, esta entrada no existe.'); ?></p>
		<?php endif; ?>


		<?php  get_footer(); ?>