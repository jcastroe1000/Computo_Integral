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
        //$db=mysql_select_db('reportes_computo_integral',$enlace)or die('No se pudo seleccionar la base de datos :(');
        
        //$link = mysql_connect('localhost', 'root', '')or die('No se pudo conectar: ' . mysql_error());
		//$db=mysql_select_db('reportes_computo_integral', $link) or die('No se pudo seleccionar la base de datos');


    ?>
  <form method="post" action="guardar_empleado.php">

<input type="hidden" name="nombre_empresa" value="<?php echo $_POST['nombre_empresa']; ?>">
	<input type="hidden" name="razon_social" value="<?php echo $_POST['razon_social']; ?>">
    <input type="hidden" name="rfc" value="<?php echo $_POST['rfc']; ?>">
	<input type="hidden" name="calle" value="<?php echo $_POST['calle']; ?>">
    <input type="hidden" name="colonia" value="<?php echo $_POST['colonia']; ?>">
    <input type="hidden" name="num_ext" value="<?php echo $_POST['num_ext']; ?>">
    <input type="hidden" name="cod_post" value="<?php echo $_POST['cod_post']; ?>">
    <input type="hidden" name="localidad" value="<?php echo $_POST['localidad']; ?>">
    <input type="hidden" name="del_mun" value="<?php echo $_POST['del_mun']; ?>">
    <input type="hidden" name="nombre" value="<?php echo $_POST['nombre']; ?>">
    <input type="hidden" name="ap_paterno1" value="<?php echo $_POST['ap_paterno1']; ?>">
    <input type="hidden" name="ap_materno1" value="<?php echo $_POST['ap_materno1']; ?>">
    <input type="hidden" name="tel_cel" value="<?php echo $_POST['tel_cel']; ?>">
    <input type="hidden" name="tel_of" value="<?php echo $_POST['tel_of']; ?>">
    <input type="hidden" name="ext" value="<?php echo $_POST['ext']; ?>">
    <input type="hidden" name="mail" value="<?php echo $_POST['email']; ?>">
    <input type="hidden" name="user_name" value="<?php echo $_POST['user_name']; ?>">
    <input type="hidden" name="pw" value="<?php echo $_POST['pw']; ?>">
   
      <form>
    
<?php ?> confirma los datos del usuario<br /></font>
        <b>Datos Del Empleado</b>
          <br>
        <b>Nombre:</b> <?php echo $_POST['nombre'] . $_POST['ap_paterno'] . $_POST['ap_materno']?><br />
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