<!DOCTYPE html>
<html>
<head>
	<title>Agenda</title>
	<?php require_once "dependencias.php"; ?>
</head>
<body background="imagenes/imagen6.jpg">

	<nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #03105A;">
		<a class="navbar-brand" href="index.php">
			<i class="fas fa-id-card-alt fa-4x"></i>
		</a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="navbarNav">
			<ul class="navbar-nav">
				<li class="nav-item active">
					<a class="nav-link" style="font-family: Times New Roman" href="index.php"><i class="fas fa-address-card fa-2x"></i> INICIO </a>
				</li>
				<li class="nav-item active">
					<a class="nav-link" style="font-family: Times New Roman" href="contacto/inicioC.php"><i class="fas fa-address-book fa-2x"></i> CONTACTOS</a>
				</li>
				<li class="nav-item active">
					<a class="nav-link" style="font-family: Times New Roman" href="final/iniciocat.php"><i class="fas fa-clipboard-list fa-2x"></i> CATEGORIAS</a>
				</li>
			</ul>
		</div>
	</nav>
	<br>
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<div class="jumbotron jumbotron-fluid">
					<h1 class="display-4" align="center" style="font-family: Brush Script MT">Agenda de contactos</h1>
					<div class="container">
						<h3 style="font-family: Star Wars">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Información Personal</h3>
						<div class="row">
							<div class="col-sm-7">
								<p class="lead" align="left" style="font-family: Optima">&nbsp;&nbsp;MATERIA: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
									<label style="font-family: Zapf-Chancery;color: black">Topicos Avanzados de Programación</label>
								</p>
								<p class="lead" align="left" style="font-family: Optima">&nbsp;&nbsp;NOMBRE DE EQUIPO: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
									<label style="font-family: Zapf-Chancery;color: black">Cholos asesinos</label>
								</p>
								<p class="lead" align="left" style="font-family: Optima">&nbsp;&nbsp;INTEGRANTES: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
									<label style="font-family: Zapf-Chancery;color: black">Gomez Gonzalez Luis Leonardo 
										<br>
										Maldonado Martínez Adriana
									</label>
								</p>
								<p class="lead" align="left" style="font-family: Optima">&nbsp;&nbsp;FECHA DE CREACIÓN: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
									<label style="font-family: Zapf-Chancery;color: black">15/12/2020</label>
								</p>
							</div>
							<div class="card" style="width: 18rem;">
								<img src="imagenes/foto1.jpg" class="card-img-top" alt="..." align="right">
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<footer>
		<div class="card-footer text-muted" style="background-color:#03105A" align="center">
		<label style="font-family: Times New Roman; color: white">By: Choclos asesinos</label>
	</div>
	</footer>
</body>
</html>
