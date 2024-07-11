<div class="row justify-content-center col-sm-12">
    <div class="nuevaClase2 col-sm-12" style="">
      <section class="float-sm-left"style="width: 49px;height: 602px;background: #2228FF;position: relative;
    right: 2%;"></section>
      <section class=" float-sm-left col-md-5 col-sm-12">
        <div class="" style="margin-left:auto; margin-right:auto;">
        <div class="col-md-12 col-sm-12 text-center">
          <div class="">
            <h2 class="mt-5">Registro de conductores</h2>
          </div>
        </div><hr>
      <form action="?c=Personas&a=IngresarPersona" method="post">
        <div class="row">
            <div class="col-md-6 col-sm-12">
              <input type="text" name="nombre" id="nombre" class="form-control bordes" placeholder="Nombre" required>
            </div>
            <div class="col-md-6 col-sm-12">
              <input type="text" name="apellido" id="apellido" class="form-control bordes" placeholder="Apellido" required>
            </div>
        </div>
        <div class="row espacio">
          <div class="col-md-6 col-sm-12">
            <input type="date" name="fecha" id="fecha" class="form-control bordes" placeholder="" required>
          </div>
        </div>
        <div class="row espacio">
          <div class="col-md-6 col-sm-12">
            <input type="text" name="telefono" id="telefono" class="form-control bordes" placeholder="Telefono" required>
          </div>
          <div class="col-md-6 col-sm-12">
            <input type="text" name="direccion" id="direccion" class="form-control bordes" placeholder="Direccion" required>
          </div>
        </div>
        <div class="row espacio">
          <div class="col-md-6 col-sm-12">
            <select class="form-control bordes" name="iso_nac" id="iso_nac" required>
              <option value="">Seleccione nacionalidad</option>
              <?php foreach ( $n->Listar() as $row): ?>
                <option value="<?php echo $row->iso ?>"><?php echo $row->pais ?></option>
              <?php endforeach; ?>
            </select>
          </div>
          <div class="col-md-6 col-sm-12">
            <input type="text" name="rut" id="rut" class="form-control bordes" placeholder="rut" onkeyup="checkRut(this)" required>
          </div>
        </div>
        <div class="row espacio">
          <div class="col-md-6 col-sm-12">
            <input type="text" name="licencia" id="licencia" value="" class="form-control bordes" placeholder="Licencia de conducir" required>
          </div>
          <div class="col-md-6 col-sm-12">
            <input type="email" name="mail" id="mail" value="" class="form-control bordes" placeholder="Correo electronico" required>
          </div>
        </div>

        <div class="row espacio">
          <div class="col-md-12 col-sm-12">
            <div class="col-md-6 float-left">
              <label>Estado de residencia</label>
            </div>
            <div class="col-md-3 float-left">
                <input type="radio" value="1" class="" name="estado_documentacion" id="estado_documentacion" checked>
                <label class=""  for="estado_documentacion">Al dia</label>
            </div>
            <div class="col-md-3 float-right">
                <input type="radio" value="0" value="1" name="estado_documentacion" id="estado_documentacion">
                <label class=""  for="estado_documentacion">Falta</label>
            </div>
          </div>
        </div>
        <div class="row espaciado">
          <div class="col-md-12 col-sm-12">
            <div class="col-md-6 float-left">
              <label>Antecedentes penales</label>
            </div>
            <div class="col-md-3 float-left">
                <input type="radio" value="1" name="antecedentes" id="antecedentes" checked>
                <label class="" for="antecedentes">Si</label>
            </div>
            <div class="col-md-3 float-left">
                <input type="radio" value="0" class="" name="antecedentes" id="antecedentes">
                <label class="" for="antecedentes">No</label>
            </div>
          </div>
        </div>
        <div class="row espaciado">
          <div class="col-md-1 float-left">
              <label style="margin-left:15px;">Disponibilidad inmediata:</label>
          </div>
          <div class="col-md-6 ">
            <div class="col-md-1 text-left body float-right">
              <label class="toggleButton">
                <input type="checkbox" value="1" id="disponibilidad" name="disponibilidad">
                <div>
                  <svg viewBox="0 0 44 44">
                    <path d="M14,24 L21,31 L39.7428882,11.5937758 C35.2809627,6.53125861 30.0333333,4 24,4 C12.95,4 4,12.95 4,24 C4,35.05 12.95,44 24,44 C35.05,44 44,35.05 44,24 C44,19.3 42.5809627,15.1645919 39.7428882,11.5937758" transform="translate(-2.000000, -2.000000)"></path>
                  </svg>
                </div>
              </label>

          </div>
          </div>
        </div>
    <div class="row " style="">
      <div class="col-md-12 col-sm-12 text-center">
        <input style=""type="submit" class="login-button-2 text-uppercase text-wh mt-lg-0 mt-2" onclick="" value="Enviar Solicitud">
      </div>
    </div>
    </form>
    <input type="hidden" id="error" value="<?php echo $_REQUEST['e'] ?>">
  </div>
  </section>
      <section class="col-md-6 float-right">
        <img src="../assets/img/foto.gif" style="position:relative; left:6%;" alt="">

    </section>
</div>
</div>
