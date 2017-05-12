<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<title>Tooltip - Popover</title>
</head>
<body>
	
	<div class="container">
		<h1>ToolTip - Popover <small>Utiles en formularios</small></h1>
		<h5>Recordar que se deben llamasr en Javascript</h5>
		<br><br><br>

		<button type="button" class="btn btn-default" data-toggle="tooltip" data-placement="left" title="Tooltip vista izquierda">Tooltip izquierda</button>
		<button type="button" class="btn btn-default" data-toggle="tooltip" data-placement="bottom" title="Tooltip vista inferior">Tooltip inferior</button>
		<button type="button" class="btn btn-default" data-toggle="tooltip" data-placement="right" title="Tooltip vista derecha">Tooltip derecha</button>
		<button type="button" class="btn btn-default" data-toggle="tooltip" data-placement="top" title="Tooltip vista arriba">Tooltip arriba</button>
		
		<br><br><br>

		<a href="#" data-toggle="tooltip" title="Buscar con Google">Buscar</a>

		<br><br>
		<!-- Le asignamos un id para mandarlo a llamas en javascript-->
		<a href="#" data-toggle="tooltip" id="ayuda" data-placement="right" title="¿Necesitas ayuda?">Ayuda</a>
	
		<br><br>
		<h3>Popover</h3>
		<br><br><br>

		<button type="button" class="btn btn-primary" data-container="body" data-toggle ="popover" data-placement="left" data-content="Este es un Popover">Popover Izquierda</button>

		<!-- Agregar title para que tenga titulo-->
		<button type="button" class="btn btn-lg btn-danger"  data-toggle ="popover" title="Ttulo Popover" data-placement="left" data-content="Este es un Popover ">Popover Izquierda</button>




	</div>

	
	
	<script src="js/jquery.js" ></script>
	<script src="js/bootstrap.js"></script>
	
	<script type="text/Javascript">

		$(function (){
			$('[data-toggle="tooltip"]').tooltip()
		})

		$('#ayuda').tooltip('show')

		$(function (){
			$('[data-toggle="popover"]').popover()
		})
	</script>
</body>
</html>