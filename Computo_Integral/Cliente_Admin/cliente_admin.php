<!DOCTYPE html>
<html>
    <head>
        <!-- Metas -->
        <meta charset="utf-8">
        <meta name="author" content="Equipo1">	
        <meta name="descryption" content="">
        <meta name="keywords" content="">
        <meta name="robots" content="index, follow">
        <!-- Links -->
        <link href="css/custom.css" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="/Computo_Integral/Cliente_Admin/css/style.css">
        <link rel="stylesheet" type="text/css" href="/Computo_Integral/Cliente_Admin/css/style3.css">
        <link rel="stylesheet" type="text/css" href="/Computo_Integral/Cliente_Admin/css/reporte.css">
        <link href='http://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>
        <link rel="icon" href="/Computo_Integral/Cliente_Admin/imagenes/logo.ico" type="image/x-icon">
        <script type="text/javascript" src="js/jquery-1.9.0.min.js"></script>
        <script type="text/javascript" src="js/pekeUpload.js"></script>
        <title>Cliente Administrador</title>
    </head>
    <body>
        <br>
        <br>
         
    <center><img src="/Computo_Integral/Cliente_Admin/imagenes/computo.jpg " 
                 style="height: 100px ; width: 700px; " id="computo"></center>
   
    <div class="mainWrap">

        <a id="touch-menu" class="mobile-menu" href="#"><i class="icon-reorder"></i>Menu</a>

        <nav>
            <ul class="menu" style="text-align: center;">
                <li><a href="#">Reportes</a>
                    <ul class="sub-menu">
                        <li><a href="/Computo_Integral/Cliente_Admin/agregar/nuevo_reporte.php">Nuevo</a></li>
                        <li><a href="/Computo_Integral/Cliente_Admin/editar/editar_reporte.php">Modificar</a></li>
                        <li><a href="/Computo_Integral/Cliente_Admin/pendientes/reportes_pendientes.php">Pendientes</a></li>
                        <li><a href="/Computo_Integral/Cliente_Admin/eliminar/eliminar_reportes.php">Eliminar</a></li>
                        <li><a href="/administador/cerrar/cerar_repoirtes.php">Cerrar</a></li>
                    </ul>
                </li>
                <li><a href="#">Empleado</a>
                    <ul class="sub-menu">
                        <li><a href="/Computo_Integral/Cliente_Admin/agregar/empleado.php">Nuevo</a></li>
                        <li><a href="/Computo_Integral/Cliente_Admin/editar/editar_empleado.php">Modificar</a></li>
                        <li><a href="/Computo_Integral/Cliente_Admin/agregar/eiminar_empleado.php">Eliminar</a></li>

                    </ul>
                </li>
                <li><a  href="/Computo_Integral/Cliente_Admin/iframes/datos_personales.php">Datos Personales</a></li>
                <li><a  href="/Computo_Integral/cerrar_sesion.php">Cerrar Sesion</a></li>

            </ul>
        </nav>


    </div>
    <br>


    <div id="contenedor">	
        <div id="perfilProfesor">


            <iframe src="/Computo_Integral/Cliente_Admin/iframes/inicio.php" id='datosProfesor'>
            <p>Your browser does not support iframes.</p>
            </iframe>

        </div>
    </div>

    <br>

    <footer>
        <h3>Computo Integral México</h3>
        <p>Respectivo contenido en el pie de la pagina o una breve ayuda para el usuario etc, etc...</p>
    </footer>	
</body>
</html>