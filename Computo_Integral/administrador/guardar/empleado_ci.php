<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="author" content="Equipo1">	
		<meta name="descryption" content="">
		<meta name="keywords" content="">
		<meta name="robots" content="index, follow">
	<link rel="stylesheet" type="text/css" href="/Computo_Intergral/Computo_Intergral/administrador/css/reporte.css">
        

	</head>
	<body id="cuerpo">
		
				<form name="formulario" method='post' action='/Computo_Intergral/administrador/guardar/guardar_empleado.php' enctype='multipart/form-data' class='forms'>
                <div class='datos'>
                        <fieldset class='fieldsets'>
                        <legend><label class='legends'>Datos Personales</label></legend>
                        
						<label class='labels' >Nombre(s): </label>
						<input type='text' value="" class='inputs'  name='nombre' required>
						<label class='labels'>Apellido Paterno:</label>
						<input type='text' value="" class='inputs'  name='ap_paterno' required>
						<label class='labels'>Apellido Materno:</label>
						<input type='text' value="" class='inputs'  name='ap_materno' required>
						<br>
                         <label class='labels'>Fecha Nacimiento:</label>
						<input type='date' class='inputs' value="" name='fecha_nac' required>
                        <label class='labels'>Teléfono Casa:</label>
						<input type='text' name='tel_casa' class='inputs' value="" name='tel_casa' >
                        <label class='labels'>Teléfono Cel:</label>
                        <input type='text' name='tel_cel' class='inputs' value="" name='tel_cel'  >
                        <br>
                        <label class='labels' >CURP: </label>
						<input type='text' value="" class='inputs'  name='curp' required>
						<label class='labels' >RFC: </label>
						<input type='text' value="" class='inputs'  name='rfc' required>
                        <label class='labels'>E-mail:</label>
						<input type='text' class='inputs' value="" name='email' required>
                            <br>
                        <label class='labels'>Contraseña:</label>
						<input type='password' class='inputs' value="" name='pw'>
                        <label class='labels'>Confirmar Contraseña:</label>
						<input type='password' class='inputs' value="" name='pw1'>
                        <br>
                        <label class="labels2">¿Tipo de Usuario?</label>
                        <br>
                        <label class="labels">Admnistrador</label>
                        <input type="radio" value="1" name="es_admin">
                            <br>
                        <label class="labels">Técnico</label>
                        <input type="radio" value="2" name="es_tecnico">
                            <br>
                        <label class="labels">Administrativo</label>
                        <input type="radio" value="3" name="es_adtivo">
                        <br>
                        </fieldset>
						<br>
						<fieldset class='fieldsets'>
                        <legend><label class='legends'>Dirección</label></legend>
                 


							<br>

							<label class='labels'>Calle:</label>
							<input type='text' class='inputs' value=""  name='calle' required>

							<label class='labels'>Colonia:</label>
							<input type='text' class='inputs' value=""  name='colonia' required>

                            <label class='labels'>Codigo Postal:</label>
							<input type='text' class='inputs' value=""  name='cod_post' required>

							<br>

							<label class='labels'>Num. Int:</label>
							<input type='text' class='inputs' value=""  name='num_int' style="width: 40px;" >

							<label class='labels'>Num. Ext:</label>
							<input type='text' class='inputs' value=""  name='num_ext' style="width: 40px;" required>
                            <br>
						        <label class='labels'>Localidad:</label>
						<select id='genero' name="localidad" OnChange="cambiar()" required >
                        <option value="" selected>Seleccionar</option>
                        <option  value="Estado De Mexico">Estado De Mexico</option>
                        <option  value="Distrito_Federal">Distrito Federal</option >
                        </select>
                            
                        <label class='labels2'>Delegacion o Municipio:</label>
                       
                        <select name="del_mun" required id='genero'>
                        <option value="" selected>Seleccionar</option >
                        <option value="Ecatepec"> Ecatepec</option>
                        <option value="Nezahualcoyotl">Nezahualcoyotl</option>
                            
                        </select> 

											</fieldset>
					</div>
                          <input type="submit" value="Confirmar"  id='modificar'/>
                           <br>
					              <br>
					       
                    </form>
					</div>
				
			
	</body>
</html>
<script type="text/javascript" >
             function cambiar()
{
var index=document.forms.formulario.localidad.selectedIndex;
 
formulario.del_mun.length=1;
 
if(index==2) Distrito_Federal();
if(index==1) Estado_De_Mexico();
} 
 
 
function Distrito_Federal(){
opcion0=new Option("Alvaro Obregon","Alvaro Obregon","defauldSelected");
opcion1=new Option("Azcapotzalco","Azcapotzalco");
opcion3=new Option("Benito Juarez","BenitoJuarez");
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
document.forms.formulario.del_mun.options[0]=opcion0;
document.forms.formulario.del_mun.options[1]=opcion1;
document.forms.formulario.del_mun.options[2]=opcion2;
document.forms.formulario.del_mun.options[3]=opcion3;
document.forms.formulario.del_mun.options[4]=opcion4;
document.forms.formulario.del_mun.options[5]=opcion5;
document.forms.formulario.del_mun.options[6]=opcion6;
document.forms.formulario.del_mun.options[7]=opcion7;
document.forms.formulario.del_mun.options[8]=opcion8;
document.forms.formulario.del_mun.options[9]=opcion9;
document.forms.formulario.del_mun.options[10]=opcion10;
document.forms.formulario.del_mun.options[11]=opcion11;
document.forms.formulario.del_mun.options[12]=opcion12;
document.forms.formulario.del_mun.options[13]=opcion13;
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
document.forms.formulario.del_mun.options[0]=opcion0;
document.forms.formulario.del_mun.options[1]=opcion1;
document.forms.formulario.del_mun.options[2]=opcion2;
document.forms.formulario.del_mun.options[3]=opcion3;
document.forms.formulario.del_mun.options[4]=opcion4;
document.forms.formulario.del_mun.options[5]=opcion5;
document.forms.formulario.del_mun.options[6]=opcion6;
document.forms.formulario.del_mun.options[7]=opcion7;
document.forms.formulario.del_mun.options[8]=opcion8;
document.forms.formulario.del_mun.options[9]=opcion9;
document.forms.formulario.del_mun.options[10]=opcion10;
document.forms.formulario.del_mun.options[11]=opcion11;
document.forms.formulario.del_mun.options[12]=opcion12;
}
        </script>