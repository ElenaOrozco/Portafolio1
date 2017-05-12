<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<title>Dropdown</title>
</head>
<body>
	
	<div class="container">
		
		<h1>Listas Despeglables - Dropdown</h1>
		<h3>Lista en enlace</h3>
		
		<div class="dropdown">
			<a data-target="#" href="http://ejemplo.com" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
				Roberto
				<!-- class="caret" muestra el icono de lista despeglable-->
				<span class="caret"></span>
			</a>

			<ul class="dropdown-menu">
				<li><a href="#"><span class="glyphicon glyphicon-user" aria-hidden="true"> Perfil</span></a></li>
				<li><a href="#"><span class="glyphicon glyphicon-comment" aria-hidden="true"> Mensajes</span></a></li>

				<li class="divider"></li>

				<li><a href="#"><span class="glyphicon glyphicon-cog" aria-hidden="true"> Configuracion</span></a></li>
				<li><a href="#"><span class="glyphicon glyphicon-log-out" aria-hidden="true"> Salir</span></a></li>
			</ul>

		</div>

		<h3>Lista estilo boton</h3>

		<div class="dropdown">
			<button type="button" class="btn btn-primary" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
				Correo electrónico
				<!-- class="caret" muestra el icono de lista despeglable-->
				<span class="caret"></span>
			</button>

			<ul class="dropdown-menu">
				<li><a href="#"><span class="glyphicon glyphicon-pencil" aria-hidden="true"> Redactar</span></a></li>
				<li><a href="#"><span class="glyphicon glyphicon-share-alt" aria-hidden="true"> Enviar</span></a></li>
				<li><a href="#"><span class="glyphicon glyphicon-remove" aria-hidden="true"> Borrar</span></a></li>

				<li class="divider"></li>

				<li><a href="#"><span class="glyphicon glyphicon-trash" aria-hidden="true"> Papelera</span></a></li>
				<li class="disabled"><a href="#"><span class="glyphicon glyphicon-folder-close" aria-hidden="true"> Span</span></a></li>
			</ul>

		</div>

		<h3>Listas desplegables en nav bar</h3>

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
						<!-- Menu Despegable -->
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								Menu 1 
								<span class="caret"></span>
							</a>
							<ul class="dropdown-menu" role="menu">
								<li><a href="#">Action</a></li>
								<li><a href="#">Another</a></li>
								<li><a href="#">Smething else here</a></li>
								<!-- Separadores -->
								<li class="#"></li>
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
		</nav>


	</div>
	
	
	<script src="js/jquery.js" ></script>
	<script src="js/bootstrap.js"></script>
	
</body>
</html>