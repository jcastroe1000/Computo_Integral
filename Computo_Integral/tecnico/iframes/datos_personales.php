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
		<link rel="stylesheet" type="text/css" href="/Computo_Integral/tecnico/css/style.css">
        <link rel="stylesheet" type="text/css" href="/Computo_Integral/tecnico/css/style3.css">
		<link rel="stylesheet" type="text/css" href="/Computo_Integral/tecnico/css/reporte.css">
		<link href='http://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>
		<link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
		<link rel="icon" href="favicon.ico" type="image/x-icon">
		<script type="text/javascript" src="js/jquery-1.9.0.min.js"></script>
		<script type="text/javascript" src="js/pekeUpload.js"></script>
		

		<title>Computo Integral México</title>
	</head>
	<body>
        <center><img src="/Computo_Integral/tecnico/imagenes/computo.jpg " style="height: 100px ; width: 700px; "></center>
			
		


          <div class="mainWrap">
 
 <a id="touch-menu" class="mobile-menu" href="#"><i class="icon-reorder"></i>Menu</a>
 	
    <nav>
    <ul class="menu" style="text-align: center;">
   <li><a href="#">Reportes</a>
   <ul class="sub-menu">
   <li><a href="/Computo_Integral/tecnico/agregar/nuevo_reporte.php">Nuevo</a></li>
   <li><a href="/Computo_Integral/tecnico/editar/editar_reporte.php">Modificar</a></li>
   <li><a href="/Computo_Integral/tecnico/pendientes/reportes_pendientes.php">Pendientes</a></li>
   <li><a href="/Computo_Integral/tecnico/eliminar/eliminar_reportes.php">Eliminar</a></li>
   <li><a href="/administador/cerrar/cerar_repoirtes.php">Cerrar</a></li>
   </ul>
   </li>
   <li><a  href="/Computo_Integral/tecnico/iframes/datos_personales.php">Datos Personales</a></li>
  <li><a  href="/cerrar_sesion.php">Cerrar Sesion</a></li>
 
  </ul>
  </nav>
  
        
 </div>
        <br>



		<div id="contenedor">	
			

			
			<div id="perfilProfesor">
				<div id="wraper">
				<?php

						$link = mysql_connect('localhost', 'root', '')or die('No se pudo conectar: ' . mysql_error());
						
						$db=mysql_select_db('computo_integral', $link) or die('No se pudo seleccionar la base de datos');

						$consulta = mysql_query("select * from empleado_computo_integral ");

						if($filas = mysql_fetch_row($consulta))
						{   
    echo "<form method='post' action='datos_personales.php' name='form1' enctype='multipart/form-data' class='forms'>";
	echo "</form>";
						}
					?>
					
					<iframe src="../iframes/datos_empleado.php" id='datosProfesor'>
  					
							<p>Your browser does not support iframes.</p>
					</iframe>
				</div>
			</div>
		</div>

	</body>
</html>