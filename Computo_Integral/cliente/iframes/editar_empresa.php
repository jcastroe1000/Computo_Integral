<?php
    /*    session_start();
     error_reporting(E_ALL);
    ini_set('display_errors', '1');
$link = mysql_connect('', '', '')or die('No se pudo conectar: ' . mysql_error());
			$db=mysql_select_db('', $link) or die('No se pudo seleccionar la base de datos');
              $rfc=$_SESSION['s_rfc'];    
   
        if (isset($_SESSION['s_rfc'])) {
    		$consulta = mysql_query("select * from empresa  WHERE rfc ='$rfc' ");
            $filas = mysql_fetch_row($consulta);
            $nombre_empresa= $filas[1];
            $RFC= $filas[2];
            $razon_social=$filas[3];
            
   }

       
            
			if (isset($_SESSION['s_rfc'])) {
            $consulta2 = mysql_query("select * from direccion_empresa  WHERE rfc ='$RFC' ");
            $filas2 = mysql_fetch_row($consulta3);
            $calle=$filas2[2];  
            $num_ext=$filas2[3];
            $num_int=$filas2[4];
            $colonia=$filas2[5];
            $ent_fed=$filas2[6];
            $del_mun=$filas2[7];
            $cod_post=$filas2[8];
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
        <link rel="stylesheet" type="text/css" href="/administrador/css/reporte.css">
        <link rel="stylesheet" type="text/css" href="/administrador/css/style.css">
        <link rel="stylesheet" type="text/css" href="/administrador/css/style3.css">
        

	</head>
	<body id="cuerpo">
		
				<form name="formulario" method='post' action='actualizacion.php' enctype='multipart/form-data' class='forms'>
                    
					
                    <h2>Datos De La Empresa</h2>
					

					<div class='datos'>
                        <fieldset class='fieldsets'>
                        <legend><label class='legends'>Datos De La Empresa</label></legend>
                         <label class='labels2' >Nombre De La Empresa: </label>
			<input type='text'  value="<?php echo $nombre_empresa?>" class='inputs' id='nombre_empresa'  name='nombre_empresa' style="width: 150px" >
                           
                            <label  class='labels2' >Razón Social:</label>
                            <select id="falla" name="falla" required >
                            <option value="">Seleccione</option  >      
                            <option value="R">Recurente</option  >
                            <option value="A">Aleatoria</option >
                            <option value="N">Nueva</option >
                            </select>
                        
					
                        <br>
                        </fieldset>
						<br>
					<fieldset class='fieldsets'>
                        <legend><label class='legends'>Dirección</label></legend>
                 


							<br>

							<label class='labels'>Calle:</label>
							<input type='text' class='inputs' value="<?php echo $calle?>"  name='colonia' >

							<label class='labels'>Colonia:</label>
							<input type='text' class='inputs' value="<?php echo $colonia?>"  name='calle' >

							<br>

							<label class='labels'>Numero Interior:</label>
							<input type='text' class='inputs' value="<?php echo $num_int?>"  name='numero_interior' style="width: 30px;" >

							<label class='labels'>Numero Exterior:</label>
							<input type='text' class='inputs' value="<?php echo $num_ext?>"  name='numero_exterior' style="width: 30px;">
                            <label class='labels'>Código Postal:</label>
							<input type='text' class='inputs' value="<?php echo $cod_post?>"  name='calle' >
                            <br>
						       <label name="localidad" class='labels'>Localidad:</label>
						<select id='genero' name="localidad" OnChange="cambiar()" required >
                        <option value="<?php echo $localidad ?>" selected><?php echo $localidad ?> </option>
                        <option  value="Distrito_Federal">Distrito Federal</option >
                        <option  value="Estado De Mexico">Estado De Mexico</option>
                        </select>
                            
                        <label class='labels2'>Delegacion o Municipio:</label>
                        <!--<label for="delmun" class="labels">Delegacion o Municipio:</label>-->
                        <select name="delmun" required id='genero'>
                        <option value="<?php echo $delmun ?>" selected><?php echo $del_mun ?> </option >
                        <option value="Azcapotxalco"> Azcapotzalco</option>
                        <option value="Benito Juarez">Benito Juarez</option>
                            
                        </select> 
                            
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