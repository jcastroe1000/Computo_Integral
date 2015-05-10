<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="author" content="">	
		<meta name="descryption" content="">
		<meta name="keywords" content="">
		<meta name="robots" content="index, follow">
		<link rel="stylesheet" type="text/css" href="/administrador/css/reporte.css">
        <link rel="stylesheet" type="text/css" href="/administrador/css/inputs.css">
    </head>
	<body id="cuerpo">
	 <input type="hidden" name="elaboracion" value="<?php echo $_POST['elaboracion'];?>"> 
                <input type="hidden" name="servicio" value="<?php echo $_POST['servicio'];?>">
     <input type="hidden" name="cierre" value="<?php echo $_POST['cierre'];?>">
   <input type="hidden" name="nombre_empresa" value="<?php echo $_POST['nombre_empresa'];?>">
           <input type="hidden" name="nombre" value="<?php echo $_POST['nombre'];?>">
           <input type="hidden" name="ap_paterno" value="<?php echo $_POST['ap_paterno'];?>">
           <input type="hidden" name="ap_materno" value="<?php echo $_POST['ap_materno'];?>">
           <input type="hidden" name="equipo" value="<?php echo $_POST['equipo'];?>">
           <input type="hidden" name="area" value="<?php echo $_POST['area'];?>">
	<form name="formulario" method='post' action='nuevo_reporte.php' enctype='multipart/form-data' class='forms'>
    <div class='datos'>
    <fieldset class='fieldsets'>
     <legend><label class='legends'>Servicio Requerido:</label></legend>
     <br>
     <label class='labels'>Fallas Reportadas:</label>
     <textarea name="fallas_reportadas" rows="5" cols="60" size="255" id="reportadas"  required></textarea>
	 <br>
     <label  class='labels'>Tipo De Falla:</label>
						<select id="tipo_falla" name="tipo_falla" required>
                        <option value="" selected> </option>

                           <option value="" selected>Seleccione</option  >  
                            <option value=Ninguna">Ninguna</option  >
                         <option value="R">Recurente</option  >          
                         <option value="A">Aleatoria</option >
                         <option value="N">Nueva</option >
                        </select>
                    
					
                        <label  class='labels'>Tipo De Servicio:</label>
						<select id='tipo_servicio' name="tipo_servicio" required>
                       
                        <option value="" selected>Seleccione</option  >
                        <option value="G">Garantia</option>
                        <option value="P">Poliza</option >
                        <option value="O">Otra</option >
                        </select>
                    
                        <label class='labels'>Falla en:</label>
                        <select name="falla_en"  id='falla_en' required>
                        <option value="" selected>Seleccione</option  >
                        <option value=Ninguno">Ninguno</option  >
                        <option value="S">Software</option  >
                        <option value="H">Hardware</option >
                        <option value="O">Otros</option >
                            
                        </select> 
                            <br>
                            <br>
                            <label class='labels'>Fallas Reportadas:</label>
                 <textarea name="fallas_reportadas" rows="5" cols="60" size="255" id="reportadas"  ></textarea>
                            <br>
                            <label class='labels'>Marca:</label>
							<select name="marca" required id="tipo_servicio" onchange="sistema()" required>
                            <option value="" selected>Seleccionar</option>
                            <option value="ACER">ACER</option>
                            <option value="APPLE">APPLE</option>
                            <option value="ASUS">ASUS</option>    
                            <option value="COMPAQ">COMPAQ</option>
                            <option value="DELL">DELL</option>
                            <option value="GATEWAY">GATEWAY</option>
                            <option value="HP">HP</option>    
                            <option value="LENOVO">LENOVO</option>
                            <option value="LG">LG</option>
                            <option value="SAMSUNG">SAMSUNG</option>
                            <option value="SONY">SONY</option>    
                            <option value="TOSHIBA">TOSHIBA</option>

                            
                        </select> 
                            <label class='labels'>Sistema Operativo:</label>
                        <select name="sist_op" required id='tipo_servicio' style="width: 180px">
                            <option value="" selected>Selecionar</option >
                            <option value=""></option>
                            <option value=""></option>
                            
                            
                            </select>
                                        <br>
                            <label class='labels'>Modelo:</label>
							<input type='text' class='inputs' value=""  name='modelo' required >
                                         
                            
                           
                            <label class='labels'>Número De Serie:</label>
							<input type='text' class='inputs' value=""  name='num_serie' required>
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
<script type="text/javascript" >
            function sistema()
{
var index=document.forms.formulario.marca.selectedIndex;
 
formulario.sist_op.length=1;
 
if(index==2) APPLE();
if(index==1) ACER();
if(index==3) ASUS();
if(index==4) COMPAQ();
if(index==5) DELL();
if(index==6) GATEWEY();
if(index==7) HP();
if(index==8) LENOVO();
if(index==9) LG();
if(index==10) SAMSUNG();
if(index==11) SONY();
if(index==12) TOSHIBA();

} 
 
 
function ACER(){
opcion0=new Option("Windows XP","Windows XP","defauldSelected");
opcion1=new Option("Windows 7 Starter Edition","Windows 7 Starter Edition");
opcion2=new Option("Windows 7 Home Basic","Windows 7 Home Basic");
opcion3=new Option("Windows 7 Home Premium","Windows 7 Home Premium");
opcion4=new Option("Windows 7 Profesional","Windows 7 Profesional");
opcion5=new Option("Windows 7 Enterprise","Windows 7 Enterprise");
opcion6=new Option("Windows 7 Ultimate","Windows 7 Ultimate");
document.forms.formulario.sist_op.options[0]=opcion0;
document.forms.formulario.sist_op.options[1]=opcion1;
document.forms.formulario.sist_op.options[2]=opcion2;
document.forms.formulario.sist_op.options[3]=opcion3;
document.forms.formulario.sist_op.options[4]=opcion4;
document.forms.formulario.sist_op.options[5]=opcion5;
document.forms.formulario.sist_op.options[6]=opcion6;
}

 
function ASUS(){
opcion0=new Option("Windows XP","Windows XP","defauldSelected");
opcion1=new Option("Windows 7 Starter Edition","Windows 7 Starter Edition");
opcion2=new Option("Windows 7 Home Basic","Windows 7 Home Basic");
opcion3=new Option("Windows 7 Home Premium","Windows 7 Home Premium");
opcion4=new Option("Windows 7 Profesional","Windows 7 Profesional");
opcion5=new Option("Windows 7 Enterprise","Windows 7 Enterprise");
opcion6=new Option("Windows 7 Ultimate","Windows 7 Ultimate");
document.forms.formulario.sist_op.options[0]=opcion0;
document.forms.formulario.sist_op.options[1]=opcion1;
document.forms.formulario.sist_op.options[2]=opcion2;
document.forms.formulario.sist_op.options[3]=opcion3;
document.forms.formulario.sist_op.options[4]=opcion4;
document.forms.formulario.sist_op.options[5]=opcion5;
document.forms.formulario.sist_op.options[6]=opcion6;
}

