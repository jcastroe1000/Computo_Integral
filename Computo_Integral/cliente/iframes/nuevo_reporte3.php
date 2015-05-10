

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="author" content="">	
        <meta name="descryption" content="">
        <meta name="keywords" content="">
        <meta name="robots" content="index, follow">
        <link rel="stylesheet" type="text/css" href="/Computo_Integral/cliente/css/reporte.css">
        <link rel="stylesheet" type="text/css" href="/Computo_Integral/cliente/css/inputs.css">


    </head>
    <title>Cierre Del Reporte</title>
    <body id="cuerpo">
        <input type="hidden" name="elaboracion" value="<?php echo $_POST['elaboracion']; ?>"> 
        <input type="hidden" name="servicio" value="<?php echo $_POST['servicio']; ?>">
        <input type="hidden" name="cierre" value="<?php echo $_POST['cierre']; ?>">
        <input type="hidden" name="nombre_empresa" value="<?php echo $_POST['nombre_empresa']; ?>">
        <input type="hidden" name="nombre" value="<?php echo $_POST['nombre']; ?>">
        <input type="hidden" name="ap_paterno" value="<?php echo $_POST['ap_paterno']; ?>">
        <input type="hidden" name="ap_materno" value="<?php echo $_POST['ap_materno']; ?>">
        <input type="hidden" name="equipo" value="<?php echo $_POST['equipo']; ?>">
        <input type="hidden" name="area" value="<?php echo $_POST['area']; ?>">
        <input type="hidden" name="fallas_reportadas" value="<?echo $_POST['fallas_reportadas']?>">
        <input type="hidden" name="tipo_falla" value="<?php echo $_POST['tipo_falla'] ?>"> 
        <input type="hidden" name="tipo_servicio" value="<?echo $_POST['tipo_servicio']?>">
        <input type="hidden" name="falla_en" value="<?echo $_POST['falla_en']?>">
        <input type="hidden" name="marca" value="<?$_POST['marca']?>">
        <input type="hidden" name="sist_op" value="<?$_POST['sist_op']?>">
        <input type="hidden" name="modelo" value="<?$_POST['modelo']?>">
        <input type="hidden" name="num_serie" value="<?$_POST['num_serie']?>">
        <input type="hidden" name="act_realizadas" value="<?$_POST['act_realizadas']?>">



        <form name="formulario" method='post' action='/Computo_Integral/cliente//guardar/guardar_reporte.php' enctype='multipart/form-data' class='forms'>

            <!--    <h2>Nuevo Reporte</h2>-->


            <div class='datos'>


                <fieldset class="fieldsets">
                    <legend><label class='legends'>Cierre Del Reporte:</label></legend>
                    <label class='labels'>Tecnico Asignado:</label>
                    <input type="text" value="Por Asignar" disabled="" class="inputs"style="text-align: center;">
                    <?php
//                    $link = mysql_connect('localhost', 'root', '')or die('No se pudo conectar: ' . mysql_error());
//                    $db = mysql_select_db('computo_integral', $link) or die('No se pudo seleccionar la base de datos');
//                    $consulta = mysql_query("select *from empleado_ci ");
//
//                    echo "<select name='tec_asignado' id='tec_asignado'>";
//                    while ($row = mysql_fetch_row($consulta)) {
//                        $nombre = utf8_encode($row[1]);
//                        $a_paterno = utf8_encode($row[2]);
//                        $a_materno = utf8_encode($row[3]);
//
//                        echo "<option value='$nombre $a_paterno $a_materno'>";
//                        echo "$nombre $a_paterno $a_materno";
//                        echo "</option>";
//                    }
//                    echo "</select>";
//                    
                    ?>



                    <br>
<!--                    <label class="labels">Nombre Cliente:</label>
                    <input type="text" class="inputs" value="" name="nombre_cliente" required>
                    <label class="labels">Apellido Paterno:</label>
                    <input type="text" class="inputs" value="" name="paterno_cliente" required>
                    <label class="labels">Apellido Materno:</label>
                    <input type="text" class="inputs" value="" name="materno_cliente" required>
                    <br>-->
                    <!--                    <label class='labels2'>¿Esta Conforme con el servicio brindado?</label>
                                        <select name="conformidad" required id='falla_en'  style="width: 140px;">
                                            <option value="" selected>Elije una Opcion</option >
                                            <option value="S">Sí</option  >
                                            <option value="N">No</option >      
                                        </select> 
                                        <br>
                                        <br>
                                        <label class='labels'>Comentarios:</label>
                                        <textarea name="comentarios" rows="5" cols="60" size="255" id="comentarios"  ></textarea>
                    
                                        <br>
                                        <label class='labels'>Nivel De Satisfaccion</label>
                                        <select name="nivel_satisfaccion" required id='falla_en'>
                                            <option value="" selected></option >
                                            <option value="E">Excelente</option  >
                                            <option value="B">Buena</option >
                                            <option value="R">Regular</option >
                                        </select> 
                                        <label class="labels">¿Cerrar Reporte?:</label>
                                        <select name="estatus" required id='falla_en'>
                                            <option value="" selected>Seleccionar</option >
                                            <option value="0">Si</option  >
                                            <option value="1">No</option >
                    
                                        </select> -->
                </fieldset>
            </div>
            <br> 
            <input type="submit" value="Confirmar"  id='modificar'/>
        </form>
    </div>


</body>
</html>
