<!DOCTYPE html>
<html>
	<head>
		<!-- Metas -->
		<!--<meta charset="utf-8">-->
		<meta name="author" content="Equipo1">	
		<meta name="descryption" content="">
		<meta name="keywords" content="">
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <meta http-equiv="content-type" content="text/html; charset=ISO-8859-1"/>
		<meta name="robots" content="index, follow">
		<!-- Links -->
		<link href="css/custom.css" rel="stylesheet">
	    <link rel="stylesheet" type="text/css" href="/administrador/css/reporte.css">
        <link rel="stylesheet" type="text/css" href="/administrador/css/style3.css">
            <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
		<link rel="icon" href="favicon.ico" type="image/x-icon">
		<title></title>
        <script type="text/javascript">
            function obtener(rfc)
            {

                var valor = document.getElementById('valor_rfc2');
                valor.value = rfc;
                document.getElementById("formulario").submit();

            }
         </script>



	</head>
	<body id="cuerpo">
        <?php
			    $link = mysql_connect('localhost', 'root', '')or die('No se pudo conectar: ' . mysql_error());
				$db=mysql_select_db('computo_integral', $link) or die('No se pudo seleccionar la base de datos');
                $consulta = mysql_query("select *from empleado_ci ");
                echo "<br>";
				echo "<form method='post' action='../iframes/editar_empleado.php'  id='formulario'>" ;
                echo "<input type='hidden' name='valor_rfc2' value='' id='valor_rfc2'>";
                echo "</form>";
               // echo "<form method='post' action='../iframes/editar_empleado.php'  name='form'>" ;
                echo "<center><table width='200%' id='table'>";  
                echo "<tr>";  

echo "<th>RCF</th>";  
echo "<th>Nombre</th>";  
echo "<th>Mail</th>";  
echo "<th>Editar</th>"; 

echo "</tr>";  

while ($row = mysql_fetch_row($consulta)){   
    $nombre=utf8_encode($row[1]);
    $a_paterno=utf8_encode($row[2]);
    $a_materno=utf8_encode($row[3]);
    $rfc=$row[0];
    
    echo "<tr>";  
    echo "<td width='30%' name='valor_rfc' id='valrfc' >$rfc</td>"; 
   echo "<td width='30%' >$nombre $a_paterno $a_materno</td>";  
   echo "<td>$row[5]</td>";  
    echo "<td>$row[7]</td>";  
    echo "<td><input type='button' value='modificar' OnClick='obtener(\"$rfc\")'></td>";  
    echo "</tr>";  
  
}  

						echo "</table></center>";
                          echo "</form>";
                       
					?>
    </body>
</html>

