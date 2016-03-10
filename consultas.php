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
		<script type="text/javascript">
			function limpiar(){
				document.getElementById('alert').style.display="none";
				document.getElementById('alert2').style.display="none";
			}
		</script>
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
			      	<li><a href="index.php"><b>VER PROYECTO</b></a></li>
				 	<li><a href="registrar.php"><b>REGISTRAR PROYECTO</b></a></li>
				 	<li><a href="eliminar.php"><b>ELIMINAR PROYECTO</b></a></li>
				 	<li><a href="modificar.php"><b>MODIFICAR PROYECTO</b></a></li>
				 	<li class="active"><a href="consultas.php"><b>CONSULTAS</b></a></li>
			    </ul>
			</div>
		</nav>
		<div class="container" id="medio">
			<section class="container-fluid">
				<form class="form-inline" action="" method="post">
				  <div class="form-group">
				    <input type="text" class="form-control" name="id" onClick="limpiar();" id="campo" placeholder="identificador">
				  </div>
				  <div class="form-group">
				    <input type="text" class="form-control"  name="nom" onClick="limpiar();" id="campo"placeholder="Nombre proyecto">
				  </div>
				  <div class="form-group">
				    <input type="text" class="form-control" name="as" onClick="limpiar();" id="campo" placeholder="Asesor">
				  </div>
				  <div class="form-group">
				    <input type="text" class="form-control" name="li"  onClick="limpiar();" id="campo"placeholder="Linea de investigacion">
				  </div>
				  <div class="form-group">
				    <input type="text" class="form-control" name="no"  onClick="limpiar();" id="campo"placeholder="Nota">
				  </div>
				  <button type="submit" name="buscar" class="btn btn-info">Buscar</button>
				</form></br>
				<center><div id="alert"></div></center>
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
							include('controlador/consultartodos.php');
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