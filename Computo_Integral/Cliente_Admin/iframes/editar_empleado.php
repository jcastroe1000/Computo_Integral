<?php
//session_start();
//   error_reporting(E_ALL);
//ini_set('display_errors', '1');
$link = mysql_connect('localhost', 'root', '')or die('No se pudo conectar: ' . mysql_error());
$db = mysql_select_db('computo_integral', $link) or die('No se pudo seleccionar la base de datos');
//$consulta = mysql_query("select *from empleado_ci WHERE RFC ='$r' ");
//$rfc=$_SESSION['rfc'];   
/* echo  "<input type='hidden' name='valor_rfc' value='<?php echo $_POST['valor_rfc']; ?>'>"; */
//   $rfc2=$_POST['valor_rfc'];



$r = $_POST['valor_rfc2'];



//if (isset($_SESSION['s_rfc'])) {
$consulta = mysql_query("select *from empleado_ci WHERE RFC ='$r ' ");

//     echo ("select *from empleado_ci WHERE RFC ='$rfc' ");
//$consulta = mysql_query("select * from Usuario  WHERE rfc ='$rfc' ");
//   if (!$consulta){echo "Error al guardar";}else{echo "Guardado con exito";

$row = mysql_fetch_row($consulta);
$nombre = utf8_encode($row[1]);
$ap_paterno = $row[2];
$ap_materno = $row[3];
$fecha = $row[4];
$rfc = $row[0];
$CURP = $row[5];
$email = $row[6];
$num_cel = $row[7];
$num_casa = $row[8];


// }
//    if (isset($_SESSION['s_rfc'])) {
$consulta2 = mysql_query("select * from direccion_empleado_ci WHERE RFC ='$r' ");
$row2 = mysql_fetch_row($consulta2);
$calle = $row2[1];
$colonia = $row2[2];
$num_int = $row2[4];
$num_ext = $row2[3];
$localidad = utf8_encode($row2[5]);
$delmun = $row2[6];
$cod_postal = $row2[7];
//   }
// */
?>   

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="author" content="">	
        <meta name="descryption" content="">
        <meta name="keywords" content="">
        <meta name="robots" content="index, follow">
        <link rel="stylesheet" type="text/css" href="/administrador/css/reporte.css">


    </head>
    <body id="cuerpo">
        <form name="formulario" method='post' action='actualizacion.php' enctype='multipart/form-data' class='forms'>
            <div class='datos'>
                <fieldset class='fieldsets'>
                    <legend><label class='legends'>Datos Personales</label></legend>

                    <label class='labels' >Nombre(s): </label>
                    <input type='text' value="<?php echo $nombre ?>" class='inputs'  name='ap_paterno'>
                    <label class='labels'>Apellido Paterno:</label>
                    <input type='text' value="<?php echo $ap_paterno ?>" class='inputs'  name='ap_paterno'>
                    <label class='labels'>Apellido Materno:</label>
                    <input type='text' value="<?php echo $ap_materno ?>" class='inputs'  name='ap_materno'>
                    <br>
                    <label class='labels'>Fecha Nac.:</label>
                    <input type='date' class='inputs' value="<?php echo $fecha ?>" name='fec_nacimiento'>
                    <label class='labels'>Teléfono Casa:</label>
                    <input type='text' name='telefono' class='inputs' value="<?php echo $num_casa ?>" name='telefono' >
                    <label class='labels'>Teléfono Cel:</label>
                    <input type='text' name='telefono' class='inputs' value="<?php echo $num_cel ?>" name='telefono' >
                    <br>
                    <label class='labels' >RFC: </label>
                    <input type='text' value="<?php echo $rfc ?>" class='inputs'  name='ap_paterno'>
                    <label class='labels' >CURP: </label>
                    <input type='text' value="<?php echo $CURP ?>" class='inputs'  name='ap_paterno'>
                    <br>
                    <label class='labels'>E-mail:</label>
                    <input type='text' class='inputs2' value="<?php echo $email ?>" name='email' style="width: 230px;">
                    <br>


                </fieldset>
                <br>
                <fieldset class='fieldsets'>
                    <legend><label class='legends'>Dirección</label></legend>



                    <label class='labels'>Calle:</label>
                    <input type='text' class='inputs' value="<?php echo $calle ?>"  name='colonia' >

                    <label class='labels'>Colonia:</label>
                    <input type='text' class='inputs' value="<?php echo $colonia ?>"  name='calle' >

                    <label class='labels'>Codigo Postal:</label>
                    <input type='text' class='inputs' value="<?php echo $cod_postal ?>"  name='calle' >
                    <br>

                    <label class='labels'>Num. Int:</label>
                    <input type='text' class='inputs' value="<?php echo $num_int ?>"  name='numero_interior' style="width: 40px;" >

                    <label class='labels'>Num. Ext:</label>
                    <input type='text' class='inputs' value="<?php echo $num_ext ?>"  name='numero_exterior' style="width: 40px;">
                    <br>
                    <label name="localidad" class='labels'>Localidad:</label>
                    <select id='genero' name="localidad" OnChange="cambiar()" required >
                        <option value="<?php echo $localidad ?>" selected><?php echo $localidad ?> </option>
                        <option  value="Distrito_Federal">Distrito Federal</option >
                        <option  value="Estado De Mexico">Estado De Mexico</option>
                    </select>
                    <label class='labels'>Del Mun:</label>
                    <select name="delmun" required id='genero'>
                        <option value="<?php echo $delmun ?>" selected><?php echo $delmun ?> </option >
                        <option value="Azcapotxalco"> Azcapotzalco</option>
                        <option value="Benito Juarez">Benito Juarez</option>
                    </select> 
                    <br>
                    <br>

                </fieldset>
                <br>
                <input type="submit" value="Guardar"  id='modificar'/>
            </div>


        </form>
    </div>


