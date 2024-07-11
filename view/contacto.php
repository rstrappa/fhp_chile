  <div class="container mt-5 pb-5" style="box-shadow: 10px 4px 40px rgba(0, 0, 0, 0.25);">
    <div class="row align-items-center ">
        <section class="float-sm-left"style="width: 49px;height: 602px;background: #2228FF;"></section>
      <div class="col-md-6 ml-auto arribaa">
        <div class="col-md-12 text-center">
          <div class="col-md-12 col-sm-12 text-center">
            <div class="">
              <h2>Contacto</h2>
            </div>
          </div><hr>
          <form action="?c=Personas&a=EnviarCorreo" method="post">
            <div class="row">
              <div class="col-md-6 col-sm-12">
                <input type="text" name="nombre" id="nombre" class="form-control bordes" placeholder="Nombre" required >
              </div>
              <div class="col-md-6 col-sm-12">
                <input type="text" name="telefono" id="telefono" class="form-control bordes" placeholder="Telefono" required >
              </div>
            </div>
            <div class="row pt-1">
              <div class="col-md-6 col-sm-12">
                <input type="email" name="correo" id="correo" class="form-control bordes" placeholder="Correo electronico" required >
              </div>
            </div>
            <div class="row espaciado">
              <div class="col-md-12 col-sm-12">
                <textarea style="margin-top: 0px; margin-bottom: 0px; height: 183px; resize:none;" placeholder="Mensaje" class="form-control bordes" id="mensaje" name="mensaje" required></textarea>
              </div>

            </div>

            <hr>
            <div class="row espacio" >
              <div class="col-md-12 col-sm-12">
                <input type="submit" class="login-button-2 text-uppercase text-wh mt-lg-0 mt-2" onclick="" value="Enviar Correo">
              </div>
            </div>
          </form>
          <input type="hidden" id="error" value="<?php echo $_REQUEST['e'] ?>">
        </div>
      </div>
      <div class="col-md-5 ">
        <img src="../assets/img/foto.gif" style="width:100%; height:60%;">
      </div>
    </div>
  </div>
