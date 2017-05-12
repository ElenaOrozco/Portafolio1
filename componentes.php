<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<title>Componentes</title>
</head>
<body>

	<div class="container">
		<!-- Crea en la parte superior un encabezado C/estilo responsivo-->
		<div class="page-header">
			<h1>Componentes <small>secundarios</small></h1>	
		</div>
		
		<!-- Crea ubicaciones de navegacion-->
		<ol class="breadcrumb">
			<li><a href="#">Inicio</a></li>
			<li><a href="#">Paneles</a></li>
			<li class="active">Varios</li>
		</ol>

		<div class="row">
			<div class="col-sm-6">
				<!-- Crea panel-->
				<div class="panel panel-default">
					<div class="panel-heading">Titulo del panel por defecto</div>
					<div class="panel-body">
						Lorem ipsum dolor sit amet, consectetur adipisicing elit.
						Eligendi dolorem fugit itaque repudiandae quasi quaerat beatae laborum nam praesentium dolores veritatis cumque iure esse, tempore nulla earum ipsa necessitatibus voluptatibus? 
					</div>
				</div>
			</div>

			<div class="col-sm-6">
				<!-- Crea panel-->
				<div class="panel panel-default">
					<div class="panel-body">
						Lorem ipsum dolor sit amet, consectetur adipisicing elit.
						Eligendi dolorem fugit itaque repudiandae quasi quaerat beatae laborum nam praesentium dolores veritatis cumque iure esse, tempore nulla earum ipsa necessitatibus voluptatibus? 
					</div>
					<div class="panel-footer">Panel de Pie</div>
				</div>
			</div>
		</div>

		<div class="row">
			<div class="col-sm-8">
				<!-- Crea panel-->
				<div class="panel panel-primary">
					<div class="panel-heading">Panel Primario</div>
					<div class="panel-body">
						Lorem ipsum dolor sit amet, consectetur adipisicing elit.
						Eligendi dolorem fugit itaque repudiandae quasi quaerat beatae laborum nam praesentium dolores veritatis cumque iure esse, tempore nulla earum ipsa necessitatibus voluptatibus? 
					</div>
				</div>
			</div>

			<div class="col-sm-4">
				<!-- Crea panel-->
				<div class="panel panel-danger">
					<div class="panel-heading">Panel Danger</div>
					<div class="panel-body">
						Lorem ipsum dolor sit amet, consectetur adipisicing elit.
						Eligendi dolorem fugit itaque repudiandae quasi quaerat beatae laborum nam praesentium dolores veritatis cumque iure esse, tempore nulla earum ipsa necessitatibus voluptatibus? 
					</div>
				</div>
			</div>

			<div class="col-sm-12">
				<!-- Crea panel-->
				<div class="panel panel-warning">
					<div class="panel-heading">Panel Warning</div>
					<div class="panel-body">
						Lorem ipsum dolor sit amet, consectetur adipisicing elit.
						Eligendi dolorem fugit itaque repudiandae quasi quaerat beatae laborum nam praesentium dolores veritatis cumque iure esse, tempore nulla earum ipsa necessitatibus voluptatibus? 
					</div>
				</div>
			</div>

			<!-- Alerts se pueden incorporar iconos o botones-->
			<div class="col-sm-12">
				<h1>Alerts</h1>
				<div class="alert alert-success" role="alert">
					(Success) Este es de color verde ya que es success
				</div>

				<div class="alert alert-info" role="alert"><span class="glyphicon glyphicon-info-sign"></span>
					(Info) Este es de color azul pues es info
				</div>
				<div class="alert alert-warning" role="alert">
					(Warning) Este es de color verde ya que es warning
				</div>
				<div class="alert alert-danger" role="alert">
					(Danger) Este es de color naranja ya que es danger
					<button type="button" class="btn btn-primary">Aceptar</button>
				</div>
			</div>

			<div class="col-sm-12">
				<h1>Barras de Progreso <small>recordar descargar plugin</small></h1>
				<div class="progress">
					<div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;">
						<span class="sr-only">60% Completado</span>
					</div>
				</div>

				<div class="progress">
					<div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style= "width: 20%;">
						<span class="sr-only">20% Completado</span>
					</div>
				</div>
			</div>

			<div class="col-sm-12">
					<div id="progressTimer"></div>
			</div>

			<div class="col-sm-8">
				<h1>Listas</h1>
				<ul class="list-group">
					<li class="list-group-item">
						<span class="badge">14</span>
						Cras justo mar
					</li>
				</ul>
				<ul class="list-group">
					<li class="list-group-item">
						<span class="badge">13</span>
						Cras justo mar
					</li>
				</ul>
				<ul class="list-group">
					<li class="list-group-item">
						<span class="badge">113</span>
						Cras justo mar
					</li>
				</ul>
				<ul class="list-group">
					<li class="list-group-item">
						<span class="badge">11</span>
						Cras justo mar
					</li>
				</ul>	
			</div>

		</div>
	</div>

	
	
	<script src="js/jquery.js" ></script>
	<script src="js/bootstrap.js"></script>
	<script src="js/jquery.progressTimer.min.js"></script>

	<script>
	$("#progressTimer").progressTimer({
    timeLimit: 10,
    warningThreshold: 10,
	baseStyle: 'progress-bar-warning',
	warningStyle: 'progress-bar-danger',
	completeStyle: 'progress-bar-info',
	onFinish: function() {
		console.log("I'm done");
	}
	})
	</script>

</body>
</html>