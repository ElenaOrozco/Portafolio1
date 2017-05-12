<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Carousel</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
</head>
<body>

	<div class="container">
		<h3>Rines</h3>
		<div class="row">
			<div class="col-xs-12">
				<div id="carousel-ejemplo" class="carousel slide" data-ride="carousel">
					
					<!-- Identidicadores bottones cantidad de indicadore = cantidad de imagenes: Son opcionales-->
					<ol class="carousel-indicators">
						<li data-target="#carousel-ejemplo" data-slide-to="0" class="activate"></li>
						<li data-target="#carousel-ejemplo" data-slide-to="1"></li>
						<li data-target="#carousel-ejemplo" data-slide-to="2"></li>
						
					</ol><!-- /Identificadores -->
					
					<!-- Item de las imagenes -->
					<div class="carousel-inner" role="listbox">
						<div class="item active">
							<img src="img/rin1.jpg" alt="40%">
							<!-- Taxto a la imagen Caption-->
							<div class="carousel-caption">
								<h3>3SDM</h3>
							</div>
						</div>
						<div class="item">
							<img src="img/rin2.jpg" alt="40%">
							<!-- Taxto a la imagen Caption-->
							<div class="carousel-caption">
								<h3>3SDM</h3>
							</div>
						</div>
						<div class="item">
							<img src="img/rin3.jpg" alt="40%">
							<!-- Taxto a la imagen Caption-->
							<div class="carousel-caption">
								<h3>3SDM</h3>
							</div>
						</div>
					</div><!-- /Items -->

					<!-- Controles  (Flechas) Son opcionales -->
					<a class="left carousel-control" href="#carousel-ejemplo" role="button" data-slide="prev">
						<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
						<span class="sr-only">Anterior</span>
					</a>
					<a class="right carousel-control" href="#carousel-ejemplo" role="button" data-slide="next">
						<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
						<span class="sr-only">Siguiente</span>
					</a>
					<!-- /Controles Flechas -->


				</div>
			</div>

		</div>
	</div>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
	
	<script>
		$('.carousel').carousel({
			interval: 5000,
			pause:"hover"
		});
	</script>
</body>
</html>