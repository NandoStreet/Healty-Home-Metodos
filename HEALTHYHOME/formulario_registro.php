<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>LISTA DE ALIMENTOS</title>
<link rel="stylesheet" href="inventario_formularioregistro.css">

    <script src="https://kit.fontawesome.com/41bcea2ae3.js" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="css/principal.css">

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
        margin-top:100px;
    }
</style>
    <div class="container-all" id="move-content">
        <div class="contenedor">
          
          <h1>Inventario</h1><br>
<h2>Ingresar artículos</h2>
<div class="formulario">
<form class="form_cont" name="form1" method="get" action="insertar_registros.php"> 
  <table border="0" align="center">
  
	<tr>
      <td>Código:</td>
      <td><label for="codigo"></label>
      <input type="text" name="codigo" id="codigo" autocomplete="off"></td>
    </tr>
	
	<tr>
      <td>Nombre artículo:</td>
      <td><label for="n_art"></label>
      <input type="text" name="n_art" id="n_art" autocomplete="off"></td>
    </tr>
	
	<tr>
      <td>Cantidad:</td>
      <td><label for="cantidad"></label>
      <input type="text" name="cantidad" id="cantidad" autocomplete="off"></td>
    </tr>
	
    <tr>
	  <td>Sección:</td><td>
	  <label for="seccion"></label>
	  <select name="seccion" id="seccion">
	  <option selected>Escoja una opción</option>
	  <option value="Carnes">Carnes</option>
	  <option value="Cereales">Cereales</option>
	  <option value="Frutas">Frutas</option>
	  <option value="Lacteos">Lacteos</option>
	  <option value="Legumbres">Legumbres</option>
	  <option value="Snacks">Snacks</option>
	  <option value="Verduras">Verduras</option>
	  <option value="Otros">Otros</option></select>
	</tr>
	
   	<tr>
      <td>Precio:</td>
      <td><label for="precio"></label>
      <input type="text" name="precio" id="precio" autocomplete="off"></td>
    </tr>
	   
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
	
    <tr>
      <td align="center"><input type="submit" name="enviar" id="enviar" value="Registrar Datos"></td>
      <td align="center"><input type="button" onclick="location='formulario_eliminar.php'" name="Borrar" id="Borrar" value="Eliminar Datos"></td>
      <td align="center"><input type="button" onclick="location='ver_tabla.php'" name="Ver" id="Ver" value="Ver Lista Guardada"></td>

	</tr>
	
	<tr>
	<td></td>	
    <td align="center"><input type="button" onclick="location='imprimir.php'" name="Imprimir" id="imprimir" value="Imprimir Tabla Guardada"></td>

		
		
		
	</tr>
	
  </table>
</form>
</div>


        </div>
        
    
   
    </div>

    <script src="js/script.js"></script>
</body>
</html>