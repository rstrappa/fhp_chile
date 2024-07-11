<input type="hidden" id="error" value="<?php echo $_REQUEST['e'] ?>">
<div class="row justify-content-center col-sm-12">
    <div class="nuevaClase2 col-sm-12" style="">
      <section class="float-sm-left"style="   width: 49px;height: 1350px;background: #2228FF;position: relative;right: 2%;"></section>
      <section class=" float-sm-left col-md-5 col-sm-12">
        <!-- MultiStep Form -->
        <div class="container-fluid" id="grad1">
          <div class="row justify-content-center mt-0">
              <div class="col-12 col-sm-12 col-md-12 col-lg-12 text-center p-0 mt-3 mb-2">
                  <div class="card px-0 pt-4 pb-0 mt-3 mb-3">
                      <h2><strong>Registro de conductores</strong></h2>
                      <p>Llena todo para ir al siguiente paso</p>
                      <div class="row">
                          <div class="col-md-12 mx-0">
                            <form id="msform" action="?c=Personas&a=IngresarPersona" method="post" enctype="multipart/form-data">

                                  <!-- progressbar -->
                                  <ul id="progressbar" style=" text-align: center;position: relative;left: 22%;">
                                      <li class="active" id="account"><strong>Antecedentes Personales</strong></li>
                                      <li id="licencia"><strong>Licencias</strong></li>
                                      <li id="personal"><strong>Servicios</strong></li>
                                    <!--  <li id="payment"><strong>Leasing/Propio</strong></li>
                                      <li id="confirm"><strong>Fin</strong></li> !-->
                                  </ul> <!-- fieldsets -->
                                  <fieldset>
                                      <div class="form-card">
                                          <h2 class="fs-title">Informacion Personal</h2>
                                            <div class="row">
                                                <div class="col-md-6 col-sm-12">
                                                  <input type="text" name="nombre" id="nombre" class="form-control bordes" placeholder="Nombres" required>
                                                </div>
                                                <div class="col-md-6 col-sm-12">
                                                  <input type="text" name="apellido" id="apellido" class="form-control bordes" placeholder="Apellidos" required>
                                                </div>
                                            </div>
                                            <div class="row espacio">
                                              <div class="col-md-12 col-sm-12">
                                                Fecha nacimiento
                                                <input type="date" name="fecha" id="fecha" class="form-control bordes" placeholder="" required>
                                              </div>
                                            </div>
                                            <div class="row espacio">
                                              <div class="col-md-2">
                                                +56
                                              </div>
                                              <div class="col-md-10 col-sm-12">
                                                <input type="text" name="telefono" id="telefono" class="form-control bordes" placeholder="Telefono" required>
                                              </div>
                                            </div>
                                            <div class="row espaciado">
                                              <div class="col-md-12 col-sm-12">
                                                <input type="text" name="rut" id="rut" class="form-control bordes" placeholder="rut" onkeyup="checkRut(this)" required>
                                              </div>
                                            </div>
                                            <div class="row espacio">
                                              <div class="col-md-12 col-sm-12">
                                                <select class="form-control bordes" name="iso_nac" id="iso_nac" required>
                                                  <option value="">Seleccione nacionalidad</option>
                                                  <?php foreach ( $n->Listar() as $row): ?>
                                                    <option value="<?php echo $row->iso ?>"><?php echo $row->pais ?></option>
                                                  <?php endforeach; ?>
                                                </select>
                                              </div>
                                            </div>
                                            <div class="row espaciado">
                                              <div class="col-md-12 col-sm-12">
                                                <input type="text" name="direccion" id="direccion" class="form-control bordes" placeholder="Dirección" >
                                              </div>
                                            </div>
                                            <div class="row espacio">
                                              <div class="col-md-12 col-sm-12">
                                                <select class="form-control" name="id_region" id="id_region" >
                                                  <option value="">Seleccione una region</option>
                                                  <?php foreach ($re->Listar() as $r): ?>
                                                      <option value="<?php echo $r->id ?>"><?php echo $r->nombre ?></option>
                                                  <?php endforeach; ?>
                                                </select>
                                              </div>
                                            </div>
                                              <div class="row espacio">
                                              <div class="col-md-12 col-sm-12" id="divComunas">

                                              </div>
                                            </div>
                                            <div class="row espacio" style="margin-top:20px;">
                                              <div class="col-md-12 col-sm-12">
                                                <input type="email" name="mail" id="mail" value="" class="form-control bordes" placeholder="Correo electronico" required>
                                              </div>
                                            </div>
                                      </div>
                                      <input type="button" style="display:none;" name="next" id="btn1" class="next action-button" value="Siguiente" />
                                      <input type="button" style="display:block;" name="" id="btnValidar1" class="" value="Validar" />
                                  </fieldset>
                                  <fieldset>
                                    <div class="form-card">
                                      <h2 class="fs-title">Licencia de Conducir</h2>

                                      <div class="row espaciado">
                                        <div class="col-md-12 col-sm-12" id="ddlPaises"></div>
                                      </div>
                                      <div class="row espaciado">
                                        <div class="col-md-12 col-sm-12">
                                          <select class="form-control" name="tipo_licencia" id="tipo_licencia">
                                            <option value="">Selecciona un tipo de licencia</option>
                                            <option value="A">A</option>
                                            <option value="B">B</option>
                                            <option value="C">C</option>
                                          </select>
                                        </div>
                                      </div>
                                      <div class="row espaciado">
                                        <div class="col-md-6 col-sm-12">
                                          Fecha <br>Emision
                                          <input type="date" name="fecha_emision" id="fecha_emision" value="">
                                        </div>
                                        <div class="col-md-6 col-sm-12">
                                          Fecha Vencimiento
                                          <input type="date" name="fecha_vencimiento" id="fecha_vencimiento" value="">
                                        </div>
                                      </div>

                                    </div> <input type="button" name="previous" class="previous action-button-previous" value="Anterior" />
                                    <input type="button" name="make_payment" id="btn2" style="display:none;" class="next action-button" value="Siguiente" />
                                      <input type="button" style="display:block;" name="" id="btnValidar2" class="" value="Validar" />
                                  </fieldset>
                                  <fieldset>
                                      <div class="form-card">
                                          <h2 class="fs-title">Servicios</h2>
                                        <select class="form-control" name="servicio" id="servicio">
                                          <option value="">Seleccione una opcion</option>
                                          <option value="1">Vehiculo con condiciones leasing</option>
                                          <option value="2">Tengo vehiculo propio</option>
                                        </select><hr>

                                        <div id="divLeasing" style="display:none;">
                                        <div class="row mt-3">
                                          <div class="col-md-12 col-sm-12">
                                            <label style="color:red;">El valor es el valor de leasing por 3 años</label>
                                            <select class="form-control" name="auto_leasing" id="tipo_leasing">
                                              <option value="">Seleccione un auto</option>
                                              <option value="1">Camioneta 14m3  ->     $450.000</option>
                                              <option value="2">Camioneta 24m3   ->    $550.000</option>
                                              <option value="3">Camion 40m3   ->    $950.000</option>
                                            </select>
                                          </div>
                                        </div><hr>
                                        <div class="row mt-3">
                                          <div id="div1" style="display:none;">
                                            Seleccion el vehiculo 1 que rinde 10 km x Litro
                                            <img src="https://static.emol.cl/emol50/Fotos/2017/07/26/file_20170726172833.jpg" style="width:90%;"alt="">
                                            <div class="row mt-3">
                                              <p>Buena suerte con tu Solicitud y si eres aceptado te animamos desde ya a lograr ests increibles resultados</p>
                                            </div>
                                          </div>
                                          <div id="div2" style="display:none;">
                                            Seleccion el vehiculo 2 que rinde 9 km x Litro
                                              <img src="https://previews.123rf.com/images/deusexlupus/deusexlupus1704/deusexlupus170400137/75795089-moderno-rojo-camioneta-cami%C3%B3n-lado-vista.jpg" style="width:90%;"alt="">
                                            <div class="row mt-3">
                                              <p>Buena suerte con tu Solicitud y si eres aceptado te animamos desde ya a lograr ests increibles resultados</p>
                                            </div>
                                          </div>
                                          <div id="div3" style="display:none;">
                                            Seleccion el vehiculo 3 que rinde 7 km x Litro
                                              <img src="http://spanish.tankertrucktrailer.com/photo/pc19852521-foton_6_wheels_small_refrigerated_box_truck_3_tons_refrigerator_freezer_truck.jpg" style="width:90%;"alt="">
                                            <div class="row mt-3">
                                              <p>Buena suerte con tu Solicitud y si eres aceptado te animamos desde ya a lograr ests increibles resultados</p>
                                            </div>
                                          </div>
                                          <div class="row mt-2 " style="">
                                            <div class="col-md-12 col-sm-12 text-center">
                                              <input disabled style=""type="submit" class="login-button-2 text-uppercase text-wh mt-lg-0 mt-2" onclick="" value="Enviar Solicitud">
                                            </div>
                                          </div>
                                        </div>

                                        </div>
                                        <div id="divPropio" style="display:none;">
                                          <div class="row">
                                            <div class="col-md-12 text-center">
                                              <h1>Sube la informacion de tu auto</h1>
                                            </div>
                                          </div><hr>
                                          <div class="col-md-12 col-sm-12">
                                              <div class="row mt-2">
                                                <div class="col-md-12 col-sm-12">
                                                  <select class="form-control" id="id_tipo_vehiculo"name="id_tipo_vehiculo" style="float:left;">
                                                    <option value="">Seleccione un tipo de vehiculo</option>
                                                      <?php foreach ($tp->Listar() as $r): ?>
                                                        <option value="<?php echo $r->id_tipo_vehiculo ?>"><?php echo $r->descripcion ?></option>
                                                      <?php endforeach; ?>
                                                  </select>
                                                </div>
                                              </div>
                                              <div class="row mt-2">
                                                  <div class="col-md-12 col-sm-12">
                                                    <input type="text" class="form-control" name="capacidad" id="capacidad" placeholder="Capacidad vehiculo en m3" style="float:left;" value="">
                                                  </div>
                                              </div>
                                              <div class="row mt-2">
                                                  <div class="col-md-6 col-sm-12" style="float:left;">
                                                    <input type="text" name="marca" id="marca" class="form-control" placeholder="Marca" value="">
                                                  </div>
                                                  <div class="col-md-6 col-sm-12" style="float:left;">
                                                    <input type="text" name="modelo" id="modelo" class="form-control" placeholder="Modelo" value="">
                                                  </div>
                                              </div>
                                              <div class="row mt-2">
                                                <div class="col-md-6">
                                                  <input type="text" class="form-control" placeholder="Año" name="anio" id="anio" value="">
                                                </div>
                                              </div>

                                              <div class="row mt-2 " style="">
                                                <div class="col-md-12 col-sm-12 text-center">
                                                  <input type="button" style="display:block;" name="" id="btnValidar3" class="" value="Validar" />
                                                  <input style="display:none;"type="submit" id="btn3" class="login-button-2 text-uppercase text-wh mt-lg-0 mt-2" onclick="" value="Enviar Solicitud">
                                                </div>
                                              </div>
                                          </div>
                                        </div>
                                      </div> <input type="button" name="previous" class="previous action-button-previous" value="Anterior" />


                                  </fieldset>
                                <!--  <fieldset>
                                      <div class="form-card">
                                          <h2 class="fs-title text-center">Success !</h2> <br><br>
                                          <div class="row justify-content-center">
                                              <div class="col-3"> <img src="https://img.icons8.com/color/96/000000/ok--v2.png" class="fit-image"> </div>
                                          </div> <br><br>
                                          <div class="row justify-content-center">
                                              <div class="col-7 text-center">
                                                  <h5>You Have Successfully Signed Up</h5>
                                              </div>
                                          </div>
                                      </div>
                                  </fieldset> -->

                          </div>
                      </div>
                  </div>
              </div>
          </div>
        </div>
          </form>
      </section>
      <section class="col-md-6 float-right">
        <img src="../assets/img/foto.gif" style="position:relative; left:6%;" alt="">
    </section>
</div>
</div>
