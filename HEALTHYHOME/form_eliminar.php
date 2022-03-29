<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>eliminar</title>
<link rel="stylesheet" href="eliminararticulos.css">
</head>

<body>
<h1>Eliminar de Artículos</h1>
<form name="form1" method="get" action="eliminar_registro.php">
  <table border="0" align="center">
    <tr>
      <td>Producto</td>
      <td><label for="PRODUCTO"></label>
      <input autocomplete="off" type="text" name="PRODUCTO" id="PRODUCTO"></td>
    </tr>
    <tr>
    
	  
    
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td align="center"><input type="submit" name="enviar" id="enviar" value="Eliminar" onclick="location='eliminar_registro.php'"></td>
	<td align="center"><input type="button" name="Borrar" id="Borrar" value="Regresar" onclick="location='form_registro.php'"></td>
	
    </tr>
  </table>
</form>

</body>
</html>