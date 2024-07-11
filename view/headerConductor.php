<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags-->
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="au theme template">
  <meta name="author" content="Hau Nguyen">
  <meta name="keywords" content="au theme template">

  <!-- Title Page-->
  <title>Dashboard</title>

  <!-- Fontfaces CSS-->
  <link href="assets/css/font-face.css" rel="stylesheet" media="all">
  <link href="assets/vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
  <link href="assets/vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
  <link href="assets/vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
  <link rel="icon" type="image/png" href="../view/images/logo.png" />
  <!-- Bootstrap CSS-->
  <link href="assets/vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">

  <!-- Vendor CSS-->
  <link href="assets/vendor/animsition/animsition.min.css" rel="stylesheet" media="all">
  <link href="assets/vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet" media="all">
  <link href="assets/vendor/wow/animate.css" rel="stylesheet" media="all">
  <link href="assets/vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all">
  <link href="assets/vendor/slick/slick.css" rel="stylesheet" media="all">
  <link href="assets/vendor/select2/select2.min.css" rel="stylesheet" media="all">
  <link href="assets/vendor/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" media="all">

  <!-- Main CSS-->
  <link href="assets/css/theme.css" rel="stylesheet" media="all">
  <link href="assets/css/miCss.css" rel="stylesheet" media="all">
  <link rel="stylesheet" href="assets/css/datatable.css">
  <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.3/css/responsive.dataTables.min.css">
  <script type="text/javascript" src="https://js.api.here.com/v3/3.1/mapsjs-core.js"></script>
 <script type="text/javascript" src="https://js.api.here.com/v3/3.1/mapsjs-service.js"></script>
 <script type="text/javascript" src="https://js.api.here.com/v3/3.1/mapsjs-ui.js"></script>
 <script type="text/javascript" src="https://js.api.here.com/v3/3.1/mapsjs-mapevents.js"></script>
 <script src="assets/js/firma.js" charset="utf-8"></script>


</head>
<?php
$sU = new Usuario();
$tv = new Tipo_vehiculo();
$sU = $_SESSION['usuario'];
$sC = new Conductor();
$sC = $_SESSION['conductor'];
?>

