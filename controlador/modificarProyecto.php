<?php
require('../sql/sql.php');
	if(isset($_POST['modificar'])){
		
		$id=$_POST['id'];
		$nom=$_POST['nombreP'];
		$linea=$_POST['lineaI'];
		$asesor=$_POST['asesor'];
		$aut1=$_POST['autor1'];
		$aut2=$_POST['autor2'];
		$aut3=$_POST['autor3'];
		$nota=$_POST['nota'];
		$con=new sql;
		$con->modificar($id,$nom,$aut1,$aut2,$aut3,$asesor,$nota,$linea);
	}
header('Location: ../modificar.php');
?>