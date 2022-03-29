<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title> LISTA DE PRODUCTO </title>
<link rel="stylesheet" href="listadeproductos.css">


    <script src="https://kit.fontawesome.com/41bcea2ae3.js" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="css/principal.css">
    <link rel="stylesheet" href="css/recomendaciones.css">
    <link rel= "stylesheet" href="CSS/estilos_calc.css">

    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">

</head>
<body>

    <!--Header - menu-->
    <header>

        <div class="header-content">

            <div class="logo">
                <img src="img/iconoblanco.png">
            </div>

            <div class="menu" id="show-menu">

                <nav>
                    <ul>
                        <li class="menu-selected"><a href="index.html"></i>Inicio</a></li>
                        <li class="menu-selected"><a href="index.html"></i>Sistema de salud</a></li>
                        <li class="menu-selected"><a href="recomendaciones.html"></i>Recomendaciones</a></li>
                        <li class="menu-selected"><a href="calculadoras.html"></i>Calculadoras</a></li>
                        <li class="menu-selected"><a href="tipodecuerpo.html"></i>Tipo de cuerpo</a></li>
                    </ul>
                </nav>

            </div>

        </div>

        <div id="icon-menu">
            <i class="fas fa-bars"></i>
        </div>

    </header>

    <!--Portada-->
<style>
    .contenedor h1{
        margin-top:70px;
    }
</style>
    <div class="container-all" id="move-content">
        <div class="contenedor">
		<h1>Lista de productos </h1>
<form name="form1" method="get" action="insert_registros.php">
  <table border="0" align="center">
    <tr>
      <td>Sección</td>
      <td><label for="SECCION"></label>
      <input autocomplete="off"  type="text" name="SECCION" id="SECCION"></td>
    </tr>
    <tr>
      <td>Producto</td>
      <td><label for="PRODUCTO"></label>
      <input autocomplete="off" type="text" name="PRODUCTO" id="PRODUCTO"></td>
    </tr>
	<tr>
      <td>Fecha</td>
      <td><label for="FECHA"></label>
      <input autocomplete="off" type="text" name="FECHA" id="FECHA"></td>
    </tr>
	<tr>
      <td>Cantidad</td>
      <td><label for="ORIGEN"></label>
      <input autocomplete="off" type="text" name="ORIGEN" id="ORIGEN"></td>
    </tr>
	
	  
    
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td align="center"><input type="submit" name="enviar" id="enviar" value="Agregar" onclick="location='insert_registros.php'"></td>
      <td align="center"><input type="button" name="Borrar" id="Borrar" value="Eliminar" onclick="location='form_eliminar.php'"></td>
	  <td align="center"><input type="button" name="mostrar" id="mostrar" value="Mostrar" onclick="location='Mostrar.php'"></td>
	  
    </tr>
	<td></td>
	<td align="center"><input type="button" name="imprimir" id="imprimir" value="Imprimir" onclick="location='indexp.php'"></td>
	 <tr>
	 
	 </tr>
  </table>
</form>

        </div>
        
    
   
    </div>

    <script src="js/script.js"></script>
</body>
</html>