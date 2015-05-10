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
       $nombre_empresa=$_POST['nombre_empresa'];
       $rfc_empresa=$_POST['rfc_empresa'];
       $calle=$_POST['calle'];
       $colonia=$_POST['colonia'];
       $num_ext=$_POST['num_ext'];
       $num_int=$_POST['num_int'];
       $cod_postal=$_POST['cod_post'];
       $localidad=$_POST['localidad'];
       $del_mun=$_POST['del_mun'];
       $rfc_resp1=$_POST['rfc_resp1'];
       $nombre_resp1=$_POST['nombre_resp1'];
       $ap_pat_resp1=$_POST['ap_pat_resp1'];
       $ap_mat_resp1=$_POST['ap_mat_resp1'];
       $tel_cel_resp_1=$_POST['tel_cel_resp1'];
       $tel_of_resp_1=$_POST['tel_of_resp1'];
       $ext_resp_1=$_POST['tel_cel_resp1'];
       $mail_resp_1=$_POST['mail_resp1'];
       $pwd_resp1=$_POST['pwd_resp1'];
       $pwd2_resp1=md5($pwd_resp1);
    
       
       // hacemos la conexion
$con = mysqli_connect("localhost", "root", "", "computo_integral");
// Check connection
if (mysqli_connect_errno()) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

// ...some PHP code for database "my_db"...
// Change database to "test"
mysqli_select_db($con, "computo_integral");

// ...some PHP code for database "test"...
$ins2 = mysqli_query($con, "INSERT INTO empresa (rfc_empresa,nombre_empresa,calle,colonia,num_ext,num_int,cod_post,localidad,del_mun) 
VALUES ('$rfc_empresa','$nombre_empresa','$calle','$colonia','$num_ext','$num_int','$cod_postal','$localidad','$del_mun')");
$ins4 = mysqli_query($con, "INSERT INTO responsable_empresa (rfc_resp1,user_name_resp1,nombre_resp1,ap_pat_resp1,ap_mat_resp1,tel_cel_resp1,tel_of_resp1,ext_resp1,pass_resp1,rfc) 
VALUES ('$rfc_resp1','$mail_resp_1','$nombre_resp1','$ap_pat_resp1','$ap_mat_resp1','$tel_cel_resp_1','$tel_of_resp_1','$ext_resp_1','$pwd2_resp1')");

mysqli_close($con);
?>
    
      

    

     ?>
    <!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="author" content="Equipo1">	
		<meta name="descryption" content="">
		<meta name="keywords" content="">
		<meta name="robots" content="index, follow">
	<link rel="stylesheet" type="text/css" href="/administrador/css/reporte.css">
        

	</head>
	<body id="cuerpo">
<p>La Empresa <?php echo $nombre_empresa ?>
    echo "<br>";
    con el RFC <?php $rfc_empresa?>
    echo "<br>";
    y con el usario <?php echo $nombre_resp1;
    echo $ap_pat_resp1;
    echo $ap_mat_resp1; ?>
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