function COMPAQ(){
opcion0=new Option("Windows XP","Windows XP","defauldSelected");
opcion1=new Option("Windows 7 Starter Edition","Windows 7 Starter Edition");
opcion2=new Option("Windows 7 Home Basic","Windows 7 Home Basic");
opcion3=new Option("Windows 7 Home Premium","Windows 7 Home Premium");
opcion4=new Option("Windows 7 Profesional","Windows 7 Profesional");
opcion5=new Option("Windows 7 Enterprise","Windows 7 Enterprise");
opcion6=new Option("Windows 7 Ultimate","Windows 7 Ultimate");
document.forms.formulario.sist_op.options[0]=opcion0;
document.forms.formulario.sist_op.options[1]=opcion1;
document.forms.formulario.sist_op.options[2]=opcion2;
document.forms.formulario.sist_op.options[3]=opcion3;
document.forms.formulario.sist_op.options[4]=opcion4;
document.forms.formulario.sist_op.options[5]=opcion5;
document.forms.formulario.sist_op.options[6]=opcion6;
}  
function DELL(){
opcion0=new Option("Windows XP","Windows XP","defauldSelected");
opcion1=new Option("Windows 7 Starter Edition","Windows 7 Starter Edition");
opcion2=new Option("Windows 7 Home Basic","Windows 7 Home Basic");
opcion3=new Option("Windows 7 Home Premium","Windows 7 Home Premium");
opcion4=new Option("Windows 7 Profesional","Windows 7 Profesional");
opcion5=new Option("Windows 7 Enterprise","Windows 7 Enterprise");
opcion6=new Option("Windows 7 Ultimate","Windows 7 Ultimate");
document.forms.formulario.sist_op.options[0]=opcion0;
document.forms.formulario.sist_op.options[1]=opcion1;
document.forms.formulario.sist_op.options[2]=opcion2;
document.forms.formulario.sist_op.options[3]=opcion3;
document.forms.formulario.sist_op.options[4]=opcion4;
document.forms.formulario.sist_op.options[5]=opcion5;
document.forms.formulario.sist_op.options[6]=opcion6;
}
    function GATEWAY(){
opcion0=new Option("Windows XP","Windows XP","defauldSelected");
opcion1=new Option("Windows 7 Starter Edition","Windows 7 Starter Edition");
opcion2=new Option("Windows 7 Home Basic","Windows 7 Home Basic");
opcion3=new Option("Windows 7 Home Premium","Windows 7 Home Premium");
opcion4=new Option("Windows 7 Profesional","Windows 7 Profesional");
opcion5=new Option("Windows 7 Enterprise","Windows 7 Enterprise");
opcion6=new Option("Windows 7 Ultimate","Windows 7 Ultimate");
document.forms.formulario.sist_op.options[0]=opcion0;
document.forms.formulario.sist_op.options[1]=opcion1;
document.forms.formulario.sist_op.options[2]=opcion2;
document.forms.formulario.sist_op.options[3]=opcion3;
document.forms.formulario.sist_op.options[4]=opcion4;
document.forms.formulario.sist_op.options[5]=opcion5;
document.forms.formulario.sist_op.options[6]=opcion6;
}
    function HP(){
opcion0=new Option("Windows XP","Windows XP","defauldSelected");
opcion1=new Option("Windows 7 Starter Edition","Windows 7 Starter Edition");
opcion2=new Option("Windows 7 Home Basic","Windows 7 Home Basic");
opcion3=new Option("Windows 7 Home Premium","Windows 7 Home Premium");
opcion4=new Option("Windows 7 Profesional","Windows 7 Profesional");
opcion5=new Option("Windows 7 Enterprise","Windows 7 Enterprise");
opcion6=new Option("Windows 7 Ultimate","Windows 7 Ultimate");
document.forms.formulario.sist_op.options[0]=opcion0;
document.forms.formulario.sist_op.options[1]=opcion1;
document.forms.formulario.sist_op.options[2]=opcion2;
document.forms.formulario.sist_op.options[3]=opcion3;
document.forms.formulario.sist_op.options[4]=opcion4;
document.forms.formulario.sist_op.options[5]=opcion5;
document.forms.formulario.sist_op.options[6]=opcion6;
}
    function LENOVO(){
opcion0=new Option("Windows XP","Windows XP","defauldSelected");
opcion1=new Option("Windows 7 Starter Edition","Windows 7 Starter Edition");
opcion2=new Option("Windows 7 Home Basic","Windows 7 Home Basic");
opcion3=new Option("Windows 7 Home Premium","Windows 7 Home Premium");
opcion4=new Option("Windows 7 Profesional","Windows 7 Profesional");
opcion5=new Option("Windows 7 Enterprise","Windows 7 Enterprise");
opcion6=new Option("Windows 7 Ultimate","Windows 7 Ultimate");
document.forms.formulario.sist_op.options[0]=opcion0;
document.forms.formulario.sist_op.options[1]=opcion1;
document.forms.formulario.sist_op.options[2]=opcion2;
document.forms.formulario.sist_op.options[3]=opcion3;
document.forms.formulario.sist_op.options[4]=opcion4;
document.forms.formulario.sist_op.options[5]=opcion5;
document.forms.formulario.sist_op.options[6]=opcion6;
}
    function LG(){
opcion0=new Option("Windows XP","Windows XP","defauldSelected");
opcion1=new Option("Windows 7 Starter Edition","Windows 7 Starter Edition");
opcion2=new Option("Windows 7 Home Basic","Windows 7 Home Basic");
opcion3=new Option("Windows 7 Home Premium","Windows 7 Home Premium");
opcion4=new Option("Windows 7 Profesional","Windows 7 Profesional");
opcion5=new Option("Windows 7 Enterprise","Windows 7 Enterprise");
opcion6=new Option("Windows 7 Ultimate","Windows 7 Ultimate");
document.forms.formulario.sist_op.options[0]=opcion0;
document.forms.formulario.sist_op.options[1]=opcion1;
document.forms.formulario.sist_op.options[2]=opcion2;
document.forms.formulario.sist_op.options[3]=opcion3;
document.forms.formulario.sist_op.options[4]=opcion4;
document.forms.formulario.sist_op.options[5]=opcion5;
document.forms.formulario.sist_op.options[6]=opcion6;
}
function APPLE(){
opcion0=new Option("Mac OS X v10.6","Mac OS X v10.6","defauldSelected");
opcion1=new Option("Mac OS X v10.7","Mac OS X v10.7");
opcion2=new Option("Mac OS X v10.8","Mac OS X v10.8");
opcion3=new Option("Mac OS X v10.9","Mac OS X v10.9");
opcion4=new Option("Mac OS X v10.10","Mac OS X v10.10");
document.forms.formulario.sist_op.options[0]=opcion0;
document.forms.formulario.sist_op.options[1]=opcion1;
document.forms.formulario.sist_op.options[2]=opcion2;
document.forms.formulario.sist_op.options[3]=opcion3;
document.forms.formulario.sist_op.options[4]=opcion4;
document.forms.formulario.sist_op.options[5]=opcion5;
}
    function SAMSUNG(){
opcion0=new Option("Windows XP","Windows XP","defauldSelected");
opcion1=new Option("Windows 7 Starter Edition","Windows 7 Starter Edition");
opcion2=new Option("Windows 7 Home Basic","Windows 7 Home Basic");
opcion3=new Option("Windows 7 Home Premium","Windows 7 Home Premium");
opcion4=new Option("Windows 7 Profesional","Windows 7 Profesional");
opcion5=new Option("Windows 7 Enterprise","Windows 7 Enterprise");
opcion6=new Option("Windows 7 Ultimate","Windows 7 Ultimate");
document.forms.formulario.sist_op.options[0]=opcion0;
document.forms.formulario.sist_op.options[1]=opcion1;
document.forms.formulario.sist_op.options[2]=opcion2;
document.forms.formulario.sist_op.options[3]=opcion3;
document.forms.formulario.sist_op.options[4]=opcion4;
document.forms.formulario.sist_op.options[5]=opcion5;
document.forms.formulario.sist_op.options[6]=opcion6;
}
    function SONY(){
opcion0=new Option("Windows XP","Windows XP","defauldSelected");
opcion1=new Option("Windows 7 Starter Edition","Windows 7 Starter Edition");
opcion2=new Option("Windows 7 Home Basic","Windows 7 Home Basic");
opcion3=new Option("Windows 7 Home Premium","Windows 7 Home Premium");
opcion4=new Option("Windows 7 Profesional","Windows 7 Profesional");
opcion5=new Option("Windows 7 Enterprise","Windows 7 Enterprise");
opcion6=new Option("Windows 7 Ultimate","Windows 7 Ultimate");
document.forms.formulario.sist_op.options[0]=opcion0;
document.forms.formulario.sist_op.options[1]=opcion1;
document.forms.formulario.sist_op.options[2]=opcion2;
document.forms.formulario.sist_op.options[3]=opcion3;
document.forms.formulario.sist_op.options[4]=opcion4;
document.forms.formulario.sist_op.options[5]=opcion5;
document.forms.formulario.sist_op.options[6]=opcion6;
}
    function TOSHIBA(){
opcion0=new Option("Windows XP","Windows XP","defauldSelected");
opcion1=new Option("Windows 7 Starter Edition","Windows 7 Starter Edition");
opcion2=new Option("Windows 7 Home Basic","Windows 7 Home Basic");
opcion3=new Option("Windows 7 Home Premium","Windows 7 Home Premium");
opcion4=new Option("Windows 7 Profesional","Windows 7 Profesional");
opcion5=new Option("Windows 7 Enterprise","Windows 7 Enterprise");
opcion6=new Option("Windows 7 Ultimate","Windows 7 Ultimate");
document.forms.formulario.sist_op.options[0]=opcion0;
document.forms.formulario.sist_op.options[1]=opcion1;
document.forms.formulario.sist_op.options[2]=opcion2;
document.forms.formulario.sist_op.options[3]=opcion3;
document.forms.formulario.sist_op.options[4]=opcion4;
document.forms.formulario.sist_op.options[5]=opcion5;
document.forms.formulario.sist_op.options[6]=opcion6;
}
        </script>