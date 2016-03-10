<?php
require('../sql/sql.php');
	if(isset($_POST['eliminar'])){
		
		$id=$_POST['id'];
		$con=new sql;
		$con->eliminar($id);
	}

header('Location: ../eliminar.php');
?>