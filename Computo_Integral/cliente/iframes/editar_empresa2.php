<?php
  /*   session_start();
     error_reporting(E_ALL);
    ini_set('display_errors', '1');
$link = mysql_connect('mysql.nixiweb.com', 'u886750565_promo', 'escom2012')or die('No se pudo conectar: ' . mysql_error());
			$db=mysql_select_db('u886750565_promo', $link) or die('No se pudo seleccionar la base de datos');
              $rfc=$_SESSION['s_rfc'];    
   
        if (isset($_SESSION['s_rfc'])) {
    		$consulta = mysql_query("select * from empresa  WHERE rfc ='$rfc' ");
            $filas = mysql_fetch_row($consulta);
            $nombre_resp_1= $filas[4];
            $ap_respo_1= $filas[5];
            $am_respo_1=$filas[6];
            $tel_resp_1=$filas[7];
            $ext_resp_1=$filas[8];
            $cel_resp_1=$filas[9];
            $mail_resp_1=$filas[10];
            $username1=$filas[11];
            $nombre_resp_2= $filas[13];
            $ap_respo_2= $filas[14];
            $am_respo_2=$filas[15];
            $tel_resp_2=$filas[16];
            $ext_resp_2=$filas[17];
            $cel_resp_2=$filas[18];
            $mail_resp_2=$filas[19];

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
		<link rel="stylesheet" type="text/css" href="/administrador/css/reporte.css">
        

	</head>
	<body id="cuerpo">
		
				<form name="formulario" method='post' action='actualizacion.php' enctype='multipart/form-data' class='forms'>
                    
					
                    <h2>Datos De La Empresa</h2>
					

					<div class='datos'>
                        <fieldset class='fieldsets'>
                       
                            	
                        <legend><label class='legends'>Resposable (s)</label></legend>
                            <br>
                            <label class='labels'>Nombre:</label>
							<input type='text' class='inputs' value="<?php echo $nombre_resp_1?>"  name='nombre' >
                            <label class='labels'>Apellido Paterno:</label>
							<input type='text' class='inputs' value="<?php echo $ap_respo_1?>"  name='ap_paterno1' >
                            <label class='labels'>Apellido Materno:</label>
							<input type='text' class='inputs' value="<?php echo $am_respo_1?>"  name='ap_materno1' >
                            <br>
                            <label class='labels'>Telefono Celular:</label>
							<input type='text' class='inputs' value="<?php echo $cel_resp_1?>"  name='tel_cel' >
                            <label class='labels'>Telefono Oficina:</label>
							<input type='text' class='inputs' value="<?php echo $tel_resp_1?>"  name='tel_of' >
                            <label class='labels'>Extención:</label>
							<input type='text' class='inputs' value="<?php echo $ext_resp_1?>"  name='ext' >
                            <label class='labels'>Correo Electronico:</label>
							<input type='text' class='inputs' value="<?php echo $mail_resp_1?>"  name='numero_exterior' >
                            <br>
                            <label class='labels'>Nombre Usuario:</label>
							<input type='text' class='inputs' value="<?php echo $username1?>"  name='numero_exterior' >
                            <label class='labels'>Contraseña:</label>
							<input type='password' class='inputs' value="<?php echo $nu?>"  name='numero_exterior' >
                            <label class='labels'>Confirmar Contraseña:</label>
							<input type='password' class='inputs' value="<?php echo $numext?>"  name='numero_exterior' >
						    </fieldset>

                            
									
					</div>
					<br>
                    
						<br>
						<br>
                    <input type="submit" value="Confirmar"  id='modificar' style=""/>
                    </form>
					</div>
				
			
	</body>
</html>
<script type="text/javascript" >
            function cambiar()
{
var index=document.forms.formulario.localidad.selectedIndex;
 
formulario.delmun.length=1;
 
if(index==1) Distrito_Federal();
if(index==2) Estado_De_Mexico();
} 
 
 
function Distrito_Federal(){
opcion0=new Option("AlvaroObregon","AlvaroObregon","defauldSelected");
opcion1=new Option("Azcapotzalco","Azcapotzalco");
opcion3=new Option("BenitoJuarez","BenitoJuarez");
opcion4=new Option("Coyoacan","Coyoacan");
opcion5=new Option("Cuajimalpa de Morelos","Cuajimalpa de Morelos");
opcion6=new Option("Cuauhtemoc","Cuauhtemoc");
opcion7=new Option("Gustavo A. Madero","Gustavo A. Madero");
opcion8=new Option("Iztacalco","Iztacalco");
opcion9=new Option("Iztapalapa","Iztapalapa");
opcion10=new Option("Magdalena Contreras","Magdalena Contreras");
opcion11=new Option("Miguel Hidalgo","Miguel Hidalgo");
opcion12=new Option("Milpa Alta","Milpa Alta");
opcion13=new Option("Tlahuac","Tlahuac");  
opcion13=new Option("Tlalpan","Tlalpan");
opcion13=new Option("Venustiano Carranza","Venustiano Carranza");
opcion13=new Option("Xochimilco","Xochimilco");
document.forms.formulario.delmun.options[0]=opcion0;
document.forms.formulario.delmun.options[1]=opcion1;
document.forms.formulario.delmun.options[2]=opcion2;
document.forms.formulario.delmun.options[3]=opcion3;
document.forms.formulario.delmun.options[4]=opcion4;
document.forms.formulario.delmun.options[5]=opcion5;
document.forms.formulario.delmun.options[6]=opcion6;
document.forms.formulario.delmun.options[7]=opcion7;
document.forms.formulario.delmun.options[8]=opcion8;
document.forms.formulario.delmun.options[9]=opcion9;
document.forms.formulario.delmun.options[10]=opcion10;
document.forms.formulario.delmun.options[11]=opcion11;
document.forms.formulario.delmun.options[12]=opcion12;
document.forms.formulario.delmun.options[13]=opcion13;
}
 
function Estado_De_Mexico(){
opcion0=new Option("Ecatepec","Ecatepec","defauldSelected");
opcion1=new Option("Nezahualcoyotl","Nezahualcoyotl");
opcion2=new Option("Naucalpan","Naucalpan");
opcion3=new Option("Toluca","Toluca");
opcion4=new Option("Tlalnepantla","Tlalnepantla");
opcion5=new Option("Chimalhuacan","Chimalhuacan");
opcion6=new Option("Tultitlan","Tultitlan");
opcion7=new Option("Cuautitlan Izcalli","Cuautitlan Izcalli");
opcion8=new Option("Ixtapaluca","Ixtapaluca");
opcion9=new Option("Nicolás Romero","Nicolás Romero");
opcion10=new Option("Atizapan de Zaragoza","Atizapan de Zaragoza");
opcion11=new Option("Tecámac","Tecámac");
opcion12=new Option("Valle de Chalco ","Valle de Chalco ");
 


document.forms.formulario.delmun.options[0]=opcion0;
document.forms.formulario.delmun.options[1]=opcion1;
document.forms.formulario.delmun.options[2]=opcion2;
document.forms.formulario.delmun.options[3]=opcion3;
document.forms.formulario.delmun.options[4]=opcion4;
document.forms.formulario.delmun.options[5]=opcion5;
document.forms.formulario.delmun.options[6]=opcion6;
document.forms.formulario.delmun.options[7]=opcion7;
document.forms.formulario.delmun.options[8]=opcion8;
document.forms.formulario.delmun.options[9]=opcion9;
document.forms.formulario.delmun.options[10]=opcion10;
document.forms.formulario.delmun.options[11]=opcion11;
document.forms.formulario.delmun.options[12]=opcion12;
}
        </script>