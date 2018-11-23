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
						<li class="nav-item "><a class="nav-link triangulo" href=""> <span>INICIO</span></a></li>
						<li class="nav-item"><a class="nav-link triangulo" href="#about"> <span>¿QUIÉNES SOMOS?</span></a></li>
						<li class="nav-item"><a class="nav-link triangulo" href="#clientes"> <span>CLIENTE</span></a></li>
						<li class="nav-item"><a class="nav-link triangulo" href="#presente"> <span>PRESENTE</span></a></li>
						<li class="nav-item"><a class="nav-link triangulo" href="#equipo"> <span>EQUIPO</span></a></li>
						<li class="nav-item"><a class="nav-link triangulo" href="#producto"> PRODUCTO</a></li>
						<li class="nav-item nav-comp"><a class="nav-link" href="#compromiso"><strong>NUESTRO COMPROMISO</strong></a></li>
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
