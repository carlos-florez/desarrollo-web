<?php
require('sql/conexion.php');
require('sql/sql.php');

	if (isset($_POST['buscar'])) {
		$id=$_POST['ident'];
		?>
			
		<?php
			$con=new sql;
			if($con->existencia($id)!=0){
				foreach ($con->consultar($id) as $row) {
					?>
				<div class="container" id="medio2">
					<form action="controlador/eliminarProyecto.php" method="post" onsubmit="javascript:return Validar(this);">
					<center><div id="alert"></div></center>
						<div class="row">
							<div class="form-group col-md-4" id="alineacion"><label>Id Proyecto: </label></div>
						    <div class="form-group col-md-8"><label><?php echo $row['identificador']; ?></label></div>
						    <input type="hidden" class="form-control" name="id" id="id" value="<?php echo $row['id']; ?>">
						  	
					    </div>
					    <div class="row">
					    	<div class="form-group col-md-4" id="alineacion"><label>Nombre del Proyecto: </label> </div>
							<div class="form-group col-md-8"><label><?php echo $row['nombre']; ?></label></div>
					    </div>
					    <div class="row">
							<div class="form-group col-md-4" id="alineacion"><label>Linea de Investigacion: </label></div>
							<div class="form-group col-md-8"><label><?php echo $row['lineaInvestigacion']; ?></div>
						</div>
						<div class="row">
						  	<div class="form-group col-md-4" id="alineacion"><label>Nombre del Asesor: </label></div>
							<div class="form-group col-md-8"><label><?php echo $row['nombreAsesor']; ?></label></div>
					    </div>
					    <div class="row">
							<div class="form-group col-md-4" id="alineacion"><label>Autor #1: </label></div>
						    <div class="form-group col-md-8"><label><?php echo $row['autor1']; ?></label></div>
						</div>
						<div class="row">
							<div class="form-group col-md-4" id="alineacion"><label>Autor #2: </label></div>
						    <div class="form-group col-md-8"><label><?php echo $row['autor2']; ?></label></div>
						</div>
						 <div class="row">
							<div class="form-group col-md-4" id="alineacion"><label>Autor #3: </label></div>
						    <div class="form-group col-md-8"><label><?php echo $row['autor3']; ?></label></div>
						</div>
						 <div class="row">
							<div class="form-group col-md-4" id="alineacion"><label>Nota Recibida: </label></div>
						    <div class="form-group col-md-8"><label><?php echo $row['notaRecivida']; ?></label></div>
						</div>
							
					  	<center><button type="submit" name="eliminar" class="btn btn-info"><b>Eliminar</b></button></center>
					</form>
				</div>
				<?php  
				    
				}
			}else{
				?>
				<center><p id="msg">Este identificador no existe</p></center>
				<script type="text/javascript">
					function limpiar(){
					var x=document.getElementById("msg");
					x.style.display = "none";
				}
				</script>
			<?php 
		}
	}	
require('sql/desconexion.php');
?>