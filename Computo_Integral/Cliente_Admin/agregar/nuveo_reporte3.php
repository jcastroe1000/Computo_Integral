<!DOCTYPE html>
<html>
	<head>
		<!-- Metas -->
		<meta charset="utf-8">
		<meta name="author" content="">	
		<meta name="descryption" content="">
		<meta name="keywords" content="">
		<meta name="robots" content="index, follow">
		<!-- Links -->
		<link href="css/custom.css" rel="stylesheet">
		<link rel="stylesheet" type="text/css" href="/Computo_Integral/Cliente_Admin/css/style.css">
		<link rel="stylesheet" type="text/css" href="/Computo_Integral/Cliente_Admin/css/reporte.css">
         <link rel="stylesheet" type="text/css" href="/Computo_Integral/Cliente_Admin/css/style3.css">
		<link href='http://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>
		<link rel="icon" href="/Computo_Integral/Cliente_Admin/imagenes/logo.ico" type="image/x-icon">
		<script type="text/javascript" src="js/jquery-1.9.0.min.js"></script>
		<script type="text/javascript" src="js/pekeUpload.js"></script>
	

		<title></title>
	</head>
	<body>
		<header>
	<center><img src="/Computo_Integral/Cliente_Admin/imagenes/computo.jpg " style="height: 100px ; width: 700px; "></center>
		</header>

		
		<div class="mainWrap">
 
 <a id="touch-menu" class="mobile-menu" href="#"><i class="icon-reorder"></i>Menu</a>
 	
    <nav>
    <ul class="menu" style="text-align: center;">
   <li><a href="#">Reportes</a>
   <ul class="sub-menu">
   <li><a href="/Computo_Integral/Cliente_Admin/agregar/nuevo_reporte.php">Nuevo</a></li>
   <li><a href="/Computo_Integral/Cliente_Admin/editar/editar_reporte.php">Modificar</a></li>
   <li><a href="/Computo_Integral/Cliente_Admin/eliminar/eliminar_reporte.php">Eliminar</a></li>
   <li><a href="/Computo_Integral/Cliente_Admin/cerrar/cerrar_reporte.php">Cerrar</a></li>
   </ul>
   </li>
  <li><a href="#">Empresa</a>
   <ul class="sub-menu">
   <li><a href="/Computo_Integral/Cliente_Admin/agregar/nueva_empresa.php">Nueva Empresa</a></li>
   <li><a href="/Computo_Integral/Cliente_Admin/editar/editar_empresa.php">Modificar</a></li>
   <li><a href="/Computo_Integral/Cliente_Admin/cerrar/cerrar_empresa.php">Eliminar</a></li>
   
   </ul>
   </li>
   <li><a href="#">Empleado</a>
   <ul class="sub-menu">
   <li><a href="/Computo_Integral/Cliente_Admin/agregar/empleado_ci.php">Nuevo</a></li>
   <li><a href="/Computo_Integral/Cliente_Admin/editar/editar_empleado.php">Modificar</a></li>
   <li><a href="/Computo_Integral/Cliente_Admin/eliminar/eliminar_empleado.php">Eliminar</a></li>
   
   </ul>
   </li>
  <li><a href="/Computo_Integral/Cliente_Admin/principal/principal_admin.php">Principal</a></li>
  <li><a  href="/cerrar_sesion.php">Cerrar Sesion</a></li>


 
  </ul>
  </nav>
  
        
 </div>

		<div id="contenedor">	
			

			<!-- PERFIL PROFESOR -->
			<div id="perfilProfesor">
				
					<form method='post' action='actualizacion.php' name='form1' enctype='multipart/form-data' class='forms'>
						
					</form>

					<iframe src="../iframes/nuevo_reporte3.php" id='datosProfesor'>
						
					</iframe>
				
			</div>
		</div>

		<footer>
			<h3>Computo Integral México</h3>
			<p>Respectivo contenido en el pie de la pagina o una breve ayuda para el usuario etc, etc...</p>
		</footer>	
	</body>
</html>