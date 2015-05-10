<?php
  /*     session_start();
     error_reporting(E_ALL);
    ini_set('display_errors', '1');
$link = mysql_connect('', '', '')or die('No se pudo conectar: ' . mysql_error());
			$db=mysql_select_db('', $link) or die('No se pudo seleccionar la base de datos');
              $rfc=$_SESSION['s_rfc'];    
   
        if (isset($_SESSION['s_rfc'])) {
    		$consulta = mysql_query("select * from cierre_reporte  WHERE rfc ='$rfc' ");
            $filas = mysql_fetch_row($consulta);
            $tec_asignado= $filas[3];
            $nombre_cliente= $filas[4];
            $ap_cliente= $filas[5];
            $am_cliente= $filas[6];
            $comentarios=$filas[7]
            $comentarios=$filas[8];
            $satisfaccion=$filas[9];
            
   }
   */
          

            ?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="author" content="">	
		<meta name="descryption" content="">
		<meta name="keywords" content="">
		<meta name="robots" content="index, follow">
		<link rel="stylesheet" type="text/css" href="/Computo_Intergral/administrador/css/reporte.css">
        

	</head>
	<body id="cuerpo">
		
				<form name="formulario" method='post' action='actualizacion.php' enctype='multipart/form-data' class='forms'>
                    
					
                <!--    <h2>Nuevo Reporte</h2>-->
				

					<div class='datos'>
                                            <fieldset class="fieldsets">
                            <legend><label class='legends'>Cierre Del Reporte:</label></legend>
                            <label class='labels'>Tecnico Asignado:</label>
                        <select name="" required id='falla_en'>
                        <option value="<?php echo $tec_asignado?>" selected><?php echo $tec_asignado ?> </option >
                        <option value=""></option  >
                        <option value="S"></option  >
                        <option value="H"></option >
                        <option value="O"></option >
                        </select> 
                            <br>
                            <label class="labels">Nombre Cliente:</label>
                            <input type="text" class="inputs" value="<?php echo $nombre_cliente?>" name="nombre_cliente">
                            <label class="labels">Apellido Paterno:</label>
                            <input type="text" class="inputs" value="<?php echo $ap_cliente?>" name="nombre_cliente">
                            <label class="labels">Apellido Materno:</label>
                            <input type="text" class="inputs" value="<?php echo $ap_cliente?>" name="nombre_cliente">
                            <br>
                            <label class='labels2'>¿Esta Conforme con el servicio brindado?</label>
                        <select name="" required id='falla_en'>
                        <option value="<?php echo $conformidad?>" selected><?php echo $conformidad ?> </option >
                       <option value="S">Sí</option  >
                       <option value="N">No</option >      
                        </select> 
                            <br>
                            <br>
                          <label class='labels'>Comentarios:</label>
                            <textarea name="comentarios" rows="5" cols="60" size="255" id="reportadas"  ></textarea>
                           
                           
                            <label class='labels'>Nivel De Satisfaccion</label>
                           <select name="" required id='falla_en'>
                        <option value="<?php echo $satisfaccion?>" selected><?php echo $satisfaccion?> </option >
                        <option value="E">Excelente</option  >
                        <option value="B">Buena</option >
                        <option value="R">Regular</option >
                        </select> 
</fieldset>

					</div>
					<br>
                    
		
                    <input type="submit" value="Confirmar"  id='modificar'/>
                    </form>
					</div>
				
			
	</body>
</html>
