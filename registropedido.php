<?php
session_start();
 $nombre=$_SESSION['nombre'];
 $apellido=$_SESSION['apellido'];
 $correo=$_POST['correo'];
 $ubicacion=$_POST['ubicacion'];
 echo $correo;
 echo $ubicacion;
 $total=$_SESSION['totalpagar'];
if (isset($_SESSION['carrito'])) {
    $mi_carrito=$_SESSION['carrito'];
    for ($i=0; $i <count($mi_carrito) ; $i++) { 
        echo "<br>".$mi_carrito[$i]['titulo']."////".$mi_carrito[$i]["precio"];
            if ($i<count($mi_carrito)-1) {
                $respuesta=($i+1)."=>".$mi_carrito[$i]['titulo']." |precio ".$mi_carrito[$i]["precio"]." |cantidad".$mi_carrito[$i]["cantidad"]." + ";
                $factura=($i+1)."=>".$mi_carrito[$i]['titulo']." |precio ".$mi_carrito[$i]["precio"]." |cantidad".$mi_carrito[$i]["cantidad"]."<br>";
            }else{
                $respuesta=($i+1)."=>".$mi_carrito[$i]['titulo']."|precio ".$mi_carrito[$i]["precio"]."| cantidad".$mi_carrito[$i]["cantidad"];
                $factura=($i+1)."=>".$mi_carrito[$i]['titulo']." |precio ".$mi_carrito[$i]["precio"]." |cantidad".$mi_carrito[$i]["cantidad"]."<br>";
            }
            $facturacum -= $factura;
            $acumulador .= $respuesta;
        
    }
}
echo "<br>".$acumulador;
$handle=fopen("registropedidos.txt","a+");
$texto=$nombre."|".$apellido."|".$correo."|".$ubicacion."|".$acumulador."|".$total."s/.".chr(50).chr(10);
fwrite($handle, $texto);
fclose($handle);
include "correo.php";
include "borrarcarrro.php";
session_destroy();
header("location:login.html");
?>
