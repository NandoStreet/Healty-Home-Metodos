<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>LOG IN</title>
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
        margin-top:150px;
    }
    body{
        display:flex;
        justify-content:center;
        align-items:center;
    }
    #inicio{
    font-family:'Courier New', Courier, monospace;
    margin-bottom: 5px;
    height:35px;
    padding-left: 10px;
    padding-right: 10px;
    font:bold;
    border:none;
    border-radius: 20px;
    color:white;
    background: grey;
}
#inicio:hover{
    background: rgb(1,255,201);
    border:none;
    color:white;
}
table tr{
    margin:20px;
}
    
</style>
    <div class="container-all" id="move-content">
        <div class="contenedor">
          
<h1> ACCESO AL SISTEMA</h1>
<p>Para poder usar el inventario necesitas iniciar sesion</p>
<form action="COMPRUEBA_LOGIN.php" method="post">

<table>

	<tr>
	<td class="izq">
	Usuario:</td><td class="der"><input type="text" name="login" autocomplete="off"></td></tr>
	<tr><td class="izq">
	Contraseña:</td><td class="der"><input type="password" name="password"></td></tr>
	<tr><td colspan="2">
	<br><input type="submit" name="enviar" id="inicio"  value="Iniciar Sesión"></td></tr>

</table>


        </div>
        
    
   
    </div>

    <script src="js/script.js"></script>
</body>
</html>