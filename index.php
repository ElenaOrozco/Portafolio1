<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/estilos.css">
	<link rel="stylesheet" type="text/css" href="font-awesome/css/font-awesome.css">
	<title>Programador Online</title>
</head>
<body>
	

	
	<nav class="navbar navbar-default navbar-fixed-top">
		<div class="container">
			<div class="navbar-header page-scroll">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target= "#menu">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>	
				</button>
				<a  class="navbar-brand page-scroll" href="index.php">
					Elena Orozco
				</a>
					
			</div>

			<div class="collapse navbar-collapse" id="menu">
				<ul class="nav navbar-nav navbar-right">
					<li class="hidden">
						<a href="index.php"></a>
					</li>
					<li>
						<a class="page-scroll" href="#services">Servicios</a>
					</li>
					<li>
						<a class="page-scroll" href="#portfolio">Portafolio</a>
					</li>
					<li>
						<a class="page-scroll" href="#about">Acerca de</a>
					</li>
					<li>
						<a class="page-scroll" href="#contact">Contacto</a>
					</li>
					
				</ul>			
			</div>
		</div>
	</nav>

	<header>
		<div class="container">
			<div class="intro-text">
				<div class="intro-lead-in">Bienvenido a mi sitio personal</div>
				<div class="intro-heading">Soy Elena Orozco</div>
				<a href="#about" class="page-scroll btn btn-xl">Más de mi</a>
			</div>
		</div>	
	</header>








	<!-- Seccion servicios -->
	<section id="services">
		<div class="container">
			
			<div class="row">
				<div class="col-lg-12 text-center">
					<h2 class="section-heading">Servicios</h2>
					<h3 class="section-subheading text-muted">Desarrollo de Software en General</h3>
				</div>
			</div>

			<div class="row text-center">
				<div class="col-md-4">
					<span class="fa-stack fa-5x">
						<i class="fa fa-circle fa-stack-2x text-primary"></i>
						<i class="fa fa-shopping-cart fa-stack-1x fa-inverse"></i>
					</span>
					<h4 class="service-heading">E-Commerce</h4>
					<p class="text-muted">Tiendas Online Prestashop</p>
				</div>

				<div class="col-md-4">
					<span class="fa-stack fa-5x">
						<i class="fa fa-circle fa-stack-2x text-primary"></i>
						<i class="fa fa-laptop fa-stack-1x fa-inverse"></i>
					</span>
					<h4 class="service-heading">Diseño Resposivo</h4>
					<p class="text-muted">Bootstrap</p>
				</div>

				<div class="col-md-4">
					<span class="fa-stack fa-5x">
						<i class="fa fa-circle fa-stack-2x text-primary"></i>
						<i class="fa fa-lock fa-stack-1x fa-inverse"></i>
					</span>
					<h4 class="service-heading">Seguridad Web</h4>
					<p class="text-muted">Bootstrap</p>
				</div>

				<div class="col-md-4">
					<span class="fa-stack fa-5x">
						<i class="fa fa-circle fa-stack-2x text-primary"></i>
						<i class="fa fa-html5 fa-stack-1x fa-inverse"></i>
						
					</span>
					<h4 class="service-heading">HTML5</h4>
					<p class="text-muted">Certificado</p>
				</div>

				<div class="col-md-4">
					<span class="fa-stack fa-5x">
						<i class="fa fa-circle fa-stack-2x text-primary"></i>
						<i class="fa fa-css3 fa-stack-1x fa-inverse"></i>
						
					</span>
					<h4 class="service-heading">CSS3</h4>
					<p class="text-muted">Certificado</p>
				</div>

				<div class="col-md-4">
					<span class="fa-stack fa-5x">
						<i class="fa fa-circle fa-stack-2x text-primary"></i>
						<i class="fa fa-database fa-stack-1x fa-inverse"></i>
						
					</span>
					<h4 class="service-heading">Bases de Datos</h4>
					<p class="text-muted">Diseño y creacion de BD</p>
			</div>
		</div>	
	</section>


	<!-- Section Portafolio -->
	<section id="portfolio" class="bg-light-gray">
		<div class="container">
			<!-- Titulos Portafolio -->
			<div class="row">
				<div class="col-lg-12 text-center">
					<h2 class="section-heading">Portafolio</h2>
					<h3 class="section-subheading text-muted">Estos son algunos de mis proyectos</h3>
				</div>
			</div><!-- Fin titulos Portafolio -->

			<!-- Fila de trabajos -->
			<div class="row">

				<!-- Trabajo 1 -->
				<div class="col-md-4 col-sm-6 portfolio-item">
					<a href="#portfolioModal1" class="portfolio-link" data-toggle="modal">
						<div class="portfolio-hover">
							<div class="portfolio-hover-content">
								<i class="fa fa-plus fa-3x"></i>
							</div>
						</div>
						<img src="img/portafolio/t1.png" alt="" class="img-responsive">
					</a>
					<div class="portfolio-caption">
						<h4>Iconos circulares</h4>
						<p class="text-muted">Diseño Grafico</p>
					</div>
				</div><!-- Fin Trabajo 1 -->

				<!-- Trabajo 2 -->
				<div class="col-md-4 col-sm-6 portfolio-item">
					<a href="#portfolioModal2" class="portfolio-link" data-toggle="modal">
						<div class="portfolio-hover">
							<div class="portfolio-hover-content">
								<i class="fa fa-plus fa-3x"></i>
							</div>
						</div>
						<img src="img/portafolio/t2.png" alt="" class="img-responsive">
					</a>
					<div class="portfolio-caption">
						<h4>Iconos circulares</h4>
						<p class="text-muted">Diseño Grafico</p>
					</div>
				</div><!-- Fin Trabajo 2 -->

				<!-- Trabajo 3 -->
				<div class="col-md-4 col-sm-6 portfolio-item">
					<a href="#portfolioModal3" class="portfolio-link" data-toggle="modal">
						<div class="portfolio-hover">
							<div class="portfolio-hover-content">
								<i class="fa fa-plus fa-3x"></i>
							</div>
						</div>
						<img src="img/portafolio/t3.png" alt="" class="img-responsive">
					</a>
					<div class="portfolio-caption">
						<h4>Iconos circulares</h4>
						<p class="text-muted">Diseño Grafico</p>
					</div>
				</div><!-- Fin Trabajo 3 -->

				<!-- Trabajo 4 -->
				<div class="col-md-4 col-sm-6 portfolio-item">
					<a href="#portfolioModal4" class="portfolio-link" data-toggle="modal">
						<div class="portfolio-hover">
							<div class="portfolio-hover-content">
								<i class="fa fa-plus fa-3x"></i>
							</div>
						</div>
						<img src="img/portafolio/t4.png" alt="" class="img-responsive">
					</a>
					<div class="portfolio-caption">
						<h4>Iconos circulares</h4>
						<p class="text-muted">Diseño Grafico</p>
					</div>

				</div><!-- Fin Trabajo 4 -->

				<!-- Trabajo 5 -->
				<div class="col-md-4 col-sm-6 portfolio-item">
					<a href="#portfolioModal5" class="portfolio-link" data-toggle="modal">
						<div class="portfolio-hover">
							<div class="portfolio-hover-content">
								<i class="fa fa-plus fa-3x"></i>
							</div>
						</div>
						<img src="img/portafolio/t5.png" alt="" class="img-responsive">
					</a>
					<div class="portfolio-caption">
						<h4>Iconos circulares</h4>
						<p class="text-muted">Diseño Grafico</p>
					</div>
				</div><!-- Fin Trabajo 5 -->

				<!-- Trabajo 6 -->
				<div class="col-md-4 col-sm-6 portfolio-item">
					<a href="#portfolioModal6" class="portfolio-link" data-toggle="modal">
						<div class="portfolio-hover">
							<div class="portfolio-hover-content">
								<i class="fa fa-plus fa-3x"></i>
							</div>
						</div>
						<img src="img/portafolio/t6.png" alt="" class="img-responsive">
					</a>
					<div class="portfolio-caption">
						<h4>Iconos circulares</h4>
						<p class="text-muted">Diseño Grafico</p>
					</div>
				</div><!-- Fin Trabajo 6 -->

	</section><!-- Fin Seccion Portafolio -->


	<!-- Seccion Sobre Mi -->
	<section class="success" id="about">
		<div class="container">
			
			<div class="row">
				<div class="col-lg-12 text-center">
					<h2 class="section-heading">Acerca de mi</h2>
					<h3 class="section-subheading text-muted">Lic. Desarrollo de Software</h3>
				</div>
			</div>

			<div class="row">
				<div class="team-member">
					<img src="img/portafolio/yo.png" alt="" class="img-responsive img-circle">
					<h4>Elena Orozco</h4>
					<p class="text-muted">Sensei Web</p>
				</div>

				<div class="col-lg-5">
					<p>
						Soy desarrollador de Software, me espacializo en diseño web, aplicaciones java y c#
					</p>
				</div>

				<div class="col-lg-5 col-lg-offset-2">
					<p>
						Me desempeño desde hace un año como Freelancer, he realizado varios proyectos en los que he puesto en practica mis habilidades
					</p>
				</div>

			</div>

		</div>
	</section><!-- Fin Seccion Sobre Mi -->

	
	<!-- Seccion Logos de Clientes -->
	<aside class="clients">
		<div class="container">
			<div class="row">
				<div class="col-md-3 col-sm-6">
					<a href="#">
						<img src="img/logos/creative-market.jpg" class="img-responsive img-centered" alt="">
					</a>
				</div>

				<div class="col-md-3 col-sm-6">
					<a href="#">
						<img src="img/logos/designmodo.jpg" class="img-responsive img-centered" alt="">
					</a>
				</div>

				<div class="col-md-3 col-sm-6">
					<a href="#">
						<img src="img/logos/creative-market.jpg" class="img-responsive img-centered" alt="">
					</a>
				</div>

				<div class="col-md-3 col-sm-6">
					<a href="#">
						<img src="img/logos/designmodo.jpg" class="img-responsive img-centered" alt="">
					</a>
				</div>
			</div>
		</div>
	</aside> <!-- Fin Seccion Logos de Clientes -->

	<!-- Seccion Contacto -->
	<section id="contact">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 text-center">
					<h2 class="section-heading">Contactame </h2>
					<h3 class="section-subheading text-muted">
						Asesorias - Dudas - Comentarios
					</h3>
				</div>
			</div>

			<div class="row">
				<div class="col-lg-12">
					<form name= "contacto" method ="POST" action="mail.php" id="contacto" onsubmit="return enviar()">
						<div class="row">

							<div class="col-md-6">
								<div class="form-group">
									<input type="text" class="form-control" placeholder="Tu nombre" id="name" required>
									<p class="help-block text-danger"></p>
								</div>

								<div class="form-group">
									<input type="email" class="form-control" placeholder="Tu email" id="email" required>
									<p class="help-block text-danger"></p>
								</div>

								<div class="form-group">
									<input type="tel" class="form-control" placeholder="Tu Teléfono" id="phone" required>
									<p class="help-block text-danger"></p>
								</div>
							</div>

							<div class="col-md-6">
								<div class="form-group">
									<textarea class="form-control" placeholder="Tu mensaje" id="message" required></textarea> 
									<p class="help-block text-danger"></p>
								</div>	
							</div>


							<div class="clear-fix"></div>
							<div class="col-lg-12 text-center">
								<div id="success"></div>
								<button type="submit" class="btn btn-xl">Enviar mensaje</button>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</section><!-- Fin Seccion Contacto -->

	<!-- Footer -->
	<footer>
		<div class="container">
			<div class="row">
				<div class="col-md-4">
					<span class="copyright">Copyright &copy; Elena Orozco 2016 </span>
				</div>

				<div class="col-md-4">
					<ul class="list-inline social-buttons">
						<li><a href="#"><i class="fa fa-twitter"></i></a></li>
						<li><a href="#"><i class="fa fa-facebook"></i></a></li>
						<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
					</ul>
				</div>

				<div class="col-md-4">
					<ul class="list-inline quicklinks">
						<li><a href="#">Politicas de privacidad</a></li>
						<li><a href="#">Terminos de uso</a></li>
					</ul>
				</div>
			</div>
		</div>
	</footer><!-- Fin Footer -->


	<!-- Portafolio Modal 1-->
	<div class="portfolio-modal modal fade" id="portfolioModal1" tabindex="-1" role="dialog" aria-hidden="true">
		<div class="modal-content">
			<div class="close-modal" data-dismiss="modal">
				<div class="lr">
					<div class="rl">
						
					</div>
				</div>
			</div>

			<div class="container">
				<div class="row">
					<div class="col-lg-8 col-lg-offset-2">
						<div class="modal-body">
							<!-- Detalles del proyecto -->
							<h2>Proyect Name</h2>
							<p class="item-intro text-muted">Lorem elit. Odit ipsam quasi accusamus commodi vel molestias saepe in, dolorem, adipisci quis placeat nulla eum veniam libero.</p>
							<img src="img/portafolio/t1.png" alt="" class="img-responsive">
							<p>Este area es para describir el proyecto 
								Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ratione corporis dolor vel maiores quasi culpa possimus debitis. Nemo vero, veritatis maxime praesentium, reiciendis fugit omnis dolorem aspernatur! Reiciendis beatae, vel.
							</p>
							<strong>Whant these icons in portafolio</strong>
							You can download <a href="#">Enlace</a>
							<ul class="list-inline">
								<li>Fecha: 23-12-15</li>
								<li>Cliente: DEFHY df</li>
								<li>Categoria: Programacion .Net</li>
							</ul>
							<button type="button" class="btn btn-primary" data-dismiss="modal">
								<i class="fa fa.times">Cerrar Proyecto</i>
							</button>
						</div>
						
					</div>
				</div>
			</div>
		</div>	
	</div><!-- Fin  Modal 1 -->

	<!-- Portafolio Modal 2-->
	<div class="portfolio-modal modal fade" id="portfolioModal2" tabindex="-1" role="dialog" aria-hidden="true">
		<div class="modal-content">
			<div class="close-modal" data-dismiss="modal">
				<div class="lr">
					<div class="rl">
						
					</div>
				</div>
			</div>

			<div class="container">
				<div class="row">
					<div class="col-lg-8 col-lg-offset-2">
						<div class="modal-body">
							<!-- Detalles del proyecto -->
							<h2>Proyect Name</h2>
							<p class="item-intro text-muted">Lorem elit. Odit ipsam quasi accusamus commodi vel molestias saepe in, dolorem, adipisci quis placeat nulla eum veniam libero.</p>
							<img src="img/portafolio/t2.png" alt="" class="img-responsive">
							<p>Este area es para describir el proyecto 
								Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ratione corporis dolor vel maiores quasi culpa possimus debitis. Nemo vero, veritatis maxime praesentium, reiciendis fugit omnis dolorem aspernatur! Reiciendis beatae, vel.
							</p>
							<strong>Whant these icons in portafolio</strong>
							You can download <a href="#">Enlace</a>
							<ul class="list-inline">
								<li>Fecha: 23-12-15</li>
								<li>Cliente: DEFHY df</li>
								<li>Categoria: Programacion .Net</li>
							</ul>
							<button type="button" class="btn btn-primary" data-dismiss="modal">
								<i class="fa fa.times">Cerrar Proyecto</i>
							</button>
						</div>
						
					</div>
				</div>
			</div>
		</div>	
	</div><!-- Fin  Modal 2 -->

	<!-- Portafolio Modal 3-->
	<div class="portfolio-modal modal fade" id="portfolioModal3" tabindex="-1" role="dialog" aria-hidden="true">
		<div class="modal-content">
			<div class="close-modal" data-dismiss="modal">
				<div class="lr">
					<div class="rl">
						
					</div>
				</div>
			</div>

			<div class="container">
				<div class="row">
					<div class="col-lg-8 col-lg-offset-2">
						<div class="modal-body">
							<!-- Detalles del proyecto -->
							<h2>Proyect Name</h2>
							<p class="item-intro text-muted">Lorem elit. Odit ipsam quasi accusamus commodi vel molestias saepe in, dolorem, adipisci quis placeat nulla eum veniam libero.</p>
							<img src="img/portafolio/t3.png" alt="" class="img-responsive">
							<p>Este area es para describir el proyecto 
								Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ratione corporis dolor vel maiores quasi culpa possimus debitis. Nemo vero, veritatis maxime praesentium, reiciendis fugit omnis dolorem aspernatur! Reiciendis beatae, vel.
							</p>
							<strong>Whant these icons in portafolio</strong>
							You can download <a href="#">Enlace</a>
							<ul class="list-inline">
								<li>Fecha: 23-12-15</li>
								<li>Cliente: DEFHY df</li>
								<li>Categoria: Programacion .Net</li>
							</ul>
							<button type="button" class="btn btn-primary" data-dismiss="modal">
								<i class="fa fa.times">Cerrar Proyecto</i>
							</button>
						</div>
						
					</div>
				</div>
			</div>
		</div>	
	</div><!-- Fin  Modal 3 -->

	<!-- Portafolio Modal 4-->
	<div class="portfolio-modal modal fade" id="portfolioModal4" tabindex="-1" role="dialog" aria-hidden="true">
		<div class="modal-content">
			<div class="close-modal" data-dismiss="modal">
				<div class="lr">
					<div class="rl">
						
					</div>
				</div>
			</div>

			<div class="container">
				<div class="row">
					<div class="col-lg-8 col-lg-offset-2">
						<div class="modal-body">
							<!-- Detalles del proyecto -->
							<h2>Proyect Name</h2>
							<p class="item-intro text-muted">Lorem elit. Odit ipsam quasi accusamus commodi vel molestias saepe in, dolorem, adipisci quis placeat nulla eum veniam libero.</p>
							<img src="img/portafolio/t4.png" alt="" class="img-responsive">
							<p>Este area es para describir el proyecto 
								Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ratione corporis dolor vel maiores quasi culpa possimus debitis. Nemo vero, veritatis maxime praesentium, reiciendis fugit omnis dolorem aspernatur! Reiciendis beatae, vel.
							</p>
							<strong>Whant these icons in portafolio</strong>
							You can download <a href="#">Enlace</a>
							<ul class="list-inline">
								<li>Fecha: 23-12-15</li>
								<li>Cliente: DEFHY df</li>
								<li>Categoria: Programacion .Net</li>
							</ul>
							<button type="button" class="btn btn-primary" data-dismiss="modal">
								<i class="fa fa.times">Cerrar Proyecto</i>
							</button>
						</div>
						
					</div>
				</div>
			</div>
		</div>	
	</div><!-- Fin  Modal 4 -->

	<!-- Portafolio Modal 5-->
	<div class="portfolio-modal modal fade" id="portfolioModal5" tabindex="-1" role="dialog" aria-hidden="true">
		<div class="modal-content">
			<div class="close-modal" data-dismiss="modal">
				<div class="lr">
					<div class="rl">
						
					</div>
				</div>
			</div>

			<div class="container">
				<div class="row">
					<div class="col-lg-8 col-lg-offset-2">
						<div class="modal-body">
							<!-- Detalles del proyecto -->
							<h2>Proyect Name</h2>
							<p class="item-intro text-muted">Lorem elit. Odit ipsam quasi accusamus commodi vel molestias saepe in, dolorem, adipisci quis placeat nulla eum veniam libero.</p>
							<img src="img/portafolio/t5.png" alt="" class="img-responsive">
							<p>Este area es para describir el proyecto 
								Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ratione corporis dolor vel maiores quasi culpa possimus debitis. Nemo vero, veritatis maxime praesentium, reiciendis fugit omnis dolorem aspernatur! Reiciendis beatae, vel.
							</p>
							<strong>Whant these icons in portafolio</strong>
							You can download <a href="#">Enlace</a>
							<ul class="list-inline">
								<li>Fecha: 23-12-15</li>
								<li>Cliente: DEFHY df</li>
								<li>Categoria: Programacion .Net</li>
							</ul>
							<button type="button" class="btn btn-primary" data-dismiss="modal">
								<i class="fa fa.times">Cerrar Proyecto</i>
							</button>
						</div>
						
					</div>
				</div>
			</div>
		</div>	
	</div><!-- Fin  Modal 5 -->

	<!-- Portafolio Modal 5-->
	<div class="portfolio-modal modal fade" id="portfolioModal6" tabindex="-1" role="dialog" aria-hidden="true">
		<div class="modal-content">
			<div class="close-modal" data-dismiss="modal">
				<div class="lr">
					<div class="rl">
						
					</div>
				</div>
			</div>

			<div class="container">
				<div class="row">
					<div class="col-lg-8 col-lg-offset-2">
						<div class="modal-body">
							<!-- Detalles del proyecto -->
							<h2>Proyect Name</h2>
							<p class="item-intro text-muted">Lorem elit. Odit ipsam quasi accusamus commodi vel molestias saepe in, dolorem, adipisci quis placeat nulla eum veniam libero.</p>
							<img src="img/portafolio/t6.png" alt="" class="img-responsive">
							<p>Este area es para describir el proyecto 
								Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ratione corporis dolor vel maiores quasi culpa possimus debitis. Nemo vero, veritatis maxime praesentium, reiciendis fugit omnis dolorem aspernatur! Reiciendis beatae, vel.
							</p>
							<strong>Whant these icons in portafolio</strong>
							You can download <a href="#">Enlace</a>
							<ul class="list-inline">
								<li>Fecha: 23-12-15</li>
								<li>Cliente: DEFHY df</li>
								<li>Categoria: Programacion .Net</li>
							</ul>
							<button type="button" class="btn btn-primary" data-dismiss="modal">
								<i class="fa fa.times">Cerrar Proyecto</i>
							</button>
						</div>
						
					</div>
				</div>
			</div>
		</div>	
	</div><!-- Fin  Modal 6 -->

	


	<script src="js/jquery.js" ></script>
	<script src="js/bootstrap.js"></script>
	<script type="text/javascript" src="js/validar_contacto.js"> </script>
	<script src="js/classie.js"></script>
	<script src="js/cbpAnimatedHeader.js"></script>
	


</body>
</html>