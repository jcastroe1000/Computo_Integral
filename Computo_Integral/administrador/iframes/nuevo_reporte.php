<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="author" content="">	
        <meta name="descryption" content="">
        <meta name="keywords" content="">
        <meta name="robots" content="index, follow">
        <link rel="stylesheet" type="text/css" href="/Computo_Integral/administrador/css/reporte.css">
        <link rel="stylesheet" type="text/css" href="/Computo_Integral/administrador/css/inputs.css">  

    </head>
    <body id="cuerpo">

        <form name="formulario" method='post' action='nuevo_reporte2.php' enctype='multipart/form-data' class='forms'>


            <h2  style="text-align: center">Nuevo Reporte</h2>


            <div class='datos'>
                <fieldset class='fieldsets'>
                    <legend><label class='legends'>Fecha:</label></legend>
                    <label class='labels' >Elaboración: </label>
                    <input type='datetime-local'  value="" class='inputs' id='elaboracion'  name='elaboracion' 
                           style="width: 200px;text-align: center;" required >

                    <label class='labels' >Servicio: </label>
                    <input type='datetime-local'  value="" class='inputs' id='servicio'  name='servicio' 
                           style="width: 200px;text-align: center;" >

                    <label class='labels' >Cierre: </label>
                    <input type='datetime-local'  value="" class='inputs' id='cierre'  name='cierre' 
                           style="width: 190px;text-align: center;" >


                    <br>
                </fieldset>
                <br>

                <fieldset class='fieldsets'>
                    <legend><label class='legends'>Detalles Del Solicitante Del Servicio</label></legend>
                    <br>
                    <label class='labels'>Nombre De La Empresa:</label>
                    <input type='text' class='inputs' value=""  name='nombre_empresa' 
                           style="text-align: center;"required>
                    <br>
                    <label class='labels'>Nombre:</label>
                    <input type='text' class='inputs' value=""  name='nombre'
                           style="text-align:center;">
                    <label class='labels'>Apellido Paterno:</label>
                    <input type='text' class='inputs' value=""  name='ap_paterno' 
                           style="text-align: center;">
                    <label class='labels'>Apellido Materno:</label>
                    <input type='text' class='inputs' value=""  name='ap_materno'
                           style="text-align: center;">
                    <br>
                    <label class='labels'>Nombre Equipo:</label>
                    <input type='text' class='inputs' value=""  name='equipo'
                           style="text-align: center">
                    <label class='labels'>Area:</label>
                    <input type='text' class='inputs' value=""  name='area'
                           style="text-align: center ">
                </fieldset>
            </div>
            <input type="submit" value="Siguiente"  id='modificar' style=""/>
        </form>
    


</body>
</html>
