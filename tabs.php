<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/estilos_formularioHorizontal.css">
	<title>Tabs Pestañas</title>
</head>
<body>
	<!--Los tabs NO son autoresponsivos-->
	<div class="container">
		<div class="row">
			<div class="col-xs-10">
				<!--class="nav nav-pills" botones y class="nav nav-tabs" pestañas-->
				<ul class="nav nav-pills">
					<li class="active"><a href="#home" role="tab" data-toggle="tab"><span class="glyphicon glyphicon-home"></span>Inicio</a></li>
					<li><a href="#profile" role="tab" data-toggle="tab"><span class="glyphicon glyphicon-user"></span>Perfil</a></li>
					<li><a href="#messages" role="tab" data-toggle="tab"><span class="glyphicon glyphicon-envelope"></span>Mensajes</a></li>
					<li><a href="#settings" role="tab" data-toggle="tab"><span class="glyphicon glyphicon-cog"></span>Configuracion</a></li>
				</ul>

				<!--Contenido de las pestañas-->
				<div class="tab-content">
					<!--Recordar que el id = href de las pestañas  FADE: para suavisar las pestañas es opcional-->
					<div class="tab-pane fade in active" id="home">
						<br>
						Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nulla autem 
						uos, suscipit est ab consectetur sed omnis adipisci reiciendis inventore 
						caecati temporibus voluptatum eos, molestiae animi accusamus libero rem! 
						Nulla!
					</div>

					<div class="tab-pane fade" id="profile">
						<br>
						<div class="form-horizontal">
							
							<div class="form-group">
								<label for="formGroup" class="col-sm-2 control-label">
								Nombre de Usuario
								</label>
								<div class="col-sm-2">
									<input type="text" class="form-control" id="formGroup" value="Roberto" disabled>
								</div>
							</div>

							<div class="form-group">
								<label for="formGroup" class="col-sm-2 control-label">
								Nombre
								</label>
								<div class="col-sm-4">
									<input type="text" class="form-control" id="formGroup">
								</div>
							</div>

							<div class="form-group">
								<label for="formGroup" class="col-sm-2 control-label">
								Apellidos
								</label>
								<div class="col-sm-4">
									<input type="text" class="form-control" id="formGroup">
								</div>
							</div>

							<div class="form-group">
								<label for="formGroup" class="col-sm-2 control-label" id="tel">
								Teléfono
								</label>
								<div class="input-group col-sm-3">
									<span class="input-group-addon"><span class="glyphicon glyphicon-phone"></span></span>
									<input type="text" class="form-control" id="formGroup">
								</div>
							</div>

							<div class="form-group">
								<label for="formGroup" class="col-sm-2 control-label" id="tel">
								Correo electrónico
								</label>
								<div class="input-group col-sm-3">
									<span class="input-group-addon">@</span>
									<input type="text" class="form-control" id="formGroup">
								</div>
							</div>

							<div class="form-group">
								<label for="formGroup" class="col-sm-2 control-label">
								Información biográfica
								</label>
								<div class="col-sm-4">
									<textarea rows="4" class="form-control"></textarea>
								</div>
							</div>

							<div class="form-group">
								<label for="formGroup" class="col-sm-2 control-label">
								Estado
								</label>
								<div class="col-sm-4">
									<select class="form-control">
										<option value="">En Linea</option>
										<option value="">Ocupado</option>
										<option value="">Ausente</option>
										<option value="">Desconectado</option>
									</select>
								</div>
							</div>

							<div class="form-group">
								<label for="formGroup" class="col-sm-2 control-label">
								Alias
								</label>
								<div class="col-sm-4">
									<input type="text" class="form-control" id="form-group">
									<span class="help-block">Este nombre sera mostrado a los usuarios, ocultando el verdadero nombre</span>
								</div>
							</div>

							<div class="form-group">
								<label for="formGroup" class="col-sm-2 control-label">
								Cuenta
								</label>
								<div class="col-sm-4">
									<label for="" class="radio-inline">
										<input type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1" checked>Activar
									</label>
									<label for="" class="radio-inline">
										<input type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">Desactivar
									</label>
								</div>
							</div>

							<div class="form-group">
								<label for="formGroup" class="col-sm-2 control-label">
								Mostrar Información
								</label>
								<div class="col-sm-4">
									<label for="" class="checkbox-inline">
										<input type="checkbox" id="inlineCheckbox1" value="option1" checked disabled>Nombre
									</label>
									<label for="" class="checkbox-inline">
										<input type="checkbox" id="inlineCheckbox2" value="option2">Biografia
									</label>
									<label for="" class="checkbox-inline">
										<input type="checkbox" id="inlineCheckbox2" value="option3" >Telefono
									</label>
								</div>
							</div>

							<br>
							<div class="form-group">
								<label for="formGroup" class="col-sm-2 control-label"></label>
								<div class="col-sm-4">
									<button type="submit" class="btn btn-success btn-lg"><span class="glyphicon glyphicon-floppy-saved"></span>Guardar</button>
									<button type="button" class="btn btn-danger btn-lg"><span class="glyphicon glyphicon-remove-circle"></span>Cancelar</button>
								</div>
							</div>
						</div><!--Fin del formulario-->
					</div>

					<div class="tab-pane fade" id="messages">
						<br>
						<ul class="list-group">
							<li class="list-group-item">Item 1</li>
							<li class="list-group-item">Item 2</li>
							<li class="list-group-item">Item 3</li>
							<li class="list-group-item">Item 4</li>
							<li class="list-group-item">Item 5</li>
						</ul>
					</div>

					<div class="tab-pane fade" id="settings">
						<br>
						<div class="panel panel-default">
							<div class="panel-heading">Panel Configuracion</div>
							<div class="panel-body">
								Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugit sit, in iusto dolorem quidem earum consequatur asperiores veritatis tempora accusamus mollitia expedita magnam, nobis ipsa atque est provident, vero eius!
							</div>
							
						</div>
					</div>



				</div>
					


			</div>
		</div>
	</div>
	
	
	<script src="js/jquery.js" ></script>
	<script src="js/bootstrap.js"></script>
	
</body>
</html>