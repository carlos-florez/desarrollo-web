<!DOCTYPE html>
<html>
<head>
	<title>REGISTRAR PROYECTO</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<script src="http://code.jquery.com/jquery-latest.js"></script>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap-theme.min.css">
	<link rel="stylesheet" type="text/css" href="css/estilo.css">
	<script type="text/javascript" src="js/jquery.js"></script> 
	<script type="text/javascript" src="js/validacion.js"></script>
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
				 	<li class="active"><a href="registrar.php"><b>REGISTRAR PROYECTO</b></a></li>
				 	<li><a href="eliminar.php"><b>ELIMINAR PROYECTO</b></a></li>
				 	<li><a href="modificar.php"><b>MODIFICAR PROYECTO</b></a></li>
				 	<li><a href="consultas.php"><b>CONSULTAS</b></a></li>
			    </ul>
			</div>
		</nav>
		<div class="container" id="medio">
			<h4><b><i>REGISTRAR PROYECTOS</i></b></h4>
			<form action="" method="post" onsubmit="javascript:return Validar(this);">
			<center><div id="alert"></div></center>
			<center><div id="alert2"></div></center>
				<div class="row">
					<div class="form-group col-md-6">
				    	<label>Id Proyecto</label>
				    	<input type="text" class="form-control" name="id" onClick="limpiar();"  id="id" placeholder="Identificador">
				  	</div>
					<div class="form-group col-md-6">
					    <label>Nombre del Proyecto</label>
					    <input type="text" class="form-control" name="nombreP" onClick="limpiar();" id="nombre"  placeholder="Proyecto">
				    </div>
			    </div>
			    <div class="row">
					<div class="form-group col-md-6">
					    <label>Linea de Investigacion</label>
					    <input type="text" class="form-control" name="lineaI" onClick="limpiar();" id="linea"  placeholder="Investigacion">
				    </div>
				  	<div class="form-group col-md-6">
					    <label>Nombre del Asesor</label>
					    <input type="text" class="form-control" name="asesor" onClick="limpiar();" id="asesor"  placeholder="Asesor">
				    </div>
			    </div>
			    <div class="row">
					<div class="form-group col-md-6">
				    	<label>Autores del Proyecto</label>
				    	<input type="text" class="form-control" name="autor1" id="aut1"  onClick="limpiar();" placeholder="Autor numero 1">
				    	<input type="text" class="form-control" name="autor2" id="aut2"  onClick="limpiar();" placeholder="Autor numero 2">
				    	<input type="text" class="form-control" name="autor3" id="aut3" onClick="limpiar();"  placeholder="Autor numero 3">
				  	</div>
					<div class="form-group col-md-6">
					    <label>Nota Recibida</label>
					    <input type="number" min="0" step="0.0" max="5"class="form-control" onClick="limpiar();" id="nota" name="nota"  placeholder="Nota">
				    </div>
			  	</div>
			  	<center><button type="submit" name="registrar" onClick="Validar();" class="btn btn-info"><b>Registrar</b></button></center>
			</form>
		</div>
		<?php
			include('controlador/registrarProyecto.php');
		?>
		<footer>
			<center><p>Copyright © Todos los Derechos Reservados</p></center>
		</footer>
	</section>
</body>
</html>