<body class="animsition">
  <div class="page-wrapper">
      <!-- HEADER MOBILE-->
      <header class="header-mobile d-block d-lg-none">
          <div class="header-mobile__bar">
              <div class="container-fluid">
                  <div class="header-mobile-inner">
                      <a class="logo" href="index.html">
                          <img src="../view/images/logo.png" alt="CoolAdmin" /> <h4>HPChile</h4>
                      </a>
                      <button class="hamburger hamburger--slider" type="button">
                          <span class="hamburger-box">
                              <span class="hamburger-inner"></span>
                          </span>
                      </button>
                  </div>
              </div>
          </div>
          <nav class="navbar-mobile">
              <div class="container-fluid">
                  <ul class="navbar-mobile__list list-unstyled">
                      <li class="has-sub">
                          <a class="js-arrow" href="#">
                              <i class="fas fa-tachometer-alt"></i>Entregas</a>
                          <ul class="navbar-mobile-sub__list list-unstyled js-sub-list">
                              <li>
                                  <a href="?c=Usuario&a=EntregasConductor">Ver entregas</a>
                              </li>

                          </ul>
                      </li>
                  </ul>
              </div>
          </nav>
      </header>
      <!-- END HEADER MOBILE-->

      <!-- MENU SIDEBAR-->
      <aside class="menu-sidebar d-none d-lg-block">
          <div class="logo text-center">
              <a href="?c=Usuario&a=Dashboard" class=" text-center" style="color:black; font-weight: bold;">
                  <img src="../view/images/logo.png" alt="" style="POSITION: RELATIVE; top: 6px; width:30px; margin-top:20px;" />
                  <label style="color:white;  font-family: sans-serif; position: relative; top: 10px; left: 30px; font-size:15px;">Foreigners</label><br>
                  <label style="color: white; font-family: sans-serif; font-size: 15px; position: relative; left: 48px; top: -16px;">Help & Partners</label>
              </a>
          </div>
          <div class="menu-sidebar__content js-scrollbar1">
              <nav class="navbar-sidebar">
                <div class="text-center" style="background-color: #0f18c0;padding-left: 12px; height: 261px;width: 200px; border-radius: 20px 0px 20px 20px;box-shadow: 0px 4px 40px rgba(0, 0, 0, 0.25);">
                  <img style="border: 12px solid #FFFFFF;width: 177px;height: 172px;-moz-border-radius: 50%;-webkit-border-radius: 50%;border-radius: 50%;position: relative;top: 13px;left: -5px;" src="<?php echo $sC->src_perfil ?>" alt="">
                  <br>
                  <h5 style="position: relative;top: 37px;color: white;font-weight: 500;"><?php echo $sU->nombre ?></h5>
                </div>
                <br>
                  <ul class="list-unstyled navbar__list">
                      <li class="active has-sub"style="background-color: #0f18c0;
                            padding-left: 12px;
                            border-radius: 20px 0px 20px 20px;
                            box-shadow: 0px 4px 40px rgba(0, 0, 0, 0.25);">
                          <a class="js-arrow" href="#">
                              <i class="fas fa-cart-plus"></i>Mis entregas</a>
                          <ul class="list-unstyled navbar__sub-list js-sub-list">
                            <li>
                              <a href="?c=Usuario&a=EntregasConductor">Ver entregas</a>
                            </li>

                          </ul>
                      </li>


                              <!--<li>
                                  <a href="typo.html">Typography</a>
                              </li>!-->
                          </ul>
                      </li>
                  </ul>
              </nav>
          </div>
      </aside>
      <!-- END MENU SIDEBAR-->

      <!-- PAGE CONTAINER-->
      <div class="page-container">
          <!-- HEADER DESKTOP-->
          <header class="header-desktop">
              <div class="section__content section__content--p30">
                  <div class="container-fluid">
                      <div class="header-wrap">

                          <div class="header-button" style="position:relative; left:75%;">
                              <div class="account-wrap" style="float:left;">
                                  <div class="account-item clearfix js-item-menu" style="float:left;">
                                    <div class="image" style="background-color:#ECEFF5;">

                                    </div>
                                      <div class="content">
                                          <a class="js-acc-btn" href="#">Opciones</a>
                                      </div>
                                      <div class="account-dropdown js-dropdown">
                                          <div class="info clearfix">
                                            <div class="image">
                                                <a href="#">
                                                   <?php if ($sC->src_perfil == null): ?>
                                                     <img src="assets/images/perfil.jpg" alt="">
                                                   <?php endif; ?>
                                                   <?php if ($sC->src_perfil !=null): ?>
                                                     <img src="<?php echo $sC->src_perfil ?>" alt="">
                                                   <?php endif; ?>
                                                </a>
                                            </div>
                                              <div class="content">
                                                  <h5 class="name">
                                                      <a href="#"><?php echo $sC->nombre ?></a>
                                                  </h5>
                                                  <span class="email"><?php echo $sC->patente_vehiculo ?></span>
                                              </div>
                                          </div>
                                          <div class="account-dropdown__body">
                                              <div class="account-dropdown__item">
                                                  <a href="?c=Usuario&a=MisDatos">
                                                      <i class="zmdi zmdi-account"></i>Mi cuenta</a>
                                              </div>

                                          </div>
                                          <div class="account-dropdown__body">
                                              <div class="account-dropdown__item">
                                                  <a href="?c=Usuario&a=CambiarContraseñaU">
                                                      <i class="zmdi zmdi-account"></i>Actualizar Contraseña</a>
                                              </div>

                                          </div>
                                          <div class="account-dropdown__footer">
                                              <a href="?c=Usuario&a=logOut">
                                                  <i class="zmdi zmdi-power"></i>Logout</a>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </header>
          <!-- HEADER DESKTOP-->
