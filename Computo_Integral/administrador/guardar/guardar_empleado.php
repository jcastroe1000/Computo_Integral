<?php error_reporting(E_ALL);
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
  } */

//error_reporting(E_ALL);
//ini_set('display_errors', '1');
// Recuperamos la sesiones y la almacenamos en variables
$rfc = $_POST['rfc']; //etc
$nombre = $_POST['nombre']; //etc
$ap_paterno = $_POST['ap_paterno'];
$ap_materno = $_POST['ap_materno'];
$fecha_nac = $_POST['fecha_nac'];
$tel_casa = $_POST['tel_casa'];
$tel_cel = $_POST['tel_cel'];
$curp = $_POST['curp'];
$pass = $_POST['pw'];
$pass2 = md5($pass);
$tipo_usuario= ($_POST['tipo_usuario']);
$email = $_POST['email'];
//direccion
$calle = $_POST['calle'];
$colonia = $_POST['colonia'];
$cod_post = $_POST['cod_post'];
$num_ext = $_POST['num_ext'];
$num_int = $_POST['num_int'];
$localidad = $_POST['localidad'];
$delmun = $_POST['del_mun'];





// hacemos la conexion
$con=mysqli_connect("localhost","root","","computo_integral");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

// ...some PHP code for database "my_db"...

// Change database to "test"
mysqli_select_db($con,"computo_integral");

// ...some PHP code for database "test"...
$ins2=mysqli_query($con,"INSERT INTO empleado_ci (RFC,nombre,ap_paterno,ap_materno,fecha_nac,curp,user_name,tel_cel,tel_casa,pass,tipo_usuario) 
VALUES ('$rfc','$nombre','$ap_paterno','$ap_materno','$fecha_nac','$curp','$email','$tel_cel','$tel_casa','$pass2','$tipo_usuario')");
$ins4=mysqli_query($con,"INSERT INTO direccion_empleado_ci (calle,colonia,num_ext,num_int,ent_fed,del_mun,cod_post,rfc) 
VALUES ('$calle','$colonia','$num_ext','$num_int','$localidad','$delmun','$cod_post','$rfc')");

mysqli_close($con);

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
        <p>El Empleado <?php echo $nombre; echo $ap_paterno; echo $ap_materno; ?>
            con el RFC <?php echo $rfc ?>
            y con el usario <?php echo $email ?>
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
