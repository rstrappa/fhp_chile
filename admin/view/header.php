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
                      <li class="active has-sub">
                          <a class="js-arrow" href="#">
                            <i class="fas fa-user"></i>Conductores</a>
                          <ul class="list-unstyled navbar__sub-list js-sub-list">
                              <li>
                                  <a href="?c=Usuario&a=SolicitudConductores">Solicitud de conductores</a>
                              </li>
                              <li>
                                  <a href="?c=Usuario&a=Conductores">Ver Conductores</a>
                              </li>
                              <li>
                                  <a href="?c=Usuario&a=AsignarConductores">Asignar conductores</a>
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
                    <img src="../view/images/logo.png" alt="" style="POSITION: RELATIVE; top: -9px; width:30px; margin-top:20px;" />
                    <label style="color:#23272A;  font-family: sans-serif; position: relative; top: 10px; left: 30px; font-size:15px;">FHP</label><br>
                  <!--  <label style="color: #23272A; font-family: sans-serif; font-size: 15px; position: relative; left: 48px; top: -16px;">Help & Partners</label>-->
                </a>
            </div>
            <div class="menu-sidebar__content js-scrollbar1">
                <nav class="navbar-sidebar">
                    <ul class="list-unstyled navbar__list">
                        <li class="active has-sub">
                            <a class="js-arrow" href="#">
                              <i class="fas fa-user"></i>Conductores</a>
                            <ul class="list-unstyled navbar__sub-list js-sub-list">
                                <li>
                                    <a href="?c=Usuario&a=SolicitudConductores">Solicitud de conductores</a>
                                </li>
                                <li>
                                    <a href="?c=Usuario&a=Conductores">Ver Conductores</a>
                                </li>
                                <li>
                                    <a href="?c=Usuario&a=AsignarConductores">Asignar conductores</a>
                                </li>
                            </ul>
                        </li>
                        <li class="active has-sub">
                            <a class="js-arrow" href="#">
                              <i class="fas fa-box"></i>Clientes</a>
                            <ul class="list-unstyled navbar__sub-list js-sub-list">
                                <li>
                                    <a href="?c=Usuario&a=IngresarClientes">Ingresar clientes</a>
                                </li>
                                <li>
                                    <a href="?c=Usuario&a=Clientes">Ver Clientes</a>
                                </li>
                            </ul>
                        </li>
                        <li class="active has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-list-alt"></i>Ordenes de compra</a>
                            <ul class="list-unstyled navbar__sub-list js-sub-list">
                              <li>
                                <a href="?c=Usuario&a=SubirOrden">Subir una orden de compra</a>
                              </li>
                              <li>
                                  <a href="?c=Usuario&a=ListarOrden">Ver ordenes de compra</a>
                              </li>
                            </ul>
                        </li>
                        <li class="active has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-cart-plus"></i>Entregas</a>
                            <ul class="list-unstyled navbar__sub-list js-sub-list">
                              <li>
                                <a href="?c=Usuario&a=Entregas">Ver entregas</a>
                              </li>

                            </ul>
                        </li>

                        <li class="active has-sub btn btn-danger" >
                            <a style="color:white;" class="js-arrow" href="?c=Usuario&a=BorrarTodo">
                                <i class=""></i>ELIMINAR TODO</a>
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
                            <form class="form-header" action="" method="POST">
                                <input class="au-input au-input--xl" type="text" name="search" placeholder="Search for datas &amp; reports..." />
                                <button class="au-btn--submit" type="submit">
                                    <i class="zmdi zmdi-search"></i>
                                </button>
                            </form>
                            <div class="header-button">
                                <div class="noti-wrap">
                                    <div class="noti__item js-item-menu">
                                        <i class="zmdi zmdi-comment-more"></i>
                                        <span class="quantity">1</span>
                                        <div class="mess-dropdown js-dropdown">
                                            <div class="mess__title">
                                                <p>You have 2 news message</p>
                                            </div>
                                            <div class="mess__item">
                                                <div class="image img-cir img-40">
                                                    <img src="images/icon/avatar-06.jpg" alt="Michelle Moreno" />
                                                </div>
                                                <div class="content">
                                                    <h6>Michelle Moreno</h6>
                                                    <p>Have sent a photo</p>
                                                    <span class="time">3 min ago</span>
                                                </div>
                                            </div>
                                            <div class="mess__item">
                                                <div class="image img-cir img-40">
                                                    <img src="images/icon/avatar-04.jpg" alt="Diane Myers" />
                                                </div>
                                                <div class="content">
                                                    <h6>Diane Myers</h6>
                                                    <p>You are now connected on message</p>
                                                    <span class="time">Yesterday</span>
                                                </div>
                                            </div>
                                            <div class="mess__footer">
                                                <a href="#">View all messages</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="noti__item js-item-menu">
                                        <i class="zmdi zmdi-email"></i>
                                        <span class="quantity">1</span>
                                        <div class="email-dropdown js-dropdown">
                                            <div class="email__title">
                                                <p>You have 3 New Emails</p>
                                            </div>
                                            <div class="email__item">
                                                <div class="image img-cir img-40">
                                                    <img src="images/icon/avatar-06.jpg" alt="Cynthia Harvey" />
                                                </div>
                                                <div class="content">
                                                    <p>Meeting about new dashboard...</p>
                                                    <span>Cynthia Harvey, 3 min ago</span>
                                                </div>
                                            </div>
                                            <div class="email__item">
                                                <div class="image img-cir img-40">
                                                    <img src="images/icon/avatar-05.jpg" alt="Cynthia Harvey" />
                                                </div>
                                                <div class="content">
                                                    <p>Meeting about new dashboard...</p>
                                                    <span>Cynthia Harvey, Yesterday</span>
                                                </div>
                                            </div>
                                            <div class="email__item">
                                                <div class="image img-cir img-40">
                                                    <img src="images/icon/avatar-04.jpg" alt="Cynthia Harvey" />
                                                </div>
                                                <div class="content">
                                                    <p>Meeting about new dashboard...</p>
                                                    <span>Cynthia Harvey, April 12,,2018</span>
                                                </div>
                                            </div>
                                            <div class="email__footer">
                                                <a href="#">See all emails</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="noti__item js-item-menu">
                                        <i class="zmdi zmdi-notifications"></i>
                                        <span class="quantity">3</span>
                                        <div class="notifi-dropdown js-dropdown">
                                            <div class="notifi__title">
                                                <p>You have 3 Notifications</p>
                                            </div>
                                            <div class="notifi__item">
                                                <div class="bg-c1 img-cir img-40">
                                                    <i class="zmdi zmdi-email-open"></i>
                                                </div>
                                                <div class="content">
                                                    <p>You got a email notification</p>
                                                    <span class="date">April 12, 2018 06:50</span>
                                                </div>
                                            </div>
                                            <div class="notifi__item">
                                                <div class="bg-c2 img-cir img-40">
                                                    <i class="zmdi zmdi-account-box"></i>
                                                </div>
                                                <div class="content">
                                                    <p>Your account has been blocked</p>
                                                    <span class="date">April 12, 2018 06:50</span>
                                                </div>
                                            </div>
                                            <div class="notifi__item">
                                                <div class="bg-c3 img-cir img-40">
                                                    <i class="zmdi zmdi-file-text"></i>
                                                </div>
                                                <div class="content">
                                                    <p>You got a new file</p>
                                                    <span class="date">April 12, 2018 06:50</span>
                                                </div>
                                            </div>
                                            <div class="notifi__footer">
                                                <a href="#">All notifications</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="account-wrap">
                                    <div class="account-item clearfix js-item-menu">
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
                                            <a class="js-acc-btn" href="#"><?php echo $sU->nombre ?></a>
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
                                                    <a href="?c=Usuario&a=CambiarContraseña">
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
