<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/estiloHeader.css">
	<title>Header Animado</title>
</head>
<body>
	
	<div class="cbp-af-header">
		<div class="cbp-af-inner">
			<h1>Fixed</h1>
			<nav>
				<a href="#">Broccoli</a>
				<a href="#">Almonds</a>
				<a href="#">Pears</a>
				<a href="#">Oranges</a>
			</nav>
		</div>
	</div>

	<!-- Seccion Sobre Mi -->
	<section class="success" id="about">
		<div class="container">
			
			<div class="row">
				<div class="col-lg-12 text-center">
					<h2 class="section-heading">Acerca de mi</h2>
					<h3 class="section-subheading text-muted">Desarrollo de Software</h3>
				</div>
			</div>

			<div class="row">
				<div class="team-member">
					<img src="img/portafolio/yo.jpg" alt="" class="img-responsive img-circle">
					<h4>Elena Orozco</h4>
					<p class="text-muted">Desarrollo de Software</p>
				</div>

				<div class="col-lg-4 col-lg-offset-2">
					<p>
						Soy desarrollador de Software, me espacializo en diseño web, aplicaciones java y c#
					</p>
				</div>

				<div class="col-lg-4 col-lg-offset-2">
					<p>
						Me desempeño desde hace un año como Freelancer
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
					<h2 class="section-heading">Contactame</h2>
					<h3 class="section-subheading text-muted">Desarrollo de Software</h3>
				</div>
			</div>

			<div class="row">
				<div class="col-lg-12">
					<form action="">
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
	
	<script src="js/jquery.js" ></script>
	<script src="js/bootstrap.js"></script>
	<script src="js/classie.js"></script>
	<script src="js/cbpAnimatedHeader.js"></script>
	
</body>
</html>