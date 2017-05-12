<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<title>Nav Bar</title>
</head>
<body>
	<!-- El uso del div no es necesario, la clase navbar si lo es-->
	<nav class="navbar navbar-default">
		<div class="container-fluid">
			<!--Menu del dispositivo movil-->
			<div class="navbar-header">
				<!--Botton del dispositivo movil-->
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#ejemplo">
					<span class="sr-only">Toggle navigation</span>
					<!--Lineas Menu del dispositivo movil-->
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<!--Link al lado del menu en  dispositivo movil-->
				<a href="#" class="navbar-brand">Tutorial</a>
			</div>

			<!--Items Menu-->
			<div class="collapse navbar-collapse" id="ejemplo">
				<!--Menu alineado a la izquierda-->
				<ul class="nav navbar-nav">
					<li class="active"><a href="#">Inicio</a></li>
					<li><a href="#">Contactos</a></li>
					<!-- Menu Despegable -->
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <span class="caret"></span></a>
						<ul class="dropdown-menu" role="menu">
							<li><a href="#">Action</a></li>
							<li><a href="#">Another</a></li>
							<li><a href="#">Smething else here</a></li>
							<!-- Separadores -->
							<li class="divider"></li>
							<li><a href="#">Separated link</a></li>
							<li class="divider"></li>
							<li><a href="#">One more separated link</a></li>
							
						</ul>
					</li>
				</ul>
				
				<!--Menu alineado a la derecha  Util para acciones de usuario-->
				<ul class="nav navbar-nav navbar-right">
					<li><a href="#">Link</a></li>
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <span class="caret"></span></a>
						<ul class="dropdown-menu" role="menu">
							<li><a href="#">Action</a></li>
							<li><a href="#">Another</a></li>
							<li><a href="#">Smething else here</a></li>
							<li class="divider"></li>
							<li><a href="#">Separated link</a></li>
							<li class="divider"></li>
							<li><a href="#">One more separated link</a></li>
							
						</ul>
					</li>
				</ul>
			</div>



		</div>
	</nav>
	
	<script src="js/jquery.js" ></script>
	<script src="js/bootstrap.js"></script>
	
</body>
</html>