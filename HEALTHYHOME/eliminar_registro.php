<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="refresh" content="10; url=https://healthyhometeamcalidad.000webhostapp.com/form_registro.php">
<title>INVENTARIO</title>
</head>
<body>
<?php
	
	$prod=$_GET["PRODUCTO"];
	
	
	

	require("datos_conexion.php");
	
	$conexion = mysqli_connect($db_host,$db_usuario,$db_contra,$db_nombre); 
	
	if(mysqli_connect_errno()){ 
		echo "Fallo al conectar con el Host, Cambia la URL :)";
		exit();
	}
	
	mysqli_select_db($conexion, $db_nombre) or die ("No se encuentra la BD");
	
	mysqli_set_charset($conexion, "utf8"); 
	
	$consulta ="DELETE FROM inventariop WHERE PRODUCTO='$prod'";
	
	$resultados = mysqli_query($conexion, $consulta); 
	
	if($resultados==false){
		echo "Error de consulta";
	}else{
		require("Mostrar.php");
	}

	
	mysqli_close($conexion);
	
	
?>


</body>
</html>