<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
  <title>e-Commerce</title>
  <link href="https://fonts.googleapis.com/css?family=Sofadi+One" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="assets/css/style.css">
</head>
<body>
  <img src="" alt="">

    <section class="container-fluid">
      <div class="row shipping">
      <div class="col-xs-2 dropdown hidden-sm hidden-md hidden-lg">

          <button class="dropdown-toggle" type="button" id="dropdownMenu1" 
          data-toggle="dropdown" aria-expanded="true"><i class="fas fa-bars"></i><span ></span>
  </button>
  <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu1">
  <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Perfil</a></li>
    <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Decoracion</a></li>
    <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Deportes</a></li>
    <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Accesorios</a></li>
    <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Juegos</a></li>
    <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Example</a></li>
    <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Salir</a></li>
  </ul>
</div>
        <div class="col-xs-10 col-md-6">
          <a href="#"><p class="p-shipping">FREE SHIPPING on orders above</p></a>
        </div>
        <div class="col-md-6 hidden-xs">
          <ul class="registry">
            <li class="optionMenu"><a class="menu-desktop" href="#">Registry</a></li>
            <li class="optionMenu"><a class="menu-desktop" href="#"><i class="fas fa-shopping-cart"></i></a></li>
            <li class="optionMenu"><a class="menu-desktop" href="#">Login</a></li>
          </ul>
        </div>
      </div>



    <div class="row">
      <div class="container-logo col-md-12">
        <img src="assets/img/logotf.png" class="logo">
      </div>

    
  <div class="row">
    <div class="contenedor">
      <p class="amount"></p>
      <p class="balance"></p>
    </div>
  </div>


   <div class="panel-body">
    <?php
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);
 
                   
    $MP_SHORT_NAME = "mp-app-303963951";
    $MP_CLIENT_ID = "3161981920499652";
    $MP_CLIENT_SECRET = "BZd641UsIgZmfZ1iCJqdrvCWD3s5b5qs";
 
    echo "El codigo SHORT_NAME es: ".$MP_SHORT_NAME."<br>";
    echo "El codigo CLIENT_ID es: ".$MP_CLIENT_ID."<br>";
    echo "El codigo CLIENT_SECRET es: ".$MP_CLIENT_SECRET."<br>";
 
   
    require_once ('lib/mercadopago.php');
 
    $mp = new MP ($MP_CLIENT_ID, $MP_CLIENT_SECRET);
    $access_token = $mp->get_access_token();
 
    echo "El codigo ACCESS_TOKEN es: ".$access_token."<br>";
    ?>
  </div>

  <section id="vanilla">
        <div class="col-xs-12 col-sm-10 col-sm-offset-1 col-md-10 col-md-offset-1 col-lg-10">
          <div id="custom-search-input">
            <div class="input-group col-md-12">
              <input id="busqueda" type="text" class="form-control input-lg" placeholder="Buscar" />
                <span class="input-group-btn">
                  <button id="buscar" class="btn btn-info btn-lg" type="button">
                    <i class="fas fa-search"></i>
                  </button>
                </span>
            </div>
          </div>
        </div>
   </div>
 </section>
     <section id="categories" class="row hidden-xs hidden-sm">
     <div class=" text-center">
       <ul id="categories" class="examples col-lg-12 col-md-12">
         <li class="text-center option text-uppercase"><a class="option-desktop" href="">decoracion</a></li>
         <li class="text-center option text-uppercase"><a class="option-desktop" href="">deportes</a></li>
         <li class="text-center option text-uppercase"><a class="option-desktop" href="">accesorios</a></li>
         <li class="text-center option text-uppercase"><a class="option-desktop" href="">juegos</a></li>
         <li class="text-center option text-uppercase"><a class="option-desktop" href="">example</a></li>
       </ul>
     </div>
   </section>

   <div id="contenedor">
     <div id="info"></div>
   </div>

   <button id="pagar"> </button>



  
  <script src="https://secure.mlstatic.com/sdk/javascript/v1/mercadopago.js"></script>
  <script crossorigin src="https://unpkg.com/react@16/umd/react.development.js"></script>
<script crossorigin src="https://unpkg.com/react-dom@16/umd/react-dom.development.js"></script>
  
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  
  <script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>
  <script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
  <script type="text/javascript" src="assets/js/token.js"></script>
   <script type="text/javascript" src="assets/js/shop.js"></script>
  <script type="text/javascript" src="assets/js/app.js"></script>
  <script type="text/javascript" src="assets/js/vanilla.js"></script>
  <script type="text/javascript" src="assets/js/route.js"></script>
  <script type="text/javascript" src="assets/js/router.js"></script>
</body>
</html>