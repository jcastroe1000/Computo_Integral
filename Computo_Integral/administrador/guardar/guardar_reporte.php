<?php 
 error_reporting(E_ALL);
/*    if(isset($_POST['email'])) {

    // Debes editar las próximas dos líneas de código de acuerdo con tus preferencias
    $email_to = $_POST['email'];
    $email_nombre = $_POST['nombre'] . "\n";
    $email_paterno = $_POST['ap_paterno'] . "\n";
    $email_materno = $_POST['ap_materno'] . "\n";
    $email_usuario = $_POST['rfc'] . "\n";
    $email_pass = $_POST['pw'] . "\n";
    $email_subject = "Confirmacion Registro En Sistema";

    // Aquí se deberían validar los datos ingresados por el usuario
    if(!isset($_POST['nombre']) ||
    !isset($_POST['ap_paterno']) ||
    !isset($_POST['ap_materno']) ||
    !isset($_POST['rfc']) ||
    !isset($_POST['pw']) ||
    !isset($_POST['email'])){

    echo "<b>Ocurrió un error y el formulario no ha sido enviado. </b><br />";
    echo "Por favor, vuelva atrás y verifique la información ingresada<br />";
    die();
    }

    $email_message = "Bienvenido(a):";
    $email_message .= "<br>";
    $email_message .= "Correo De Confirmacion Al Sistema : ";
    $email_message .= "<br>";
    $email_message .= "Bienvenido Al Sistema Promoción 2014. ";
    $email_message .= "<br>";
    $email_message .= "Tus Datos son los siguientes: ";
    $email_message .= "<br>";
    $email_message .= "Nombre: " . $_POST['nombre'] . "\n";
    $email_message .=  $_POST['ap_paterno'] . "\n";
    $email_message .=  $_POST['ap_materno'] . "<br>";
    $email_message .= "Usuario: " . $_POST['rfc'] . "<br>";
    $email_message .= "Contraseña: " . $_POST['pw'] . "<br>";






    require 'PHPMailerAutoload.php';

    //Create a new PHPMailer instance
    $mail = new PHPMailer();
    // Set PHPMailer to use the sendmail transport
    //$mail->isSendmail();
    //Set who the message is to be sent from
    $mail->setFrom('registro@ipnpromociondocente.tk', 'Registro');
    //Set an alternative reply-to address
    $mail->addReplyTo('registro@ipnpromociondocente.tk', 'Respuestas');
    //Set who the message is to be sent to
    $mail->addAddress($email_to, $email_nombre);
    //Set the subject line
    $mail->Subject = $email_subject;

    $mail->msgHTML($email_message);


    //send the message, check for errors
    if (!$mail->send()) {
        //echo "Error: " . $mail->ErrorInfo;
    } else {
        //echo "Correo Enviado!";
    }
    }*/

    //error_reporting(E_ALL);
    //ini_set('display_errors', '1');

    // Recuperamos la sesiones y la almacenamos en variables
        $elaboracion= $_POST['elaboracion']; 
	    $servico= $_POST['servicio']; 
        $cierre= $_POST['cierre'];
        $nombre_empresa= $_POST['nombre_empresa'];
        $nombre= $_POST['nombre'];
        $ap_paterno=$_POST['ap_paterno'];
        $ap_materno=$_POST['ap_materno'];
        $equipo=$_POST['equipo'];
        $area=$_POST['area'];
        $fallas_reportadas=$_POST['fallas_reportadas'];
        $tipo_falla=$_POST['tipo_falla'];
        $tipo_servicio=$_POST['tipo_servicio'];
        $falla_en= $_POST['falla_en'];
        $marca=$_POST ['marca'];
        $sist_op=$_POST['sist_op'];
        $modelo=$_POST['modelo'];
        $num_serie=$_POST['num_serie'];
        $act_realizadas=$_POST['act_realizadas'];
        $tec_asignado=$_POST['tec_asignado'];
        $nombre_cliente=$_POST['nombre_cliente'];
        $paterno_cliente=$_POST['paterno_cliente'];
        $materno_cliente=$_POST['materno_cliente'];
        $conformidad=$_POST['conformidad'];
        $comentarios=$_POST['comentarios'];
        $nivel_satisfaccion=$_POST['nivel_satisfaccion'];
        $estatus=$_POST['estatus'];




    
      

    

    // hacemos la conexion

   $link = mysql_connect('localhost', 'root', '')or die('No se pudo conectar: ' . mysql_error());
    //		$db=mysql_select_db('promoprof', $link) or die('No se pudo seleccionar la base de datos');
    //$link=	mysql_connect('mysql.nixiweb.com', 'u886750565_root', 'QXdSM7jeUt')or die('No se pudo conectar: ' . mysql_error());
    $db=mysql_select_db('computo_integral', $link) or die('No se pudo seleccionar la base de datos');


   /* $insertar = mysql_query("INSERT INTO empleado_ci3(RFC,nombre,apellido_p,apellido_m,fecha_nac,curp,email,num_cel,num_casa,password,es_admin,es_soporte,es_adtivo)
    VALUES('$rfc','$nombre','$ap_paterno','$ap_materno','$fecha_nac','$curp','$email','$tel_cel','$tel_casa','$pass2','$es_admin',
    '$es_tec','$es_adtivo')");
    
 


 /*   $insertar2=mysql_query("INSERT INTO direccion_empleado_ci2(RFC,calle,colonia,num_ext,num_int,ent_fed,del_mun,cod_post)VALUES('$rfc','$calle','$colonia','$num_int','$num_ext','$localidad','$delmun','$cod_post')");
    //if (!$insertar2){echo "Error al guardar";}else{echo "Guardado con exito";}
   */ ?>
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
<p>El Empleado <?php echo $nombre + $ap_paterno + $ap_materno?>
    con el RFC <?php $rfc?>
    y con el usario <?php $email?>
    fue Registro Exitoso</p>
        <p>se le ha enviado un correo para notificarle que ya esta dado de alta</p>
               
        <p>¿Que deseas realizar?</p>

          <a href="/Computo_Intergral/administrador/iframes/empleado_ci.php"><input type="button" value="Agregar Otro Empleado"> </a>
          <a href="/Computo_Intergral/administrador/principal/principal_admin.php"><input type="button" value="Regresar Al Menu Principal"> </a>
                           <br>
					              <br>
					       
                    </form>
					</div>
				
			
	</body>
</html>
