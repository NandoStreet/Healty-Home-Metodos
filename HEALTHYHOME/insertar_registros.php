<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>LISTA DE ALIMENTOS</title>
<link rel="stylesheet" href="inventario_insertarregistro.css">
</head>
<body>

<h1>GUARDADO CORRECTAMENTE</h1>

<?php
	
	$cod = $_GET["codigo"];
	$art = $_GET["n_art"];
	$cant = $_GET["cantidad"];
	$sec = $_GET["seccion"];
	$pre = $_GET["precio"];
	
	require("datos_conexion.php");
	
	$conexion = mysqli_connect($db_host,$db_usuario,$db_contra,$db_nombre); //CONEXION A LA BD
	
	if(mysqli_connect_errno()){ //PARA EL ERROR DEL HOST
		echo "Fallo al conectar con el Host, Cambia la URL :)";
		exit();
	}
	
	mysqli_select_db($conexion, $db_nombre) or die ("No se encuentra la BD");//PARA EL ERROR DE LA BD
	
	mysqli_set_charset($conexion, "utf8"); //CARACTERES ESPECIALES ´
	
	$consulta = "INSERT INTO inventario (codigo,articulo,cantidad,seccion,precio) VALUES ('$cod','$art','$cant','$sec','$pre')";
	
	$resultados = mysqli_query($conexion, $consulta); //GUARDAR  LA CONEXION Y LOS DATOS DE LA TABLA
	
	if($resultados==false){
		echo "Error de guardado";
	}else{
		echo "<table><br>";
		echo "<tr><td><u>Se guardo lo siguiente</u></td></tr>";
		echo "<tr><td><b>Código: </b></td></tr>";
		echo "<tr><td>-> $cod </td></tr>";
		echo "<tr><td><b>Artículo: </b></td></tr>";
		echo "<tr><td>-> $art </td></tr>";
		echo "<tr><td><b>Cantidad: </b></td></tr>";
		echo "<tr><td>-> $cant </td></tr>";
		echo "<tr><td><b>Sección: </b></td></tr>";
		echo "<tr><td>-> $sec </td></tr>";
		echo "<tr><td><b>Precio: </b></td></tr><br>";
		echo "<tr><td>->S/. $pre </td></tr></table>";
		echo "<br>";
	}
	
	echo "<h1>LISTA GUARDADA</h1><br>";
	$tabla = "SELECT * FROM inventario";
	$resultado_tabla = mysqli_query($conexion,$tabla);
	
	if($resultado_tabla==false){
		echo "Tabla INVENTARIO no creada";
	}else{
		while(($fila=mysqli_fetch_row($resultado_tabla))==true){// HACER HASTA QUE EXISTAN DATOS 
			echo "<table>";
			echo "<tr><td>COD ARTÍCULO CANTIDAD SECCIÓN PRECIO</tr></td><tr><td>";
			for($i=0;$i<5;$i++){ //IMPRIMIR LO QUE SE GUARDO
				echo $fila[$i] . " "; // IMPRIMIR EL ARRAY Y CONCATENARLO (.) CON UN ESPACIO " "
			}
			echo "</td></td></table>";
			echo "<br>";
		}
	}
	
	mysqli_close($conexion);
		
?>

	<tr>
      <td><div style="text-align:center"><input type="button" onclick="location='formulario_registro.php'" name="Regresar" id="Regresar" value="Insertar más Datos"></div></td>
    </tr>
	
</body>
</html>