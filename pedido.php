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
        background-size: 100% 100%;
        background-repeat: no-repeat;
    }

</style>
<body>

<?php
include "nav_cart.php";
include "nav_modal.php";
?>
<!-- INICIO TABLA -->
    <!-- INICIO FORMULARIO -->
    <div class="mx-auto border border-light col-10 px-5 my-5 text-center bg-black bg-opacity-50">
    <div class="row text-light">
    <h1 class="text-danger"><?php echo "Cantidad de menu :".count($lineas) ?></h1>
    <?php for($i=0;$i<count($lineas);$i++){ 
                $palabra = explode("|",$lineas[$i]);
            ?> 
        <form action="carrito.php" method="post" class="col-6">
                <!--Carta menu  -->
                    <div class="border w-100 text-center p-1">
                    <input type="hidden" name="precio" id="precio" value="<?php echo $palabra[2] ?>">
                    <img src="../CSS/img/<?php echo $palabra[3]; ?>.png" alt="">
                    <input type="hidden" name="titulo" id="titulo" value="<?php echo $palabra[1] ?>">
                    <h5><?php echo $palabra[1] ?></h5>
                    <input type="text" name="cantidad" id="cantidad" step="1" value="1" class="form-text my-3"><br>
                    <input type="submit" value="Ingresar pedido" name="" class="w-50 btn btn-success">
                    </div>      
        </form>
        <?php }?> 
    </div> 
    </div>
</body>
<script src="JS/SCRIPTPEDIDO.JS"></script>
<script src="../bootstrap-5.1.3-dist/js/bootstrap.bundle.min.js"></script>
</html>