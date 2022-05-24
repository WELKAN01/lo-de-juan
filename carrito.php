<?php
session_start();
if (isset($_SESSION['carrito']) || isset($_POST['titulo'])) {
    echo "<h1> existe </h1>";
    if (isset($_SESSION['carrito'])) {
        $mi_carrito = $_SESSION['carrito'];
        if (isset($_POST['titulo'])) {
                $titulo=$_POST['titulo'];
                $precio=$_POST['precio'];
                $cantidad=$_POST['cantidad'];
                $numero=0;
                    $mi_carrito[]=array('titulo'=>$titulo,"precio"=>$precio,"cantidad"=>$cantidad);
                
        }
    }else{
        $titulo=$_POST['titulo'];
        $precio=$_POST['precio'];
        $cantidad=$_POST['cantidad'];
        $mi_carrito[]=array('titulo'=>$titulo,"precio"=>$precio,"cantidad"=>$cantidad);
    }
}
$_SESSION['carrito']=$mi_carrito;


header("location: ".$_SERVER['HTTP_REFERER']."");
?>