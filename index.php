<?php
 session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lo de Juan</title>
    <link rel="stylesheet" href="../CSS/efectopag.css">
    <link rel="stylesheet" href="../bootstrap-5.1.3-dist/css/bootstrap.css">
    <script src="https://kit.fontawesome.com/1275d54f73.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../bootstrap-5.1.3-dist/fontawesome-free-6.1.1-web/css/all.min.css">  
    <script defer src="../JS/SCRIPT.JS"></script>
    <script src="../bootstrap-5.1.3-dist/js/bootstrap.js"></script>
</head>
<body class="bg-black">
    <!-- INICIO HEADER  -->
    <header class="header">
        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
            </div>
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="../CSS/img/POLLO_CARRUSEL.png" class="d-block w-100"  alt="...">
              </div>
              <div class="carousel-item">
                <img src="../CSS/img/COMIDA_CARRUSEL.png"  class="d-block w-100"  alt="...">
              </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div> 
    </header>
    <nav class="nav">
      <a href="#" class="logo-tittle">LA DE JUAN</a>
      <span class="button-menu" aria-label="Abrir menu"  onclick="toggleNavMenu()" onclick="cambioicon()">
          <i class="fas fa-bars"></i></span>
      <ul class="nav-menu" id="menu-option">
          <li class="nav-menu-item"><a href="#comidas" class="nav-menu-link" id="focuspress" onclick="toggleNavMenu()">MENUS</a></li>
          
          <li class="nav-menu-item"><a href="#locales" class="nav-menu-link" id="focuspress" onclick="toggleNavMenu()">LOCALES</a></li>
          
          <li class="nav-menu-item"><a href="#pedidos" class="nav-menu-link" id="focuspress"  onclick="toggleNavMenu()">Pedidos</a></li>
          <li class="nav-menu-item"><a href="cerrarsesion.php" class="nav-menu-link" id="focuspress">Cerrar sesion</a></li>
          <li class="nav-menu-item"><span  class="nav-menu-link-perfil" id="focuspress"><i class="fa-solid fa-person"></i><?php echo " BIENVENIDO :D ".$_SESSION['username'] ?></span></li>
      </ul>
  </nav>  
      <!-- FINAL HEADER -->
      <!-- contenido menu -->
      <div class="bg-danger py-5 w-100" id="comidas">
        <h1 class="text-center text-dark py-2">MENU DEL JUAN</h1>
        <div class="row g-3">
          <div class="col-6 col-lg-6">
            <div class="p-3 text-center border bg-light">Pollo a la brasa 1/2+gaseosa
                <img src="../CSS/img/POLLO_A_LA_BRASA.png"  class="w-100 py-3" alt="">
                <ul>
                  <li>1/2 pollo a la brasa</li>
                  <li>papas fritas</li>
                  <li>1/2 ensalada</li>
                  <li>gaseosa 1.5L(inka cola o coca cola)</li>
                </ul>
                  <h3>Precio: 50 SOLES</h3>
            </div>
          </div>
          <div class="col-6 col-lg-6">
            <div class="p-3 text-center border bg-light">Pollo a la brasa + gaseosa + anticucho
              <img src="../CSS/img/POLLO_A_LA_BRASA.png"  class="w-100 py-3" alt="">
                <ul>
                  <li>1 pollo a la brasa</li>
                  <li>papas fritas</li>
                  <li>1 ensalada</li>
                  <li>gaseosa 3L(inka cola o coca cola)</li>
                </ul>
                <h3>Precio: 78 SOLES</h3>
            </div>
          </div>
          <div class="col-6 col-lg-6">
            <div class="p-3 text-center border bg-light">parillada dominical+gaseosa
              <img src="../CSS/img/parrillada_promo.png"  class="w-100 py-3" alt="">
                <ul>
                  <li>1/2 pollo a la brasa + 8 piezas de cerdo + 4 chorizos + 4 carnes</li>
                  <li>papas fritas</li>
                  <li>1/2 ensalada</li>
                  <li>gaseosa (inka cola o coca cola)</li>
                </ul>
                <h3>Precio: 86 SOLES</h3>
            </div>
          </div>
          <div class="col-6 col-lg-6" >
            <div class="p-3 text-center border bg-light">AEROPUERTO+gaseosa personal
              <img src="../CSS/img/AEROPUERTO.png"  class="w-100 py-3" alt="">
                <ul>
                  <li>1/2 pollo a la brasa</li>
                  <li>papas fritas</li>
                  <li>1/4 ensalada</li>
                  <li>gaseosa (inka cola o coca cola)</li>
                  
                </ul>
                <h3>Precio: 12 SOLES</h3>
            </div>
          </div>
          <div class="col-6 col-lg-6">
            <div class="p-3 text-center border bg-light">MONSTRUITO+gaseosa personal
              <img src="../CSS/img/MONSTRUITO.png"  class="w-100 py-3" alt="">
                <ul>
                  <li>1/4 pollo a la brasa</li>
                  <li>papas fritas</li>
                  <li>chaufa</li>
                  <li>1/4 ensalada</li>
                  <li>gaseosa (inka cola o coca cola)</li>
                  
                </ul>
                <h3>Precio: 12 SOLES</h3>
            </div>  
          </div>
          <div class="col-6 col-lg-6">
            <div class="p-3 text-center border bg-light">1/4 Pollo a la brasa +gaseosa
              <img src="../CSS/img/POLLO_A_LA_BRASA.png"  class="w-100 py-3" alt="">
                <ul>
                  <li>1/4 pollo a la brasa</li>
                  <li>papas fritas</li>
                  <li>1/2 ensalada</li>
                  <li>gaseosa (inka cola o coca cola)</li>
                </ul>
                <h3 class="py-2">Precio: 32 SOLES</h3>
            </div>
          </div>
        </div>
      </div>
    <!-- fin menu -->
    <div class="locales container-fluid my-5" id="locales">
      <div class="locales-imagen"> <h1 class="text-center text-secondary py-5 py-sm-3 py-lg-5">LOCALES</h1>
        <div class="row g-2">
          <div class="col-6 justify-content-between">
            <img src="../CSS/img/LOCAL_1.PNG" class="w-100 h-50" alt="">
            <H3 class="text-center text-light">Lo De Juan Chicken & Grill - Pachacamac, Av. Victor Malasquez 2015, Lima 15594</H3>
          </div>
          <div class="col-6 justify-content-between">
            <img src="../CSS/img/LOCAL_2.PNG" class="w-100 h-50" alt="">
            <H3 class="text-center text-light">Lo De Juan Chicken & Grill - 21,Avenida Jos?? Carlos Mari??tegui, Villa El Salvador, Lima</H3>
          </div>
        </div>
      </div>
    </div>
    <div class="pedidos" id="pedidos">
      <div class="col-12 my-5 perfil">
        
          <H1 class="p-5"> INGRESE AQUI PARA PROCEDER TUS PEDIDOS</H1>
          <a href="pedido.php">PRESIONAR</a>

      </div>
    </div>  
    <footer>
      <div class="container-fluid bg-gradient bg-dark">
        <h3 class="text-light">
          Encuentranos en: 
        </h3>
        <div class="footer-contenido">
          <a href="" ><i class="fa-brands fa-facebook"></i></a>
          <a href="" ><i class="fa-brands fa-youtube"></i></a>
          <a href="" ><i class="fa-brands fa-twitter"></i></a>
        </div>
      </div>
    </footer>
</body>
</html>