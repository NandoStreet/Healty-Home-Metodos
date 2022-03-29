<?php 

	$conexion=mysqli_connect('localhost','id17103432_calidad','M|XZf{8+>EVedpiB','id17103432_healthyhome');

 ?>


<!DOCTYPE html>
<html>
<head>
	<title>mostrar datos</title>
	<link rel="stylesheet" href="mostrarproductos.css">
</head>

<body>

<br>

	<table border="1" >
		<tr>
			<td>SECCION</td>
			<td>PRODUCTO</td>
			<td>FECHA</td>
			<td>CANTIDAD</td>
		
		</tr>

		<?php 
		$sql="SELECT * from inventariop";
		$result=mysqli_query($conexion,$sql);
		if(mysqli_affected_rows($conexion)==0){
			echo "<table><br>";
			echo "<tr><td><b>LISTA VACIA</b></tr></td></table><br>";
		}else{
		while($mostrar=mysqli_fetch_array($result)){
		 ?>

		<tr>
			<td><?php echo $mostrar['SECCION'] ?></td>
			<td><?php echo $mostrar['PRODUCTO'] ?></td>
			<td><?php echo $mostrar['FECHA'] ?></td>
			<td><?php echo $mostrar['ORIGEN'] ?></td>
		</tr>
	<?php 
	}
		}
	 ?>
	</table>

      
	<td align="center"><input type="button" name="Borrar" id="Borrar" value="Regresar" onclick="location='form_registro.php'"></td>


</body>



</html>