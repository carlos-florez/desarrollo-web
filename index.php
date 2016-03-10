<!DOCTYPE html>
<html>
<head>
	<title>VER PROYECTO</title>
		<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
		<script src="http://code.jquery.com/jquery-latest.js"></script>
		<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="css/bootstrap-theme.min.css">
		<meta charset="utf-8">
		<link rel="stylesheet" type="text/css" href="css/estilo.css">
</head>
<body>
	<section class="container" id="contenedor">
		<header class="header">
				<h1>TRABAJO DE GRADO</h1><p id="sub">&nbsp;Ingenieria de Sistemas</p>
		</header>
		<nav class="navbar navbar-default" id="nave"role="navigation">
			  <!-- El logotipo y el icono que despliega el menú se agrupan
			       para mostrarlos mejor en los dispositivos móviles -->
			<div class="navbar-header">
			    <button type="button" class="navbar-toggle" data-toggle="collapse"
			            data-target=".navbar-ex1-collapse">
			      <span class="sr-only">Desplegar navegación</span>
			      <span class="icon-bar"></span>
			      <span class="icon-bar"></span>
			      <span class="icon-bar"></span>
			    </button>
			    <a class="navbar-brand" id="menu" href="index.php"><b>MENU</b></a>
			</div> 
			  <!-- Agrupar los enlaces de navegación, los formularios y cualquier
			       otro elemento que se pueda ocultar al minimizar la barra -->
			<div class="collapse navbar-collapse navbar-ex1-collapse">
			    <ul class="nav navbar-nav">
			      	<li class="active"><a href="index.php"><b>VER PROYECTO</b></a></li>
				 	<li><a href="registrar.php"><b>REGISTRAR PROYECTO</b></a></li>
				 	<li><a href="eliminar.php"><b>ELIMINAR PROYECTO</b></a></li>
				 	<li><a href="modificar.php"><b>MODIFICAR PROYECTO</b></a></li>
				 	<li><a href="consultas.php"><b>CONSULTAS</b></a></li>
			    </ul>
			</div>
		</nav>
		<div class="container" id="medio">
			<section class="container-fluid">
				<h3><b><i>LISTADO DE PROYECTOS</i></b></h3>
				<div class="table-responsive">
					<table class="table table-hover">
						<tr class= "info">
							<td class= "info"><b>#</b></td>
							<td><b>ID</b></td>
							<td><b>PROYECTO</b></td>
							<td><b>AUTOR1</b></td>
							<td><b>AUTOR2</b></td>
							<td><b>AUTOR3</b></td>
							<td><b>ASESOR</b></td>
							<td><b>FECHA</b></td>
							<td><b>NOTA</b></td>
							<td><b>INVESTIGACIÓN</b></td>
						</tr>
						<?php
							include('controlador/listarProyecto.php');
						?>
					</table>
				</div>
			</section>
		</div>
		<footer>
			<center><p>Copyright © Todos los Derechos Reservados</p></center>
		</footer>
	</section>
		<script src="js/main.js"></script>
</body>
</html>