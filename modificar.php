<!DOCTYPE html>
<html>
<head>
	<title>REGISTRAR PROYECTO</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<script src="http://code.jquery.com/jquery-latest.js"></script>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap-theme.min.css">
	<link rel="stylesheet" type="text/css" href="css/estilo.css">
</head>
<body>
	<section id="contenedor">
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
			      	<li><a href="index.php"><b>VER PROYECTO</b></a></li>
				 	<li><a href="registrar.php"><b>REGISTRAR PROYECTO</b></a></li>
				 	<li><a href="eliminar.php"><b>ELIMINAR PROYECTO</b></a></li>
				 	<li class="active"><a href="modificar.php"><b>MODIFICAR PROYECTO</b></a></li>
				 	<li><a href="consultas.php"><b>CONSULTAS</b></a></li>
			    </ul>
			</div>
		</nav>
		<div class="container" id="medio">
			<form action="" method="post" class="form-inline" onsubmit="javascript:return limpiar(this);">
				<center>
				<div class="form-group">
				    <labelclass="sr-only"><b>Buscar: </b></label>
				    <input type="text" name="ident" class="form-control" onClick="limpiar();" placeholder="Identificador proyecto">
				</div>
				  <button type="submit" name="buscar" class="btn btn-info"><span class="glyphicon glyphicon-search">&nbsp;</span><b>Buscar</b></button></center>
			</form><br>
				<?php
					include('controlador/consultarModificar.php');
				?>
		</div>
		<footer>
			<center><p>Copyright © Todos los Derechos Reservados</p></center>
		</footer>
	</section>
</body>
</html>