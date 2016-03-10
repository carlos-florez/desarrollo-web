<?php
require('sql/sql.php');
if (isset($_POST['buscar'])) {
		$id=$_POST['id'];
		$nom=$_POST['nom'];
		$linea=$_POST['li'];
		$asesor=$_POST['as'];
		$nota=$_POST['no'];
		$con=new sql;
		if ($id==""&&$nom==""&&$linea==""&&$asesor==""&&$nota=="") {
			?>
			<script type="text/javascript">
				$('#alert').html('Ingrese algun dato ').slideDown(500);
			</script>
			<?php
		}else{
			if($id!=""){
				$con->consultarId($id);
			}else{
				$con->consultarTodo($nom, $linea,$asesor,$nota);
			}
		}
		

}
?>