<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="author" content="">	
        <meta name="descryption" content="">
        <meta name="keywords" content="">
        <meta name="robots" content="index, follow">
        <link rel="stylesheet" type="text/css" href="/Computo_Intergral/administrador/css/reporte.css">
        <link rel="stylesheet" type="text/css" href="/Computo_Intergral/administrador/css/inputs.css">
    </head>
    <body id="cuerpo">
        <form name="formulario" method='post' action='/administrador/guardar/guardar_reporte.php' enctype='multipart/form-data' class='forms'>
            <div class='datos'>
                <fieldset class="fieldsets">
                    <legend><label class='legends'>Nivel de Satisfacción:</label></legend>
        
<!--              <label class="labels">Nombre Cliente:</label>
                    <input type="text" class="inputs" value="" name="nombre_cliente" required
                           style="text-align: center">
                    <label class="labels">Apellido Paterno:</label>
                    <input type="text" class="inputs" value="" name="paterno_cliente" required
                           style="text-align: center">
                    <label class="labels">Apellido Materno:</label>
                    <input type="text" class="inputs" value="" name="materno_cliente" required
                           style="text-align: center">-->
                    <br>
                    <label class='labels2'>¿Esta Conforme con el servicio brindado?</label>
                    <select name="conformidad" required id='falla_en'  style="width: 140px;">
                        <option value="" selected>Elije una Opcion</option >
                        <option value="S">Sí</option  >
                        <option value="N">No</option >      
                    </select> 
                    <br>
                    <br>
                    <label class='labels2'>Comentarios:</label>
                    <textarea name="comentarios" rows="5" cols="60" size="255" id="comentarios"  ></textarea>

                    <br>
                    <label class='labels2'>Nivel De Satisfaccion:</label>
                    <select name="nivel_satisfaccion" required id='falla_en'>
                        <option value="" selected></option >
                        <option value="E">Excelente</option  >
                        <option value="B">Buena</option >
                        <option value="R">Regular</option >
                    </select>
                    
                </fieldset>

            </div>
            <br> 


            <input type="submit" value="Confirmar"  id='modificar'/>
        </form>
</body>
</html>
