<?php
  session_start();
     error_reporting(E_ALL);
    ini_set('display_errors', '1');
    
   $conexion =mysql_connect('', '', '')or die ('Ha fallado la conexión: '.mysql_error());
    $link =     mysql_select_db('')or die ('Error al seleccionar la Base de Datos: '.mysql_error());

        $rfc=$_SESSION['s_rfc'];    
 $tel= $_POST['telefono'];
 $calle=$_POST['calle'];
 $colonia=$_POST['colonia'];
 $delmun=$_POST['delmun'];
 $localidad=$_POST['localidad'];
  $numint=$_POST['numero_interior'];
 $numext=$_POST['numero_exterior'];
 $niv_est=$_POST['niv_estudios'];
 $tit_prof=$_POST['tit_profesional'];
 $ced_prof=$_POST['ced_profesional'];
 $categoria=$_POST['categoria'];
 $niv_cat=$_POST['niv_cat'];

 if (isset($_SESSION['s_rfc'])) {
  $query = mysql_query("UPDATE Usuario set telefono='$tel' WHERE rfc='$rfc'") or die(mysql_error) ; 
  //          echo "UPDATE usuario set telefono='$tel' WHERE rfc='$rfc'";
//            echo "UPDATE usuario set telefono='$tel'  WHERE rfc='$rfc'"  ; 
    		/*$consulta = mysql_query("select * from usuario  WHERE rfc ='$rfc' ");
            $rfc1= $filas[0];
            $nombre1= $filas[1];
            $ap_paterno1= $filas[2];
            $ap_materno1= $filas[3];
            $genero1=$filas[4];
            $fecha1=$filas[5];
            $email1=$filas[6];
            $tel1=$filas[7];*/
   }

            if (isset($_SESSION['s_rfc'])) {
            $query2 =  mysql_query("UPDATE Direccion set localidad='$localidad',delmun='$delmun',colonia='$colonia',calle='$calle',
            num_exterior='$numext',num_interior='$numint'  WHERE usuario='$rfc'") or die(mysql_error) ;         
            
            /*$consulta2 = mysql_query("select * from direccion  WHERE usuario ='$rfc' ");
            $filas2 = mysql_fetch_row($consulta2);
            $localidad1=$filas2[1];
            $delmun1=$filas2[2];
            $colonia1=$filas2[3];   
            $calle1=$filas2[4];
            $numext1=$filas2[5];
            $numint1=$filas2[6];*/
            }
            
			if (isset($_SESSION['s_rfc'])) {
            $query3 = mysql_query("UPDATE Profesor set niv_estudios='$niv_est',tit_profesional='$tit_prof',ced_profesional='$ced_prof',
            categoria='$categoria',niv_categoria='$niv_cat'  WHERE rfc='$rfc'") or die(mysql_error) ;         
            /*echo "UPDATE profesor set niv_estudios='$niv_est',tit_profesional='$tit_prof',ced_profesional='$ced_prof',
            categoria='$categoria',niv_categoria='$niv_cat'  WHERE rfc='$rfc'"  ; 
          $consulta3 = mysql_query("select * from profesor  WHERE rfc ='$rfc' ");
            $filas3 = mysql_fetch_row($consulta3);
            $numempleado1=$filas3[1];   
            $niv_est1=$filas3[2];
            $tit_prof1=$filas3[3];
            $ced_prof1=$filas3[4];
            $categoria1=$filas3[5];
            $niv_cat1=$filas3[6];*/
            
            }
            



?>

<html>
    <?php header("location:datos_profesor2.php");?>
  

                          
  
</html>