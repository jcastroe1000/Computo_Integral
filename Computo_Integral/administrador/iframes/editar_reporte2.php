<?php
  /*  session_start();
     error_reporting(E_ALL);
    ini_set('display_errors', '1');
$link = mysql_connect('', '', '')or die('No se pudo conectar: ' . mysql_error());
			$db=mysql_select_db('', $link) or die('No se pudo seleccionar la base de datos');
   /*           $rfc=$_SESSION['s_rfc'];    
   
        if (isset($_SESSION['s_rfc'])) {
    		$consulta = mysql_query("select * from servicio_requerido  WHERE rfc ='$id_servicio' ");
            $filas = mysql_fetch_row($consulta);
            $fallas_encontradas= $filas[2];
            $marca= $filas[3];
            $sist_op= $filas[4];
            $tipo_falla= $filas[5];
            $tipo_servicio=$filas[6]];
            $falla_en=$filas[7];
            $fallas_encontradas=$filas[8];
            $modelo=$filas[9];
            $num_serie=$filas[10];
            $act_realizadas=$filas[11];
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
                    
					
                   <!-- <h2>Nuevo Reporte</h2>-->
					
					<div class='datos'>
            
				
                    	            <fieldset class='fieldsets'>
                        <legend><label class='legends'>Servicio Requerido:</label></legend>
                        <br>
                       <label class='labels'>Fallas Reportadas:</label>
                            <textarea name="reportadas" rows="5" cols="60" size="255" id="reportadas"  ></textarea>
							
                            <br>
                       <label  class='labels'>Tipo De Falla:</label>
						<select id="tipo_falla" name="falla" >
                        <option value="<?php echo $tipo_falla ?>" selected><?php echo $tipo_falla?> </option>

                         <option value="">Seleccione</option  >
                         <option value="R">Recurente</option  >          
                         <option value="A">Aleatoria</option >
                         <option value="N">Nueva</option >
                        </select>
                    
					
                        <label  class='labels'>Tipo De Servicio:</label>
						<select id='tipo_servicio' name="">
                        <option value="<?php echo $tipo_servicio ?>" selected><?php echo $tipo_servicio?> </option>
                        <option value="">Seleccione</option  >
                        <option value="G">Garantia</option>
                        <option value="P">Poliza</option >
                        <option value="O">Otra</option >
                        </select>
                    
                        <label class='labels'>Falla en:</label>
                        <select name="" required id='falla_en'>
                        <option value="<?php echo $falla_en?>" selected><?php echo $falla_en ?> </option >
                        <option value="">Seleccione</option  >
                        <option value="S">Software</option  >
                        <option value="H">Hardware</option >
                        <option value="O">Otros</option >
                            
                        </select> 
                            <br>
                            <br>
                            <label class='labels'>Fallas Reportadas:</label>
                            <textarea name="reportadas" rows="5" cols="60" size="255" id="reportadas"  ></textarea>
                              <br>
                            <label class='labels'>Marca:</label>
                            <select name="" required id='marca'>
                              <option value="<?php echo $sist_op?>" selected><?php echo $marca ?> </option >
                              <option value="WD7"></option  >
                              <option value="WD8"></option  >
                              <option value="MO"></option >
                              <option value="O">Otros</option >
                            </select>
                            <label class='labels'>Modelo:</label>
							  <input type='text' class='inputs2' value="<?php echo $modelo?>"  name='modelo' >
                            <label class='labels'>Sistema Operativo:</label>
                            <select name="" required id='sist_op'>
                              <option value="<?php echo $sist_op?>" selected><?php echo $sist_op ?> </option >
                              <option value="Windows 7">Windows 7</option  >
                              <option value="Windows 8">Windows 8</option  >
                              <option value="MAC OS">MAC OS</option >
                              
                            </select> 
                        
                            <label class='labels'>Número De Serie:</label>
							<input type='text' class='inputs2' value="<?php echo $num_serie?>"  name='num_serie' >
                            <br>
                             <label class='labels'>Actividades Realizadas:</label>
                            <textarea name="act_realizadas" rows="5" cols="60" size="255" id="reportadas"  ></textarea>
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
