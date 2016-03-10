<?php

class sql
{
	function existencia($id){
		require('conexion.php');
		$sql = $handle->prepare('SELECT * FROM proyecto WHERE identificador = :Id');
			$sql->execute(array('Id' => $id));
			$resultado = $sql->fetchAll();
			$i=0;
			foreach ($resultado as $row) {
				$i+=1;
			}
			return $i;
			require('desconexion.php');
	}
	function consultar($id){
		require('conexion.php');
		$sql = $handle->prepare('SELECT * FROM proyecto WHERE identificador = :Id');
			$sql->execute(array('Id' => $id));
			$resultado = $sql->fetchAll();
			return $resultado;
			require('desconexion.php');
	}
	function modificar($id,$nom,$aut1,$aut2,$aut3,$asesor,$nota,$linea){
		require('conexion.php');
		$sql="UPDATE `proyecto` SET `nombre`=:nom,`autor1`=:aut1,`autor2`=:aut2,`autor3`=:aut3,`nombreAsesor`=:asesor,`notaRecivida`=:nota,`lineaInvestigacion`=:linea WHERE `id`= :id";
		try{
			$query=$handle->prepare($sql);
			$query->bindparam(':id',$id,PDO::PARAM_STR);
			$query->bindparam(':nom',$nom,PDO::PARAM_STR);
			$query->bindparam(':aut1',$aut1,PDO::PARAM_STR);
			$query->bindparam(':aut2',$aut2,PDO::PARAM_STR);
			$query->bindparam(':aut3',$aut3,PDO::PARAM_STR);
			$query->bindparam(':asesor',$asesor,PDO::PARAM_STR);
			$query->bindparam(':nota',$nota,PDO::PARAM_STR);
			$query->bindparam(':linea',$linea,PDO::PARAM_STR);
			$query->execute();
			?>
				<script type="text/javascript">
					setTimeout($('#alert2').html('Proyecto modificado con exito').slideDown(500), 100000);	
				</script>
			<?php
		}catch(PDOexception $e){
			
			?>
				<script type="text/javascript">
					setTimeout($('#alert').html('Error al modificar los  datos ').slideDown(500), 100000);	
				</script>
			<?php 
		}
		require('desconexion.php');
	}
	function eliminar($id){
		require('conexion.php');
		$sql="DELETE FROM `proyecto` WHERE `id`= :id";
		try{
			$query=$handle->prepare($sql);
			$query->bindparam(':id',$id,PDO::PARAM_STR);
			$query->execute();
			?>
				<script type="text/javascript">
					setTimeout($('#alert2').html('Proyecto Eliminado con exito').slideDown(500), 100000);	
				</script>
			<?php
		}catch(PDOexception $e){
			?>
				<script type="text/javascript">
					setTimeout($('#alert').html('Error al eliminar los  datos ').slideDown(500), 100000);	
				</script>
			<?php 
		}
		require('desconexion.php');
	}
	function registrar($id,$nom,$aut1,$aut2,$aut3,$asesor,$nota,$linea){
		require('conexion.php');
			$sql="INSERT INTO `proyecto`(`identificador`, `nombre`, `autor1`, `autor2`, `autor3`, `nombreAsesor`, `notaRecivida`, `lineaInvestigacion`) VALUES (:id,:nom,:aut1,:aut2,:aut3,:asesor,:nota,:linea)";
			try{
				$query=$handle->prepare($sql);
				$query->bindparam(':id',$id,PDO::PARAM_STR);
				$query->bindparam(':nom',$nom,PDO::PARAM_STR);
				$query->bindparam(':aut1',$aut1,PDO::PARAM_STR);
				$query->bindparam(':aut2',$aut2,PDO::PARAM_STR);
				$query->bindparam(':aut3',$aut3,PDO::PARAM_STR);
				$query->bindparam(':asesor',$asesor,PDO::PARAM_STR);
				$query->bindparam(':nota',$nota,PDO::PARAM_STR);
				$query->bindparam(':linea',$linea,PDO::PARAM_STR);
				$query->execute();
				?>
					<script type="text/javascript">
						setTimeout($('#alert2').html('Proyecto registrado con exito').slideDown(500), 100000);	
					</script>
				<?php
			}catch(PDOexception $e){
				?>
					<script type="text/javascript">
						setTimeout($('#alert').html('Error al insertar los  datos ').slideDown(500), 100000);	
					</script>
				<?php 
			}
		require('desconexion.php');
	}
	function listar(){
		require('conexion.php');
		$stmt = $handle->query('SELECT * FROM proyecto');
		$i=1;
		while($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
		    echo "<tr>";
		    echo "<td class= 'info'>".$i."</td>"; 
		    echo "<td>".$row['identificador']."</td>";
		    echo "<td>".$row['nombre']."</td>";
		    echo "<td>".$row['autor1'].'</td>';
		    echo "<td>".$row['autor2'].'</td>';
		    echo "<td>".$row['autor3']."</td>";
		    echo "<td>".$row['nombreAsesor']."</td>";
		    echo "<td>".$row['fechaIngreso']."</td>";
		    echo "<td>".$row['notaRecivida']."</td>";
		    echo "<td>".$row['lineaInvestigacion']."</td>";
		    echo "</tr>";
		    $i++;
		}
	require('desconexion.php');
	}
	function consultarId($id){
		require('conexion.php');
		$sql = $handle->prepare('SELECT * FROM proyecto WHERE identificador LIKE ?');
			$sql->execute(array("%$id%"));
			$i=1;
		while($row = $sql->fetch(PDO::FETCH_ASSOC)) {
		    echo "<tr>";
		    echo "<td class= 'info'>".$i."</td>"; 
		    echo "<td>".$row['identificador']."</td>";
		    echo "<td>".$row['nombre']."</td>";
		    echo "<td>".$row['autor1'].'</td>';
		    echo "<td>".$row['autor2'].'</td>';
		    echo "<td>".$row['autor3']."</td>";
		    echo "<td>".$row['nombreAsesor']."</td>";
		    echo "<td>".$row['fechaIngreso']."</td>";
		    echo "<td>".$row['notaRecivida']."</td>";
		    echo "<td>".$row['lineaInvestigacion']."</td>";
		    echo "</tr>";
		    $i++;
		}
			require('desconexion.php');
	}
	function consultarTodo($nom, $linea,$asesor,$nota){
		require('conexion.php');
		$sql = $handle->prepare("SELECT * FROM proyecto WHERE nombre LIKE ? AND nombreAsesor LIKE ? AND notaRecivida LIKE ? AND lineaInvestigacion LIKE ? ");
			$sql->execute(array("%$nom%","%$asesor%","%$nota%","%$linea%"));
			$i=1;
		while($row = $sql->fetch(PDO::FETCH_ASSOC)) {
		    echo "<tr>";
		    echo "<td class= 'info'>".$i."</td>"; 
		    echo "<td>".$row['identificador']."</td>";
		    echo "<td>".$row['nombre']."</td>";
		    echo "<td>".$row['autor1'].'</td>';
		    echo "<td>".$row['autor2'].'</td>';
		    echo "<td>".$row['autor3']."</td>";
		    echo "<td>".$row['nombreAsesor']."</td>";
		    echo "<td>".$row['fechaIngreso']."</td>";
		    echo "<td>".$row['notaRecivida']."</td>";
		    echo "<td>".$row['lineaInvestigacion']."</td>";
		    echo "</tr>";
		    $i++;
		}
			require('desconexion.php');
	}

}

?>