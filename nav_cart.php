<?php
if (isset($_SESSION['carrito'])) {
    $mi_carrito=$_SESSION['carrito'];
}
if (isset($_SESSION['carrito'])) {
    for($i=0;$i<=count($mi_carrito);$i++){
        if (isset($mi_carrito[$i])) {
            if ($mi_carrito[$i] != null) {
                if (!isset($mi_carrito['cantidad'])) {
                    $mi_carrito['cantidad']='0'; 
                }else{
                    $mi_carrito['cantidad']=$mi_carrito['cantidad'];
                }
                $total_cantidad = $mi_carrito['cantidad'];
                $total_cantidad ++;
                if (!isset($totalcantidad)) {
                    $totalcantidad='0';
                }else{
                    $totalcantidad=$totalcantidad;
                }
                $totalcantidad += $total_cantidad;
            }
        }
    }
}

    if (!isset($totalcantidad)) {
        $totalcantidad='';
    }else{
        $totalcantidad=$totalcantidad;
    }
?>
<!-- INICIO NAV -->
<nav class="navbar navbar-expand-lg navbar-dark bg-black top-0 w-100">
    <div class="container-fluid">
        <a href="pedido.php" class="navbar-brand">TU CARRO</a>
        <a class="collapse navbar-collapse" data-bs-toggle="modal" data-bs-target="#modal_cart" style="text-decoration: none;cursor:pointer;"><i class="fas fa-shopping-cart text-primary"><?php echo $totalcantidad ?></i></a>
        <a href="index.php" class="navbar-brand text-light">regresar</a>      
    </div>
</nav>
