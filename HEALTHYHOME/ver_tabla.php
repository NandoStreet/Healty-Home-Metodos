<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>TABLA GUARDADA</title>
<link rel="stylesheet" href="inventario_insertarregistro.css">

</head>
<body>

<h1>LISTA GUARDADA</h1><br>

<?php
	//LISTA GUARDADA
	require("datos_conexion.php");
	
	$conexion = mysqli_connect($db_host,$db_usuario,$db_contra,$db_nombre); //CONEXION A LA BD
	
	if(mysqli_connect_errno()){ //PARA EL ERROR DEL HOST
		echo "Fallo al conectar con el Host, Cambia la URL :)";
		exit();
	}
	
	mysqli_select_db($conexion, $db_nombre) or die ("No se encuentra la BD");//PARA EL ERROR DE LA BD
	
	mysqli_set_charset($conexion, "utf8"); //CARACTERES ESPECIALES ´
	
	$tabla = "SELECT * FROM inventario ";//PARA MOSTRAR TODA LA TABLA
	
	$resultado_tabla = mysqli_query($conexion,$tabla);
	
	$tabla2 = "SELECT ROUND(cantidad*precio,2) FROM inventario"; //PARA MULTIPLICAR CANTIDAD * PRECIO
	
	$resultado_tabla2 = mysqli_query($conexion,$tabla2);
	
	if($resultado_tabla==false){
		echo "<tr><td><b>NO EXISTE LA TABLA</b></td></tr>";
	}else{
		if(mysqli_affected_rows($conexion)==0){
			echo "<table><br>";
			echo "<tr><td><b>LISTA VACIA</b></tr></td></table><br>";
		}else{
			while((($fila=mysqli_fetch_row($resultado_tabla))==true) && (($fila2=mysqli_fetch_row($resultado_tabla2))==true)){// PARA TODA LA TABLA
					echo "<table>";
					echo "<tr><td>COD ARTÍCULO CANTIDAD SECCIÓN PRECIO SUBTOTAL</tr></td><tr><td>";
					for($i=0;$i<5;$i++){ //IMPRIMIR LO QUE SE GUARDO
						echo $fila[$i] . " "; // IMPRIMIR EL ARRAY Y CONCATENARLO (.) CON UN ESPACIO " "
					}
					echo "S/.".$fila2[0] . " ";
					echo "</td></td></table>";
					echo "<br>";
			}
		}
				
	}

	mysqli_close($conexion);
			
?>

<?php
	//SUMA DE SUBTOTALES
	
	require("datos_conexion.php");
	
	$conexion = mysqli_connect($db_host,$db_usuario,$db_contra,$db_nombre); //CONEXION A LA BD
	
	if(mysqli_connect_errno()){ //PARA EL ERROR DEL HOST
		echo "Fallo al conectar con el Host, Cambia la URL :)";
		exit();
	}
	
	mysqli_select_db($conexion, $db_nombre) or die ("No se encuentra la BD");//PARA EL ERROR DE LA BD
	
	mysqli_set_charset($conexion, "utf8"); //CARACTERES ESPECIALES ´
	
	$suma= "SELECT ROUND(SUM(cantidad*precio),2) FROM inventario";//PARA LA MULTIPLICACIO Y SUMA DE SUBTOTALES
	
	$resultado_suma= mysqli_query($conexion,$suma)or die(mysqli_error($conexion)); ;

	while(($row=mysqli_fetch_row($resultado_suma))==true){
		echo "<table>";
		echo "<tr><td><b>GASTO TOTAL --> </b>S/. ".$row[0]."</td></td></table><br>";;
	}
	
	mysqli_close($conexion);

?>

	<tr>
		<td><div style="text-align:center"><input type="button" onclick="location='formulario_registro.php'" name="Regresar" id="Regresar" value="Atrás"></div></td>
	</tr>

</body>
</html>