</body>
</html>
<script type="text/javascript" >
    function cambiar()
    {
        var index = document.forms.formulario.localidad.selectedIndex;

        formulario.delmun.length = 1;

        if (index == 1)
            Distrito_Federal();
        if (index == 2)
            Estado_De_Mexico();
    }


    function Distrito_Federal() {
        opcion0 = new Option("AlvaroObregon", "AlvaroObregon", "defauldSelected");
        opcion1 = new Option("Azcapotzalco", "Azcapotzalco");
        opcion3 = new Option("BenitoJuarez", "BenitoJuarez");
        opcion4 = new Option("Coyoacan", "Coyoacan");
        opcion5 = new Option("Cuajimalpa de Morelos", "Cuajimalpa de Morelos");
        opcion6 = new Option("Cuauhtemoc", "Cuauhtemoc");
        opcion7 = new Option("Gustavo A. Madero", "Gustavo A. Madero");
        opcion8 = new Option("Iztacalco", "Iztacalco");
        opcion9 = new Option("Iztapalapa", "Iztapalapa");
        opcion10 = new Option("Magdalena Contreras", "Magdalena Contreras");
        opcion11 = new Option("Miguel Hidalgo", "Miguel Hidalgo");
        opcion12 = new Option("Milpa Alta", "Milpa Alta");
        opcion13 = new Option("Tlahuac", "Tlahuac");
        opcion13 = new Option("Tlalpan", "Tlalpan");
        opcion13 = new Option("Venustiano Carranza", "Venustiano Carranza");
        opcion13 = new Option("Xochimilco", "Xochimilco");
        document.forms.formulario.delmun.options[0] = opcion0;
        document.forms.formulario.delmun.options[1] = opcion1;
        document.forms.formulario.delmun.options[2] = opcion2;
        document.forms.formulario.delmun.options[3] = opcion3;
        document.forms.formulario.delmun.options[4] = opcion4;
        document.forms.formulario.delmun.options[5] = opcion5;
        document.forms.formulario.delmun.options[6] = opcion6;
        document.forms.formulario.delmun.options[7] = opcion7;
        document.forms.formulario.delmun.options[8] = opcion8;
        document.forms.formulario.delmun.options[9] = opcion9;
        document.forms.formulario.delmun.options[10] = opcion10;
        document.forms.formulario.delmun.options[11] = opcion11;
        document.forms.formulario.delmun.options[12] = opcion12;
        document.forms.formulario.delmun.options[13] = opcion13;
    }

    function Estado_De_Mexico() {
        opcion0 = new Option("Ecatepec", "Ecatepec", "defauldSelected");
        opcion1 = new Option("Nezahualcoyotl", "Nezahualcoyotl");
        opcion2 = new Option("Naucalpan", "Naucalpan");
        opcion3 = new Option("Toluca", "Toluca");
        opcion4 = new Option("Tlalnepantla", "Tlalnepantla");
        opcion5 = new Option("Chimalhuacan", "Chimalhuacan");
        opcion6 = new Option("Tultitlan", "Tultitlan");
        opcion7 = new Option("Cuautitlan Izcalli", "Cuautitlan Izcalli");
        opcion8 = new Option("Ixtapaluca", "Ixtapaluca");
        opcion9 = new Option("Nicolás Romero", "Nicolás Romero");
        opcion10 = new Option("Atizapan de Zaragoza", "Atizapan de Zaragoza");
        opcion11 = new Option("Tecámac", "Tecámac");
        opcion12 = new Option("Valle de Chalco ", "Valle de Chalco ");



        document.forms.formulario.delmun.options[0] = opcion0;
        document.forms.formulario.delmun.options[1] = opcion1;
        document.forms.formulario.delmun.options[2] = opcion2;
        document.forms.formulario.delmun.options[3] = opcion3;
        document.forms.formulario.delmun.options[4] = opcion4;
        document.forms.formulario.delmun.options[5] = opcion5;
        document.forms.formulario.delmun.options[6] = opcion6;
        document.forms.formulario.delmun.options[7] = opcion7;
        document.forms.formulario.delmun.options[8] = opcion8;
        document.forms.formulario.delmun.options[9] = opcion9;
        document.forms.formulario.delmun.options[10] = opcion10;
        document.forms.formulario.delmun.options[11] = opcion11;
        document.forms.formulario.delmun.options[12] = opcion12;
    }
</script>