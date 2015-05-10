

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
        <script type='text/javascript' src='/administrador/js/formexp.js'></script>
<!--        <script>
            function expandir_formulario() {
                if (document.formulario.expandir.checked) {
                    xDisplay('capaexpansion', 'block')
                } else {
                    xDisplay('capaexpansion', 'none')
                }

            }

        </script>
        <style type="text/css">
            #capainicio{
                position:relative;
            }
            #capaexpansion{
                position:relative;
                display:none;

            }
            #capafinal{
                position:relative;

            }
        </style>-->

    </head>
    <body id="cuerpo">


        <form name="formulario" method='post' action='/Computo_Integral/administrador/guardar/guardar_empresa.php' enctype='multipart/form-data' class='forms' id="myForm   ">
            <input type="hidden" name="nombre_empresa" value="<?php echo $_POST['nombre_empresa']; ?>">
            <input type="hidden" name="rfc_empresa" value="<?php echo $_POST['rfc_empresa']; ?>">
            <input type="hidden" name="calle" value="<?php echo $_POST['calle']; ?>">
            <input type="hidden" name="colonia" value="<?php echo $_POST['colonia']; ?>">
            <input type="hidden" name="num_ext" value="<?php echo $_POST['num_ext']; ?>">
            <input type="hidden" name="num_int" value="<?php echo $_POST['num_int']; ?>">
            <input type="hidden" name="cod_post" value="<?php echo $_POST['cod_post']; ?>">
            <input type="hidden" name="localidad" value="<?php echo $_POST['localidad']; ?>">
            <input type="hidden" name="del_mun" value="<?php echo $_POST['del_mun']; ?>">
            <div class='datos'>
                <fieldset class='fieldsets'>
                    <legend><label class='legends'>Resposable 1</label></legend>
                    <br>
                    <label class='labels'>RFC:</label>
                    <input type='text' class='inputs' value=""  name='rfc_resp1'   
                           required  style="text-align: center;" 
                           onkeyup="form.rfc.value = form.rfc.value.toUpperCase();">    
                    <label class='labels'>Nombre:</label>
                    <input type='text' class='inputs' value=""  name='nombre_resp1'   
                           required  style="text-align: center;text-transform: capitalize">
                    <label class='labels'>Apellido Paterno:</label>
                    <input type='text' class='inputs' value=""  name='ap_pat_resp1' 
                           required  style="text-align: center;text-transform: capitalize">
                    <label class='labels'>Apellido Materno:</label>
                    <input type='text' class='inputs' value=""  name='ap_mat_resp1' 
                           required  style="text-align: center;text-transform: capitalize">
                    <br>
                    <label class='labels'>Telefono Celular:</label>
                    <input type='text' class='inputs' value=""  name='tel_cel_resp1' required
                           pattern='^[0-9]{10}'  title="Formato requerido solo números"
                           style="text-align: center;">
                    <label class='labels'>Telefono Oficina:</label>
                    <input type='text' class='inputs' value=""  name='tel_of_resp1' required
                           pattern='^[0-9]{8}'  title="Formato requerido solo números"
                           style="text-align: center;">
                    <label class='labels'>Extención:</label>
                    <input type='text' class='inputs' value=""  name='ext_resp1' 
                           pattern='^[0-9]{3,5}'  title="Formato requerido solo números"
                           style="text-align: center;">
                    <label class='labels'>Correo Electronico:</label>
                    <input type='text' class='inputs' value=""  name='mail_resp1' required
                           pattern='[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$' id="field_username" style="width:280px;text-align: center;">


                    <label class='labels'>Contraseña:</label>
                    <input id="field_pwd1" title="Password must contain at least 6 characters, including UPPER/lowercase and numbers." type="password" required pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,}" name="pwd_resp1" class="inputs"
                           style="text-align: center;">
                    <br>
                    <!--                        <label class="labels2">agregar otro usuario</label>
                                            <input type="checkbox" name="expandir" value="1" onclick="expandir_formulario()">-->

                </fieldset>

            </div>

            <br>
            <input type="submit" value="Confirmar"  id='modificar' style=""/>
            <br>
            <br>
        </form>

        <br>
    </div>


</body>
</html>
