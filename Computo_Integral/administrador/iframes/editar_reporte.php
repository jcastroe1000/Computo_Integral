<?php
 /*    session_start();
     error_reporting(E_ALL);
    ini_set('display_errors', '1');
$link = mysql_connect('', '', '')or die('No se pudo conectar: ' . mysql_error());
			$db=mysql_select_db('', $link) or die('No se pudo seleccionar la base de datos');
              /*$rfc=$_SESSION['s_rfc'];    
   
        if (isset($_SESSION['s_rfc'])) {
    		$consulta = mysql_query("select * from orden_servicio  WHERE id_orden ='$id_orden' ");
            $filas = mysql_fetch_row($consulta);
            $elaboracion= $filas[1];
            $servicio= $filas[2];
            $cierre= $filas[3];
            $poliza_empresarial= $filas[4];
            $nombre=$filas[5];
            $apellido_paterno=$filas[6];
            $apellido_materno=$filas[7];
            $equipo=$filas[8];
            $area=$filas[9];
           
   }

            
   */         
          
            ?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="author" content="Equipo1">	
		<meta name="descryption" content="">
		<meta name="keywords" content="">
		<meta name="robots" content="index, follow">
	<link rel="stylesheet" type="text/css" href="/Computo_Intergral/administrador/css/reporte.css">
        

	</head>
	<body id="cuerpo">
		
				<form name="formulario" method='post' action='actualizacion.php' enctype='multipart/form-data' class='forms'>
                    
					
                    <h2>Nuevo Reporte</h2>
				<!--<HR width=80% align='center' size=1 color='#D0D0D0'>-->	

					<div class='datos'>
                        <fieldset class='fieldsets'>
                        <legend><label class='legends'>Fecha:</label></legend>
                         <label class='labels' >Elaboración: </label>
			 <input type='datetime-local'  value="<?php echo $elaboracion?>" class='inputs' id='elaboracion'  name='elaboracion' style="width: 200px" >
                        
                            <label class='labels' >Servicio: </label>
			 <input type='datetime-local'  value="<?php echo $servicio?>" class='inputs' id='servicio'  name='servicio' style="width: 200px" >
                       
                             <label class='labels' >Cierre: </label>
			 <input type='datetime-local'  value="<?php echo $cierre?>" class='inputs' id='servicio'  name='servicio' style="width: 200px" >
                  
                        
                        <br>
                        </fieldset>
						<br>
					
                    	<fieldset class='fieldsets'>
                        <legend><label class='legends'>Detalles Del Solicitante Del Servicio</label></legend>
                            <br>
                            <label class='labels'>Poliza Empresarial:</label>
							<input type='text' class='inputs' value="<?php echo $poliza_empresarial?>"  name='poliza_empresarial' >
                            <br>
                            <label class='labels'>Nombre:</label>
							<input type='text' class='inputs' value="<?php echo $nombre?>"  name='nombre' >
                            <label class='labels'>Apellido Paterno:</label>
							<input type='text' class='inputs' value="<?php echo $apellido_paterno?>"  name='ap_paterno' >
                            <label class='labels'>Apellido Materno:</label>
							<input type='text' class='inputs' value="<?php echo $apellido_materno?>"  name='ap_materno' >
                            <br>
                            <label class='labels'>Nombre Equipo:</label>
							<input type='text' class='inputs' value="<?php echo $equipo?>"  name='equipo' >
                            <label class='labels'>Area:</label>
							<input type='text' class='inputs' value="<?php echo $area?>"  name='area' >
                            
						   
           
                        </fieldset>
					</div>
					<br>
                    
						<br>
						<br>
                    <input type="submit" value="Confirmar"  id='modificar'/>
                    </form>
					</div>
				
			
	</body>
</html>
