<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>ELIMINAR ARTICULO</title>
<link rel="stylesheet" href="eliminararticulo.css">
</head>
<body>

<h1>ELIMINAR ARTÍCULO</h1>
<form name="form1" method="get" action="eliminar_registros.php">
  <table border="0" align="center">
	
	<tr>
      <td>Código</td>
      <td><label for="codigo"></label>
      <input type="text" name="codigo" id="codigo" autocomplete="off"></td>
    </tr>
	
	<!-- NOSE USA ESTE CODIGO XD
	
	<tr>
      <td>Nombre artículo</td>
      <td><label for="n_art"></label>
      <input type="text" name="n_art" id="n_art"></td>
    </tr>
	
	<tr>
      <td>Cantidad</td>
      <td><label for="cantidad"></label>
      <input type="text" name="cantidad" id="cantidad"></td>
    </tr>
	
    <tr>  
      <td>Sección</td><td>
	  <label for="seccion"></label>
	  <select name="seccion" id="seccion">
	  <option selected>Escoja una opción</option>
	  <option value="Frutas">Frutas</option>
	  <option value="Verduras">Verduras</option>
	  <option value="Snacks">Snacks</option>
	  <option value="Lacteos">Lacteos</option>
	  <option value="Legumbres">Legumbres</option></select>  
    </tr>
	
   	<tr>
      <td>Precio</td>
      <td><label for="precio"></label>
      <input type="text" name="precio" id="precio"></td>
    </tr>-->
	  
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
	
    <tr>
      <td align="center"><input type="submit" name="enviar" id="enviar" value="Eliminar Artículo"></td>
      <td align="center"><input type="button" onclick="location='formulario_registro.php'" name="Borrar" id="Borrar" value="Atrás"></td>
    </tr>
	
  </table>
</form>
</body>
</html>