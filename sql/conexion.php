<?php
	try{
		$handle=new PDO('mysql:host=localhost;dbname=trabajo_de_grado','root','12345');
		$handle->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	}catch(PDOException $e){
		die('Lo siento, error al conectarse a la base de datos');
	}
?>