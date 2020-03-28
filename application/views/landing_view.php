<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<!DOCTYPE html>

<html lang="en">

<head>
	<meta charset="UTF-8">
	<title>dApp &mdash; Smart Vitae </title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta property="og:title" content="" />
	<meta property="og:image" content="" />
	<meta property="og:url" content="" />
	<meta property="og:site_name" content="" />
	<meta property="og:description" content="" />
	<meta name="twitter:title" content="" />
	<meta name="twitter:image" content="" />
	<meta name="twitter:url" content="" />
	<meta name="twitter:card" content="" />
	<link rel="stylesheet" href="assets/css/bootstrap.css">
	<link rel="stylesheet" href="assets/css/owl.carousel.css">
	<link rel="stylesheet" href="assets/css/owl.theme.default.min.css">
	<link rel="stylesheet" href="assets/css/animate.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
	<link rel="stylesheet" href="assets/css/style.css">
</head>

<body>


	<div id="page-wrap">
		<div id="fh5co-hero-wrapper">
			<nav class="container navbar navbar-expand-lg main-navbar-nav navbar-light">
				<a class="navbar-brand" href="">Smart Vitae</a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>

				<div class="collapse navbar-collapse" id="navbarSupportedContent">
					<ul class="navbar-nav nav-items-center ml-auto mr-auto">
						<li class="nav-item active">
							<a class="nav-link" href="#">dApp <span class="sr-only">(current)</span></a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#" onclick="$('#fh5co-features').goTo();return false;">Caracteristicas</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#" onclick="$('#fh5co-reviews').goTo();return false;">Comentarios</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#" onclick="$('#fh5co-download').goTo();return false;">Descarga</a>
						</li>
					</ul>

				</div>
			</nav>

			<div class="container fh5co-hero-inner">
				<h1 class="animated fadeIn wow" data-wow-delay="0.4s">Hojas de vida autentificadas</h1>
				<p class="animated fadeIn wow" data-wow-delay="0.67s">Empleadores y Capital Humano facilitando el trabajo de recursos humanos, las busquedas serán mas faciles para ambos.</p>
				<br>
				<p class="animated fadeIn wow" data-wow-delay="0.67s">Empieza Cuanto Antes:</p>

				<button class="btn btn-md download-btn-first wow fadeInLeft animated" data-wow-delay="0.85s" onclick="$('#fh5co-download').goTo();return false;">Empresa</button>
				<button class="btn btn-md features-btn-first animated fadeInLeft wow" data-wow-delay="0.95s" onclick="$('#fh5co-features').goTo();return false;">Capital Humano</button>
				<img class="fh5co-hero-smartphone animated fadeInRight wow" data-wow-delay="1s" src="assets/img/phone-image.png" alt="Smartphone">
			</div>


		</div> 

		<div class="fh5co-advantages-outer">
			<div class="container">
				<h1 class="second-title"><span class="span-perfect">Smart</span> <span class="span-features">Vitae</span></h1>
				<small>¿Como usarlo?</small>

				<div class="row fh5co-advantages-grid-columns wow animated fadeIn" data-wow-delay="0.36s">
					<div class="col-sm-12">
						<h2>Eres capital humano:</h2>
					</div>
					<div class="col-sm-4">
						<img class="grid-image" src="assets/img/icon-1.png" alt="Icon-1">
						<h1 class="grid-title">Primero:</h1>
						<p class="grid-desc fuck text-center">Registrate agrega tus datos personales</p>
					</div>

					<div class="col-sm-4">
						<img class="grid-image" src="assets/img/icon-2.png" alt="Icon-2">
						<h1 class="grid-title">Segundo:</h1>
						<p class="grid-desc fuck">Agrega las certificaciones digitales y constancias de formación.</p>
					</div>

					<div class="col-sm-4">
						<img class="grid-image" src="assets/img/icon-3.png" alt="Icon-3">
						<h1 class="grid-title">Tercero:</h1>
						<p class="grid-desc fuck">Solicita tu Validación en RRHH de la empresa </p>
					</div>


				</div>
				<div class="row fh5co-advantages-grid-columns wow animated fadeIn" data-wow-delay="0.36s">
					<div class="col-sm-12">
						<h2>Eres empleador:</h2>
					</div>
					<div class="col-sm-4">
						<img class="grid-image" src="assets/img/icon-1.png" alt="Icon-1">
						<h1 class="grid-title">Primero</h1>
						<p class="grid-desc fuck">Registra a tu empresa, a tus empleados</p>
					</div>

					<div class="col-sm-4">
						<img class="grid-image" src="assets/img/icon-4.png" alt="Icon-2">
						<h1 class="grid-title">Segundo</h1>
						<p class="grid-desc fuck"> Busca capital humano certificado. Evalua lo que opinan anteriores empleadores donde fue capital humano.</p>
					</div>

					<div class="col-sm-4">
						<img class="grid-image" src="assets/img/icon-3.png" alt="Icon-3">
						<h1 class="grid-title">Tercero</h1>
						<p class="grid-desc fuck">Publica puestos de trabajo</p>
					</div>


				</div>
			</div>
		</div>

		<div class="fh5co-slider-outer wow fadeIn" data-wow-delay="0.36s">
			<h1>Hazlo todo desde tu movil</h1>
			<small>Es muy fácil</small>
			<div class="container fh5co-slider-inner">

				<div class="owl-carousel owl-theme">

					<div class="item"><img src="assets/img/smartphone-1.png" alt=""></div>
					<div class="item"><img src="assets/img/smartphone-2.png" alt=""></div>
					<div class="item"><img src="assets/img/smartphone-3.png" alt=""></div>


				</div>

			</div>
		</div>

		<div class="curved-bg-div wow animated fadeIn" data-wow-delay="0.15s"></div>
		<div id="fh5co-features" class="fh5co-features-outer">
			<div class="container">

				<div class="row fh5co-features-grid-columns">

					<div class="col-sm-6 in-order-1 wow animated fadeInLeft" data-wow-delay="0.22s">
						<div class="col-sm-image-container">
							<img class="img-float-left" src="assets/img/smartphone-1.png" alt="smartphone-1">
							<span class="span-new" style="width:30%; background-color:black;">Block Chain</span>
							<span class="span-free" style="width:30%">Aeternity</span>
						</div>
					</div>

					<div class="col-sm-6 in-order-2 sm-6-content wow animated fadeInRight" data-wow-delay="0.22s">
						<h1>Certificate</h1>
						<p>A traves de nuestro sistema de certificación es posible validar tu hoja de vida, y que esta sea accesible en tiempo real gracias a la block chain a miles de empresas si tu lo concientes.</p>
				
					</div>

					<div class="col-sm-6 in-order-3 sm-6-content wow animated fadeInLeft" data-wow-delay="0.22s">
						<h1>Invierte en tus empleados</h1>
						<p>Los grandes no siempre fueron grandes, se formaron poco a poco que mejor manera de hacerlo que ganando reputación y fidelización de parte tu capital humano como empresa. 
							<br>¿Cuantos no quieren trabajar en google?</p>
					
					</div>

					<div class="col-sm-6 in-order-4 wow animated fadeInRight" data-wow-delay="0.22s">
						<img class="img-float-right" src="assets/img/smartphone-2.png" alt="smartphone-2">
					</div>

					<div class="col-sm-6 in-order-5 wow animated fadeInLeft" data-wow-delay="0.22s">
						<div class="col-sm-image-container">
							<img class="img-float-left" src="assets/img/smartphone-3.png" alt="smartphone-3">
							<span class="span-data" style="width:30%;height:4em; background-color:black;">Información Vitalicia</span>
							<span class="span-percent" style="width:30%;height:4em; ">100% Segura</span>
						</div>
					</div>
					<div class="col-sm-6 in-order-6 sm-6-content wow animated fadeInRight" data-wow-delay="0.22s">
						<h1>Nueva era de la información</h1>
						<p>Si estas en la block chain estas en la historia juntos podemos hacer la diferencia.</p>

					</div>




				</div> <!-- row -->


			</div>
		</div>

		<div id="fh5co-reviews" class="fh5co-reviews-outer">
			<h1>Comentarios Positivos</h1>
			<small>Envia tus comentarios a info@smartvitae.com</small>
			<div class="container fh5co-reviews-inner">
				<div class="row justify-content-center">
					<div class="col-sm-5 wow fadeIn animated" data-wow-delay="0.25s">
						<img class="float-left" src="assets/img/quotes-1.jpg" alt="Quote 1">
						<p class="testimonial-desc">Es territorio virgen el que estan explorando, les deseo mucho exito en este emprendimiento.</p>
						<small class="testimonial-author">Maria Garcia</small>
						<img class="float-right" src="assets/img/quotes-2.jpg" alt="Quote 2">
					</div>
					<div class="col-sm-5 testimonial-2 wow fadeIn animated" data-wow-delay="0.67s">
						<img class="float-left" src="assets/img/quotes-1.jpg" alt="Quote 1">
						<p class="testimonial-desc">Me encanta la idea y es posible que en el futuro sean la forma mas apropiada de conseguir trabajo acorde a tus espectativas.</p>
						<small class="testimonial-author">Feliz Fermin</small>
						<img class="float-right" src="assets/img/quotes-2.jpg" alt="Quote 2">
					</div>
				</div>

			</div>
		</div>

		<div id="fh5co-download" class="fh5co-bottom-outer">
			<div class="overlay">
				<div class="container fh5co-bottom-inner">
					<div class="row">
						<div class="col-sm-6">
							<h1>Descarga Nuestra App</h1>
							<p>Hazlo desde la libertad de tu movil con Smart Vitae</p>
							<a class="wow fadeIn animated" data-wow-delay="0.25s" href="#"><img class="app-store-btn" src="assets/img/app-store-icon.png" alt="App Store Icon"></a>
							<a class="wow fadeIn animated" data-wow-delay="0.67s" href="#"><img class="google-play-btn" src="assets/img/google-play-icon.png" alt="Google Play Icon"></a>
						</div>
					</div>
				</div>
			</div>
		</div>



		<footer class="footer-outer">
			<div class="container footer-inner">

				<div class="footer-three-grid wow fadeIn animated" data-wow-delay="0.66s">
					<div class="column-1-3">
						<h1>Smart Vitae</h1>
					</div>
					<div class="column-2-3">
						<nav class="footer-nav">
							<ul>
								<a href="#" onclick="$('#fh5co-hero-wrapper').goTo();return false;">
									<li>dApp</li>
								</a>
								<a href="#" onclick="$('#fh5co-features').goTo();return false;">
									<li>Caracteristicas</li>
								</a>
								<a href="#" onclick="$('#fh5co-reviews').goTo();return false;">
									<li>Comentarios</li>
								</a>
								<a href="#" onclick="$('#fh5co-download').goTo();return false;">
									<li class="active">Descarga</li>
								</a>
							</ul>
						</nav>
					</div>
					
				</div>

				<span class="border-bottom-footer"></span>

				<p class="copyright">&copy; Todos los Derechos Reservados <a href="#" target="_blank"> SmartVitae</a>.</p>

			</div>
		</footer>




	</div> <!-- main page wrapper -->

	<script src="assets/js/jquery.min.js"></script>
	<script src="assets/js/bootstrap.js"></script>
	<script src="assets/js/owl.carousel.js"></script>
	<script src="assets/js/wow.min.js"></script>
	<script src="assets/js/main.js"></script>
</body>

</html>