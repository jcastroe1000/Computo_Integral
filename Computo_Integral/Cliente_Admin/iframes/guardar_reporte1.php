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
	<link rel="stylesheet" type="text/css" href="style7.css">
        <link rel="stylesheet" type="text/css" href="style6.css">
		<link rel="stylesheet" type="text/css" href="perfil_prof2.css">
		<link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
		<link rel="icon" href="favicon.ico" type="image/x-icon">
		
		<title>Computo Integral México</title>
	</head>
	<body >
		<header>
			<div id="usermenu"></div>
			<div id="logos">
				<div id="contenedor-imagenes">
					
					<h1>Computo Integral México</h1>
					
				</div>
			</div>
			<nav>
				<ul>
					<li></li>
				</ul>
			</nav>
		</header>

	
		<div id="contenedor">	
			<div id="banner"></div>

		
				<div id="wraper">
	   <div id="cuerpo">			
	<div id="formulario">
    
        


    <?php
        //$enlace = mysqli_connect('localhost', 'root','') or die('No se pudo conectar: ' . mysql_error());
        //$db=mysql_select_db('promoprof',$enlace)or die('No se pudo seleccionar la base de datos :(');
        
        //$link = mysql_connect('localhost', 'root', '')or die('No se pudo conectar: ' . mysql_error());
		//$db=mysql_select_db('promoprof', $link) or die('No se pudo seleccionar la base de datos');


    ?>
  <form method="post" action="guardar.php">
<input type="hidden" name="elaboracion" value="<?php echo $_POST['elaboracion'];?>">  
           <input type="hidden" name="servicio" value="<?php echo $_POST['servicio'];?>">
           <input type="hidden" name="cierre" value="<?php echo $_POST['cierre'];?>">
           <input type="hidden" name="nombre_empresa" value="<?php echo $_POST['nombre_empresa'];?>">
           <input type="hidden" name="nombre" value="<?php echo $_POST['nombre'];?>">
           <input type="hidden" name="ap_paterno" value="<?php echo $_POST['ap_paterno'];?>">
           <input type="hidden" name="ap_materno" value="<?php echo $_POST['ap_materno'];?>">
           <input type="hidden" name="equipo" value="<?php echo $_POST['equipo'];?>">
           <input type="hidden" name="area" value="<?php echo $_POST['area'];?>">   
           <input type="hidden" name="reportadas" value="<?php echo $_POST['reportadas'];?>">   
           <input type="hidden" name="falla" value="<?php echo $_POST['falla'];?>"> 
           <input type="hidden" name="tipo_servicio" value="<?php echo $_POST['tipo_servicio'];?>"> 
           <input type="hidden" name="falla_en" value="<?php echo $_POST['falla_en'];?>">   
           <input type="hidden" name="reportadas" value="<?php echo $_POST['reportadas'];?>">                           
           <input type="hidden" name="marca" value="<?php echo $_POST['marca'];?>">  
           <input type="hidden" name="modelo" value="<?php echo $_POST['modelo'];?>">  
           <input type="hidden" name="sist_op" value="<?php echo $_POST['sist_op'];?>">  
           <input type="hidden" name="area" value="<?php echo $_POST['area'];?>">  
           <input type="hidden" name="num_serie" value="<?php echo $_POST['num_serie'];?>"> 
           <input type="hidden" name="act_realizadas" value="<?php echo $_POST['act_realizadas'];?>"> 
           <input type="hidden" name="tec_asignado" value="<?php echo $_POST['tec_asignado'];?>"> 
           <input type="hidden" name="act_realizadas" value="<?php echo $_POST['act_realizadas'];?>"> 
           <input type="hidden" name="nombre_cliente" value="<?php echo $_POST['nombre_cliente'];?>"> 
           <input type="hidden" name="paterno_cliente" value="<?php echo $_POST['paterno_cliente'];?>"> 
           <input type="hidden" name="materno_cliente" value="<?php echo $_POST['materno_cliente'];?>"> 
           <input type="hidden" name="conformidad" value="<?php echo $_POST['conformidad'];?>"> 
           <input type="hidden" name="comentarios" value="<?php echo $_POST['comentarios'];?>"> 
           <input type="hidden" name="nivel" value="<?php echo $_POST['nivel'];?>"> 

   
      
    
<?php ?> confirma los dato datos de la empresa<br /></font>
        <b>Datos Del Empleado</b>
        <b>Nombre:</b> <?php echo $_POST['nombre']?><br />
 	    <b>Apellido Paterno:</b> <?php echo $_POST['ap_paterno']?><br />
 		<b>Apellido Materno:</b> <?php echo $_POST['ap_materno']?><br />
        <b>RFC:</b> <?php echo $_POST['rfc']?><br/>
        <b>Fecha Nacimiento:</b> <?php echo $_POST['fecha_nac']?><br/>
        <b>Mail:</b> <?php echo $_POST['email']?><br/>
        <b>Telefono Casa:</b> <?php echo $_POST['tel_casa']?><br/>
        <b>Telefono Celular:</b> <?php echo $_POST['tel_cel']?><br/>
        <b>Nombre de Usuario:</b> <?php echo $_POST['username']?><br/>
        <b>¿Es técnico?:</b> <?php echo $_POST['es_tec']?><br/>

        <b>Direccion</b>
    	<b>Calle:</b> <?php echo $_POST['calle']?><br />
 		<b>Colonia:</b> <?php echo $_POST['colonia']?><br />
        <b>Numero Exterior:</b> <?php echo $_POST['num_ext']?><br />
		<b>Numero Interior:</b> <?php echo $_POST['num_int']?></b><br />
        <b>Codigo Postal:</b> <?php echo $_POST['cod_post']?></b><br />
        <b>Localidad:</b> <?php echo $_POST['localidad']?><br />
        <b>Delegacion/Municipio:</b> <?php echo $_POST['delmun']?><br />
        <font color="#99FF00">Si son correcto envia tu solicitud</font><br />
    <input type="submit" value="Confirmar" id="guardar"/>
 		</form>
 		<!--<form action="guardar.php" method="post">
 		<input type="submit" value="Confirmar" id="procesar"/>>
 		</form>-->
        </div>
    </div>
					
				</div>
		<footer>
			
		</footer>	
	</body>
</html>