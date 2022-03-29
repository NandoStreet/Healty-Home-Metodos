<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="refresh" content="10; url=https://healthyhometeamcalidad.000webhostapp.com/form_registro.php">
<title>Documento sin título</title>
</head>
<body>
<?php
	require("datos_conexion.php");
	
	$conexion = mysqli_connect($db_host,$db_usuario,$db_contra,$db_nombre); //CONEXION A LA BD
	
	if(mysqli_connect_errno()){ //PARA EL ERROR DEL HOST
		echo "Fallo al conectar con el Host, Cambia la URL :)";
		exit();
	}
	
	mysqli_select_db($conexion, $db_nombre) or die ("No se encuentra la BD");//PARA EL ERROR DE LA BD
	
	mysqli_set_charset($conexion, "utf8"); //CARACTERES ESPECIALES ´
	
	$consulta = "TRUNCATE TABLE inventariop";
	$resultados = mysqli_query($conexion, $consulta);
try{
	
	$base= new PDO('mysql:host=localhost;dbname=id17103432_healthyhome', 'id17103432_calidad', 'M|XZf{8+>EVedpiB');

	$base->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
	$sql="SELECT * FROM login WHERE nombre_usuario= :login AND password= :password";
	$resultado=$base->prepare($sql);
	$login=htmlentities(addslashes($_POST["login"]));
	$password=htmlentities(addslashes($_POST["password"]));
	$resultado->bindValue(":login", $login);
	$resultado->bindValue(":password", $password);
	$resultado->execute();
	$numero_registro=$resultado->rowCount();
	if($numero_registro !=0){
		//echo"<h2>Adelante!!</h2>";
	session_start();
	$_SESSION["usuario"]=$_POST["login"];
	echo'<script type="text/javascript"> ;
        window.location.href="form_registro.php";</script>';
	//header("location:formulario_registro.php");
		
	}else{
	    echo'<script type="text/javascript"> alert("ERROR DE INICIO DE SESION");
            window.location.href="LOGIN2.php";</script>';
		//header("location:login.php");
		
	}
	
	
	
	
	
}catch(Exception $e){
	die("Error: " . $e->getMessage()); 
	
	
}


?>


</body>
</html>