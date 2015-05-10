<!DOCTYPE html>
<html>
    <head>
        <!-- Metas -->
        <!--<meta charset="utf-8">-->
        <meta name="author" content="Equipo1">	
        <meta name="descryption" content="">
        <meta name="keywords" content="">
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <meta http-equiv="content-type" content="text/html; charset=ISO-8859-1"/>
        <meta name="robots" content="index, follow">
        <!-- Links -->
        <link href="css/custom.css" rel="stylesheet">

        <link rel="stylesheet" type="text/css" href="/Computo_Integral/administrador/css/reporte.css">

        <link href='http://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>
        <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
        <link rel="icon" href="favicon.ico" type="image/x-icon">
        <script type="text/javascript" src="js/jquery-1.9.0.min.js"></script>
        <script type="text/javascript" src="js/pekeUpload.js"></script>


        <title>Computo Integral México</title>

    </head>
    <body id="cuerpo">
        <?php
        //   session_start();
        //    error_reporting(E_ALL);
        // ini_set('display_errors', '1');
        /* if (isset($_SESSION['s_rfc'])) {
          $rfc=$_SESSION['s_rfc']; */
        $link = mysql_connect('localhost', 'root', '')or die('No se pudo conectar: ' . mysql_error());
        $db = mysql_select_db('computo_integral', $link) or die('No se pudo seleccionar la base de datos');
        $consulta = mysql_query("select *from empleado_ci WHERE rfc ='CAEA891208' ");
        if ($row = mysql_fetch_row($consulta))
            $nombre = utf8_encode($row[1]);
        $a_paterno = utf8_encode($row[2]);
        $a_materno = utf8_encode($row[3]);
        $fecha_nac = $row[4];
        $rfc = $row[0];
        $curp = $row[5];
        $mail = $row[6];
        $num_cel = $row[7];
        $num_casa = $row[8];
        {


            echo "<form method='post' action='editar_empleado.php' name='form1' enctype='multipart/form-data'class='forms'> ";
            echo "
				      <div class='datos'>
                      <fieldset class='fieldsets'>
                       <legend><label class='legends'>Datos Personales</label></legend>
                        <label class='labels' >Nombre(s): </label>
						<input type='text' value='" . $nombre . "' class='inputs'  name='nombre' disabled>
						<label class='labels'>Apellido Paterno:</label>
						<input type='text' value='" . $a_paterno . "' class='inputs'  name='ap_paterno' disabled>
						<label class='labels'>Apellido Materno:</label>
						<input type='text' value='" . $a_materno . "' class='inputs'  name='ap_materno' disabled>
						<br>
                         <label class='labels'>Fecha Nacimiento.:</label>
						 <input type='date' class='inputs' value='" . $fecha_nac . "' name='fecha_nac' disabled>
                       
                         <label class='labels'>Teléfono Casa:</label>
						 <input type='text' name='tel_casa' class='inputs' value='" . $num_casa . "' name='tel_casa' disabled>
                         <label class='labels'>Teléfono Cel:</label>
						 <input type='text' name='tel_cel' class='inputs' value='" . $num_cel . "' name='tel_cel' disabled>
                          <br>
                          <label class='labels' >CURP: </label>
						 <input type='text' value='" . $curp . "' class='inputs'  name='rfc' disabled>
                         <label class='labels' >RFC: </label>
						 <input type='text' value='" . $rfc . "' class='inputs'  name='rfc' disabled>
                        <br>
                       
                         <label class='labels'>E-mail:</label>
						 <input type='text' class='inputs' value='" . $mail . "' name='email'  style='width:230px;' disabled>
                	  </fieldset>
                             <br>
                    ";
        }
        $consulta2 = mysql_query("select * from direccion_empleado_ci WHERE rfc ='CAEA891208' ");
        if ($row = mysql_fetch_row($consulta2)) {
            $localidad = utf8_encode($row[4]);
            echo "<fieldset class='fieldsets'>
            
               <legend><label class='legends'>Dirección</label></legend>
                   <div>
					   
                       <label class='labels'>Calle:</label>
					   <input type='text' class='inputs' value='" . $row[0] . "' name='direccion' disabled>
                       <label class='labels'>Colonia:</label>
					   <input type='text' class='inputs' value='" . $row[1] . "' name='direccion' disabled>
                       <label class='labels'>Codigo Postal:</label>
					   <input type='text' class='inputs' value='" . $row[6] . "' name='direccion' disabled>
                    <br>
                       <label class='labels'>Num. Int:</label>
					   <input type='text' class='inputs' value='" . $row[3] . "' name='direccion' disabled>
                       <label class='labels'>Num. Ext:</label>
					   <input type='text' class='inputs' value='" . $row[2] . "' name='direccion' disabled>
                    <br>
                       <label class='labels'>Localidad:</label>
					   <input type='text' class='inputs' value='" . $localidad . "' name='direccion' disabled>
                       <label class='labels'>Del Mun:</label>
					   <input type='text' class='inputs' value='" . $row[5] . "' name='direccion' disabled>
            
                    </fieldset>
                           <br>
                     <input type='submit' value='Modificar'  id='modificar'/>
					</div>
                             
				    <br>";
        }
        // }
        ?>



    </body>
</html>