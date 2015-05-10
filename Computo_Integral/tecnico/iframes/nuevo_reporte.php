<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="author" content="">	
        <meta name="descryption" content="">
        <meta name="keywords" content="">
        <meta name="robots" content="index, follow">
        <link rel="stylesheet" type="text/css" href="/Computo_Integral/tecnico/css/reporte.css">
        <link rel="stylesheet" type="text/css" href="/Computo_Integral/tecnico/css/inputs.css">  

    </head>
    <body id="cuerpo">

        <form name="formulario" method='post' action='nuevo_reporte2.php' enctype='multipart/form-data' class='forms'>


            <h2  style="text-align: center">Nuevo Reporte</h2>


            <div class='datos'>
                <fieldset class='fieldsets'>
                    <legend><label class='legends'>Fecha:</label></legend>
                    <label class='labels' >Elaboración: </label>
                    <input type='datetime-local'  value="" class='inputs' id='elaboracion'  name='elaboracion' style="width: 200px" required >

                    <label class='labels' >Servicio: </label>
                    <input type='datetime-local'  value="" class='inputs' id='servicio'  name='servicio' style="width: 200px" >

                    <label class='labels' >Cierre: </label>
                    <input type='datetime-local'  value="" class='inputs' id='cierre'  name='cierre' style="width: 190px" >


                    <br>
                </fieldset>
                <br>

                <fieldset class='fieldsets'>
                    <legend><label class='legends'>Detalles Del Solicitante Del Servicio</label></legend>
                    <br>
                    <label class='labels2'>Nombre De La Empresa:</label>
                    <input type='text' class='inputs' value=""  name='nombre_empresa' required>
                    <br>
                    <label class='labels'>Nombre:</label>
                    <input type='text' class='inputs' value=""  name='nombre' >
                    <label class='labels'>Apellido Paterno:</label>
                    <input type='text' class='inputs' value=""  name='ap_paterno'  >
                    <label class='labels'>Apellido Materno:</label>
                    <input type='text' class='inputs' value=""  name='ap_materno'>
                    <br>
                    <label class='labels'>Nombre Equipo:</label>
                    <input type='text' class='inputs' value=""  name='equipo' >
                    <label class='labels'>Area:</label>
                    <input type='text' class='inputs' value=""  name='area' >
                </fieldset>
            </div>
            <input type="submit" value="Siguiente"  id='modificar'/>
        </form>
    </div>


</body>
</html>
