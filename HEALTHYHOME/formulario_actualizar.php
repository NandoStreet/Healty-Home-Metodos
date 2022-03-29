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
	border:1px solid #F00;
	padding:20px 50px;
	margin-top:50px;
}

body{
	background-color:#FFC;
}
</style>
</head>
<body>
	<form action="actualizar_registros.php" method="get">
		<h1>DIGITAR NOMBRE DEL ARTÍCULO:</h1><br>
		
		<tr>
		<td><label><center><input align="center" type="text" name="search" autocomplete="off"></center></label></td><br>
		</tr>
		
		<tr>
		<td><div style="text-align:center"><input type="submit" name="enviando" value ="Buscar" ></div></td><br>
		</tr>
		
		<tr>
        <td><div style="text-align:center"><input type="button" onclick="location='formulario_registro.php'" name="Regresar" id="Regresar" value="Atrás"></div></td>  
		</tr>
	</form>
</body>
</html>	
 