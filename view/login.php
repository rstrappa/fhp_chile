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
    <title>Login</title>

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
    <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">

</head>

<body class="animsition">
    <div style="width:100%; height:100%; background-color:rgb(0,0,0,0.5);">
      <div class="page-wrapper">
          <div class="page-content--bge5">
              <div class="container">
                  <div class="login-wrap">
                      <div style="border-radius: 0px 36px 0px 36px;box-shadow: 1px 1px 19px 5px rgba(0,0,0,0.75);"class="login-content">
                          <div class="login-logo">
                              <a href="#">
                                  <img src="../view/images/logo.png" alt="FhpChile"><h4 style="color:white;font-family: 'Roboto', sans-serif;">FhpChile</h4>
                              </a>
                          </div>
                          <div class="login-form">
                              <form action="?c=Usuario&a=Ingresar" method="post">
                                  <div class="form-group">
                                      <label style="color:white;">Correo</label>
                                      <input class="au-input au-input--full" type="mail" name="correo" id="correo" placeholder="Correo">
                                  </div>
                                  <div class="form-group">
                                      <label style="color:white;">Contraseña</label>
                                      <input class="au-input au-input--full" type="password" name="password" placeholder="Password">
                                  </div>
                                  <div class="login-checkbox">
                                      <label>
                                          <a href="?c=Usuario&a=RecuperarPassword">Olvidaste tu contraseña?</a>
                                      </label>
                                  </div>
                                  <div class="col-md-12 col-sm-12 text-center">
                                    <button class="btn btn-success" type="submit">Ingresar</button>
                                  </div>

                              </form>

                          </div>
                      </div>
                  </div>
              </div>
          </div>

      </div>
    </div>
    <input type="hidden" id="mensaje" value="<?php echo $_REQUEST['m'] ?>"/>

    <!-- Jquery JS-->
    <script src="assets/vendor/jquery-3.2.1.min.js"></script>
    <!-- Bootstrap JS-->
    <script src="assets/vendor/bootstrap-4.1/popper.min.js"></script>
    <script src="assets/vendor/bootstrap-4.1/bootstrap.min.js"></script>
    <!-- Vendor JS       -->
    <script src="assets/vendor/slick/slick.min.js">
    </script>
    <script src="assets/vendor/wow/wow.min.js"></script>
    <script src="assets/vendor/animsition/animsition.min.js"></script>
    <script src="assets/vendor/bootstrap-progressbar/bootstrap-progressbar.min.js">
    </script>
    <script src="assets/vendor/counter-up/jquery.waypoints.min.js"></script>
    <script src="assets/vendor/counter-up/jquery.counterup.min.js">
    </script>
    <script src="assets/vendor/circle-progress/circle-progress.min.js"></script>
    <script src="assets/vendor/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="assets/vendor/chartjs/Chart.bundle.min.js"></script>
    <script src="assets/vendor/select2/select2.min.js">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>

    <!-- Main JS-->
    <script src="assets/js/main.js"></script>
    <script type="text/javascript">
      var m = $("#mensaje").val();
      if (m == 'Error')
      {
        Swal.fire({
          icon: 'error',
          title: 'Oops...',
          text: 'El usuario o la contraseña estan equivocados'
        });
      }
      if (m == 'ExitoPassword')
      {
        Swal.fire(
        'Exito al cambiar la contraseña!',
        'Debes ingresar nuevamente al sitio',
        'success'
      )
      }
      if (m == 'ExitoFoto')
      {
        Swal.fire(
        'Exito al cambiar la foto de perfil',
        'Debes ingresar nuevamente al sitio',
        'success'
      )
      }
      if (m == 'ExitoAuto')
      {
        Swal.fire(
        'Exito al registrar el auto',
        'Debes ingresar nuevamente al sitio',
        'success'
      )
      }
      if (m == 'ExitoEnvioPass') {
        Swal.fire(
        'Se envio un correo con su contraseña',
        '',
        'success'
      )
      }

    </script>

</body>

</html>
<!-- end document-->
