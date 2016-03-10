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
					<form action="controlador/modificarProyecto.php" method="post" onsubmit="javascript:return Validar(this);">
					<center><div id="alert"></div></center>
						<div class="row">
							<div class="form-group col-md-6">
						    	<label>Id Proyecto</label>
						    	<input type="text" class="form-control" name="id2" id="id2" disabled value="<?php echo $row['identificador']; ?>" >
						    	<input type="hidden" class="form-control" name="id" id="id" value="<?php echo $row['id']; ?>">
						  	</div>
							<div class="form-group col-md-6">
							    <label>Nombre del Proyecto</label>
							    <input type="text" class="form-control" name="nombreP" id="nombre" value="<?php echo $row['nombre']; ?>
		"  placeholder="Proyecto">
						    </div>
					    </div>
					    <div class="row">
							<div class="form-group col-md-6">
							    <label>Linea de Investigacion</label>
							    <input type="text" class="form-control" name="lineaI" id="linea" value="<?php echo $row['lineaInvestigacion']; ?>"  placeholder="Investigacion">
						    </div>
						  	<div class="form-group col-md-6">
							    <label>Nombre del Asesor</label>
							    <input type="text" class="form-control" name="asesor" id="asesor" value="<?php echo $row['nombreAsesor']; ?>"  placeholder="Asesor">
						    </div>
					    </div>
					    <div class="row">
							<div class="form-group col-md-6">
						    	<label>Autores del Proyecto</label>
						    	<input type="text" class="form-control" name="autor1" id="aut1" value="<?php echo $row['autor1']; ?>"  placeholder="Autor numero 1">
						    	<input type="text" class="form-control" name="autor2" id="aut2" value="<?php echo $row['autor2']; ?>"  placeholder="Autor numero 2">
						    	<input type="text" class="form-control" name="autor3" id="aut3" value="<?php echo $row['autor3']; ?>"  placeholder="Autor numero 3">
						  	</div>
							<div class="form-group col-md-6">
							    <label>Nota Recibida</label>
							    <input type="number" min="0" step="0.0" max="5"class="form-control" value="<?php echo $row['notaRecivida']; ?>" id="nota" name="nota"  placeholder="Nota">
						    </div>
					  	</div>
					  	<center><button type="submit" name="modificar" onClick="Validar();" class="btn btn-info"><b>Modificar</b></button></center>
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