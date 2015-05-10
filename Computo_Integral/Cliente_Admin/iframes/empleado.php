<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="author" content="Equipo1">	
        <meta name="descryption" content="">
        <meta name="keywords" content="">
        <meta name="robots" content="index, follow">
        <link rel="stylesheet" type="text/css" href="/Computo_Integral/Cliente_Admin/css/reporte.css">
        <link rel="stylesheet" type="text/css" href="/Computo_Integral/Cliente_Admin/css/inputs.css">


    </head>
    
 
    <body id="cuerpo">
        
        <form name="formulario" method='post' action='/Computo_Integral/Cliente_Admin/guardar/guardar_empleado.php' enctype='multipart/form-data' class='forms'>
            <div class='datos'>
                <fieldset class='fieldsets'>
                    <legend><label class='legends'>Datos Personales</label></legend>

                    <label class='labels' >Nombre(s): </label>
                    <input type='text' value="" class='inputs'  name='nombre' required
                           style="text-align: center;">
                    <label class='labels'>Apellido Paterno:</label>
                    <input type='text' value="" class='inputs'  name='ap_paterno' required
                           style="text-align: center;">
                    <label class='labels'>Apellido Materno:</label>
                    <input type='text' value="" class='inputs'  name='ap_materno' required
                           style="text-align: center;">
                    <br>
                    <label class='labels'>Fecha Nacimiento:</label>
                    <input type='date' class='inputs' value="" name='fecha_nac' required
                           style="text-align: center;">
                    <label class='labels'>Teléfono Casa:</label>
                    <input type='text' name='tel_casa' class='inputs' value="" name='tel_casa'
                           style="text-align: center;">
                    <label class='labels'>Teléfono Cel:</label>
                    <input type='text' name='tel_cel' class='inputs' value="" name='tel_cel' 
                           style="text-align: center;">
                    <br>
                    <label class='labels' >CURP: </label>
                    <input type='text' value="" class='inputs'  name='curp' required
                           style="text-align: center;">
                    <label class='labels' >RFC: </label>
                    <input type='text' value="" class='inputs'  name='rfc' required
                           style="text-align: center;">
                    <br>
                    <label class='labels'>E-mail:</label>
                    <input type='text' class='inputs' value="" name='email' required
                           style="width: 220px;text-align: center;">
                   
                    <label class='labels2'>Contraseña:</label>
                    <input type='password' class='inputs' value="" name='pw' required
                           style="text-align: center;">

                    <br>
                    <label class="labels2">¿Tipo de Usuario?</label>
                  
                    <select name="tipo_usuario" required id='genero' >
                        <option selected style="text-align: center;" >Seleccionar</option>    
                        <option value="1" style="text-align: center;">Administrador</option>    
                        <option value="2" style="text-align: center;">Técnico</option>    
                    </select>
                    <br>
                </fieldset>
                <br>

            </div>
            <div style="padding-left:750px;">
            <input type="submit" value="Confirmar"  id='modificar' style="position: left;"/>    
            </div>
            
            <br>
            <br>
        </form>
    </div>
</body>
</html>
