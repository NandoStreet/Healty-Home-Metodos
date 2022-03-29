<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>USUARIO</title>
</head>
<body>
<?php
	session_start();
	if(!isset($_SESSION["usuario"])){
		header("Location:login.php");
		
	}
	
?>
<?php
	require("form_registro.php");
?>



</body>
</html>