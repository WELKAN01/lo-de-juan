<?php
session_start();
error_reporting(0);
$handle = fopen("comidas.txt","r");
$todo   = fread($handle, filesize("comidas.txt"));
$lineas = explode(chr(13).chr(10),$todo);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../bootstrap-5.1.3-dist/css/bootstrap.css">
    <link rel="stylesheet" href="../bootstrap-5.1.3-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../bootstrap-5.1.3-dist/fontawesome-free-6.1.1-web/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="../CSS/efectoped.css">
    <title>Document</title>
</head>
<style>
    *{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    }
    body{
        background: url(../CSS/img/POLLERIA_PEDIDO.jpg);
        background-size: 100% 100vh;
        background-repeat: no-repeat;
    }

</style>
<body>

<!-- <?php
include "nav_cart.php";
include "nav_modal.php";
?> -->
<!-- INICIO TABLA -->
    <!-- INICIO FORMULARIO -->
<table class="table table-dark table-hover w-75 m-auto text-center">
    <thead>
        <tr>
            <th>n°</th>
            <th>nombre</th>
            <th>cantidad</th>
            <th>precio</th>
            <th>precio total</th>
        </tr>
    </thead>
    <tbody>
        <?php
			if(isset($_SESSION['carrito'])){
			$total=0;
			for($i=0;$i<count($mi_carrito);$i ++){
			if($mi_carrito[$i]!=NULL){			
            ?>
        <?php if ($mi_carrito[$i]['titulo'] != 'nomas') { ?>
            <tr>
                <td><?php echo $i+1 ?></td>
                <td><?php echo $mi_carrito[$i]['titulo'] ?></td>
                <td><?php echo $mi_carrito[$i]['cantidad'] ?></td>
                <td><?php echo $mi_carrito[$i]['precio'] ?></td>
                <td><?php echo $mi_carrito[$i]['precio'] * $mi_carrito[$i]['cantidad'] ?></td>
            </tr>
        <?php }?>
        <?php
                $total= $total + ($mi_carrito[$i]['precio'] * $mi_carrito[$i]['cantidad']);
                $_SESSION['totalpagar']=$total;
                }
            }
        }
        ?> 
    </tbody>
</table>
<li class="list-group-item d-flex justify-content-between w-75 m-auto">
							<span  style="text-align: left; color: #000000;">Total (s/.)</span>
							<strong  style="text-align: left; color: #000000;"><?php
							if(isset($_SESSION['carrito'])){
							$total=0;
							for($i=0;$i<=count($mi_carrito)-1;$i ++){
							if($mi_carrito[$i]!=NULL){ 
							$total=$total + ($mi_carrito[$i]['precio'] * $mi_carrito[$i]['cantidad']);
							}}}
							echo $total; ?> S/.</strong>
							</li>
<div class="py-5 text-center">
    <form action="registropedido.php" name="formulariopaga" method="post">
        <h1 class="shadow text-light">FORMULARIO</h1>
        <div class="w-75 m-auto bg-dark text-light row py-5">
            <div class="col">
                <label for="correo"> CORREO</label>
                <input type="email" name="correo" id="#correo" required>
            </div>
            <div class="col">
                <label for="ubicacion">ubicacion</label>
                <input type="text" name="ubicacion" id="#ubicacion" required>
            </div>
        </div>
        <a href="pedido.php" class="btn btn-primary">volver</a>
        <input type="submit" class="btn btn-success" value="ingresar tu compra" onclick="INGRESO();">
    </form> 
</div>                     
</body>
<script type="text/javascript">
    function INGRESO(){
        alert("PEDIDO EXITOSO");
    }
</script>
<script src="../bootstrap-5.1.3-dist/js/bootstrap.bundle.min.js"></script>
</html>