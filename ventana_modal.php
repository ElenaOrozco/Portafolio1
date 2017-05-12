<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<title>Ventana Modal</title>
</head>
<body>
	
	<div class="container">

		<!-- Mandamos llamar con boton-->
		<!-- data-toggle= recordar poner el tipo Modal-->
		<!-- data-target= recordar poner el mismo id del Modal-->
		<button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#ventana">
			Mostrar Modal
		</button>
		
		<br>
		
		<!-- Mandamos llamar con boton-->
		<!-- data-toggle= recordar poner el tipo Modal-->
		<!-- data-target= recordar poner el mismo id del Modal-->
		<a href="#" data-toggle="modal" data-target="#ventana">Abrir ventana Modal</a>		

		<!-- fade: fecto suavisado id= para llamarlo  aria-hidden = true para que este oculto-->
		<div class="modal fade" id="ventana" tabindex="-1" role="dialog" aria-labelledby="ModalLabel" aria-hidden="true">
			<!-- Podemos cambiar tamaño agregando modal-lg (para grande) o modal-sm (pequeño) -->
			<div class="modal-dialog">
				<div class="modal-content">

					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span>
							<span class="sr-only">Cerrar</span>
						</button>
						<h4 class="modal-title" id="ModalLabel">Titulo de la Ventana</h4>	
					</div>

					<div class="modal-body">
						Aqui va el contenido
					</div>


					<div class="modal-footer">
						<button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
						<button type="submit" class="btn btn-primary">Guardar Cambios</button>
					</div>

				</div>
			</div>
		</div>

	</div>
	
	
	<script src="js/jquery.js" ></script>
	<script src="js/bootstrap.js"></script>
	
</body>
</html>