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
		<link rel="stylesheet" type="text/css" href="/administrador/css/style.css">
		<link rel="stylesheet" type="text/css" href="/administrador/css/reporte.css">
         <link rel="stylesheet" type="text/css" href="/administrador/css/style3.css">
		<link href='http://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>
		<link rel="icon" href="/administrador/imagenes/logo.ico" type="image/x-icon">
        <script type="text/javascript" src="js/jquery-1.9.0.min.js"></script>
		<script type="text/javascript" src="js/pekeUpload.js"></script>

		<title>Instituto Politécnico Nacional - Sistema de Promoción para la Docencia</title>
	</head>
	<body>
		<header>
		<center><img src="/administrador/imagenes/computo.jpg " style="height: 100px ; width: 700px; "></center>
		</header>

		<div class="mainWrap">
 
 <a id="touch-menu" class="mobile-menu" href="#"><i class="icon-reorder"></i>Menu</a>
 	
    <nav>
    <ul class="menu" style="text-align: center;">
   <li><a href="#">Reportes</a>
   <ul class="sub-menu">
   <li><a href="/administrador/agregar/nuevo_reporte.php">Nuevo</a></li>
   <li><a href="/administrador/editar/editar_reporte.php">Modificar</a></li>
   <li><a href="/administrador/eliminar/eliminar_reporte.php">Eliminar</a></li>
   <li><a href="/administrador/cerrar/cerrar_reporte.php">Cerrar</a></li>
   </ul>
   </li>
  <li><a href="#">Empresa</a>
   <ul class="sub-menu">
   <li><a href="/administrador/agregar/nueva_empresa.php">Nueva Empresa</a></li>
   <li><a href="/administrador/editar/editar_empresa.php">Modificar</a></li>
   <li><a href="/administrador/cerrar/cerrar_empresa.php">Eliminar</a></li>
   
   </ul>
   </li>
   <li><a href="#">Empleado</a>
   <ul class="sub-menu">
   <li><a href="/administrador/agregar/empleado_ci.php">Nuevo</a></li>
   <li><a href="/administrador/editar/editar_empleado.php">Modificar</a></li>
   <li><a href="/administrador/eliminar/eliminar_empleado.php">Eliminar</a></li>
   
   </ul>
   </li>
  <li><a href="/administrador/principal/principal_admin.php">Principal</a></li>
  <li><a  href="/cerrar_sesion.php">Cerrar Sesion</a></li>


 
  </ul>
  </nav>
  
        
 </div>

		<div id="contenedor">	
			

			<div id="perfilProfesor">
				
					<form method='post' action='actualizacion.php' name='form1' enctype='multipart/form-data' class='forms'>
						
					</form>

					<iframe src="../iframes/nuevo_reporte2.php" id='datosProfesor'>
						
					</iframe>
				
			</div>
		</div>

		<footer>
			<h3>Computo Integral México</h3>
			<p>Respectivo contenido en el pie de la pagina o una breve ayuda para el usuario etc, etc...</p>
		</footer>	
	</body>
</html>