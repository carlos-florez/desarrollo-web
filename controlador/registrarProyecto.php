<?php
require('sql/sql.php');
	if(isset($_POST['registrar'])){
		$id=$_POST['id'];
		$nom=$_POST['nombreP'];
		$linea=$_POST['lineaI'];
		$asesor=$_POST['asesor'];
		$aut1=$_POST['autor1'];
		$aut2=$_POST['autor2'];
		$aut3=$_POST['autor3'];
		$nota=$_POST['nota'];
		$con=new sql;
		if($con->existencia($id)==0){
			$con->registrar($id,$nom,$aut1,$aut2,$aut3,$asesor,$nota,$linea);
		}else{
			?>
					<script type="text/javascript">
						setTimeout($('#alert').html('Este proyecto no se registro porque este identificador existe').slideDown(500), 100000);	
					</script>
				<?php
		}
	}
?>