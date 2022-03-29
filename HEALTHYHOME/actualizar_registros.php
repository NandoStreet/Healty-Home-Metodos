<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>ACTUALIZAR</title>
<style>
h1{
	text-align:center;
	color:#00F;
	border-bottom:dotted #0000FF;
	width:50%;
	margin:auto;
	
	
}

table{
	border:3px solid #0000FF;
	padding:20px 50px;
	margin:auto;
}

body{
	background-color:#FFC;
}
</style>
</head>
</head>
<body>
<h1>ARTÍCULOS ENCONTRADOS</h1><br>

<?php

	$busqueda = $_GET["search"];
	 
	require("datos_conexion.php");
	
	$conexion = mysqli_connect($db_host,$db_usuario,$db_contra,$db_nombre); //CONEXION A LA BD
	
	if(mysqli_connect_errno()){ //PARA EL ERROR DEL HOST
		echo "Fallo al conectar con el Host, Cambia la URL :)";
		exit();
	}
	
	mysqli_select_db($conexion, $db_nombre) or die ("No se encuentra la BD");//PARA EL ERROR DE LA BD
	
	mysqli_set_charset($conexion, "utf8"); //CARACTERES ESPECIALES ´
	
	$consulta = "SELECT * FROM inventario WHERE articulo LIKE '%$busqueda%'";
	
	$resultados = mysqli_query($conexion, $consulta); //GUARDAR  LA CONEXION Y LOS DATOS DE LA TABLA
	
	while($fila=mysqli_fetch_array($resultados, MYSQL_ASSOC)){
	echo "<table><tr><td>";
	echo "<form action='actualizar.php' method='get'>";
	echo "<input type='text' style='text-align:center'name='aaa' value='".$fila['codigo']."'>"." CÓDIGO<br>";
	echo "<input type='text' style='text-align:center' name='bbb' value='".$fila['articulo']."'>"." NOMBRE<br>";
	echo "<input type='text' style='text-align:center' name='ccc' value='".$fila['cantidad']."'>"." CANTIDAD<br>";
	echo "<input type='text' style='text-align:center' name='ddd' value='".$fila['seccion']."'>"." SECCIÓN<br>";
	echo "<input type='text' style='text-align:center' name='eee' value='".$fila['precio']."'>"." PRECIO<br><br>";
	echo "<div style='text-align:center'><input type='submit' name='enviando' value='Actualizar!'></div><br><br>";
	echo "</form></table></tr></td>";
	echo "<br>";
	}
	
	echo "<form>";
	echo "<br>";
	echo "<tr><td><div style='text-align:center'><input type='button' onclick='window.location=\"formulario_actualizar.php\"'/ name='Regresar' id='Regresar' value='Atrás'></div></td></tr>";
	echo "</form>";
		
	
	mysqli_close($conexion);
?>

</body>
</html>	