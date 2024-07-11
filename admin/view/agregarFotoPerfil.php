

            <!-- MAIN CONTENT-->
            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid text-center">
                        <h1>Sube tu foto de perfil</h1><hr>
                        <form class="" enctype="multipart/form-data" action="?c=Usuario&a=SubirPerfil" method="post">
                          <div class="row">
                            <input type="file" class="form-control" name="src_perfil" id="src_perfil" onchange="loadFile(event)" value="">
                          </div>
                          <div class="row text-center mt-3">
                            <img src="" style="position:relative; left:30%;width:250px;height:250px;border-radius:150px;border:10px solid #666;" id="output"  alt="">
                          </div>
                          <div class="row text-center">
                            <div class="col-md-10 mt-3">
                              <input type="submit" class="btn btn-primary" name="" value="Subir foto">
                            </div>
                          </div>
                        </form>
                    </div>
                </div>
            </div>
            <!-- END MAIN CONTENT-->
            <!-- END PAGE CONTAINER-->
