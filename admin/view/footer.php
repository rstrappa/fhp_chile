<div class="row">
    <div class="col-md-12">
        <div class="copyright">
          <?php $hoy = getDate(); ?>
            <p>Derechos Reservados FHP <?php echo $hoy['year'] ?> </p>
        </div>
    </div>
</div>
<input type="hidden" id="m" value="<?php echo $_REQUEST['m'] ?>">
</div>
</div>
</div>
<!-- END MAIN CONTENT-->
<!-- END PAGE CONTAINER-->
</div>

</div>

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
<script src="assets/vendor/select2/select2.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
<script type="text/javascript" src="https://js.api.here.com/v3/3.1/mapsjs-core.js"></script>
<script type="text/javascript" src="https://js.api.here.com/v3/3.1/mapsjs-service.js"></script>
<script type="text/javascript" src="https://js.api.here.com/v3/3.1/mapsjs-ui.js"></script>
<script type="text/javascript" src="https://js.api.here.com/v3/3.1/mapsjs-mapevents.js"></script>
<script src="assets/js/miJs.js"></script>
<!-- Main JS-->
<script src="assets/js/main.js"></script>

<script src="assets/js/datatable.js"></script>
<script src="assets/js/dtResponsive.js"></script>
<script src="https://cdn.datatables.net/fixedheader/3.1.6/js/dataTables.fixedHeader.min.js" charset="utf-8"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
<script>

$(document).ready(function() {
    $('#example').DataTable({
      "language": {
            "url": "//cdn.datatables.net/plug-ins/1.10.16/i18n/Spanish.json"
        },
      responsive: true
    });
});

var m = $("#m").val();
if (m == 'ExitoEnviar')
{
  Swal.fire(
  'Se acepto al conductor!',
  'Se le envio un correo con sus credenciales!',
  'success'
  )
}
if (m == 'ExitoCambiarPassword') {
  Swal.fire(
  'Exito al cambiar la contraseña!',
  '',
  'success'
)
}
if (m == 'BorroTodo') {
  Swal.fire(
  'Exito al eliminar todo!',
  'Se eliminaron los conductores, usuarios y vehiculos',
  'success'
)
}
if (m == 'ExitoAuto') {
  Swal.fire(
  'Exito al agregar el auto!',
  '',
  'success'
)
}
if (m=='ErrorAuto') {
  Swal.fire({
      type: 'error',
      title: 'Oops...',
      text: 'Error al ingresar el auto'
    });
}
if (m=='ErrorFoto') {
  Swal.fire({
      type: 'error',
      title: 'Oops...',
      text: 'Error al subir la foto'
    });
}
if (m == 'ExitoPassword')
{
  Swal.fire(
  'Exito al cambiar la contraseña!',
  '',
  'success'
)
}
if (m == 'ExitoSubirOrden')
{
  Swal.fire(
  'Exito al subr la orden de compra!',
  '',
  'success'
)
}

if (m=='ErrorsubirOrden') {
  Swal.fire({
    icon: 'error',
  title: 'Oops...',
      text: 'Error al subir la foto'
    });
}

if (m == 'RegistroEmpresa')
{
  Swal.fire(
  'Exito al registrar la empresa',
  '',
  'success'
)
}
if (m == 'RegistroSucursal')
{
  Swal.fire(
  'Exito al registrar la sucursal',
  '',
  'success'
)
}
if (m == 'EliminoSucursal')
{
  Swal.fire(
  'Se elimino la sucursal',
  '',
  'success'
)
}
if (m == 'ExitoAsignar')
{
  Swal.fire(
  'Se asigno la orden al vehiculo',
  '',
  'success'
)
}
if (m == 'Entrego')
{
  Swal.fire(
  'Se entrego el producto',
  '',
  'success'
)
}
if (m == 'NOEntrego')
{
  Swal.fire({
    icon: 'error',
  title: 'Oops...',
      text: 'Error al entregar el producto'
    });
}
$.post('acciones/jsonCantidadConductores.php',function(data){

  $("#cantConductores").html(data);
});

$.post('acciones/jsonCantidadSolicitudes.php',function(data){
  $("#cantSolicitudes").html(data);
});

$("#password2").keyup(function(){
var p = $("#password").val();
var p2 = $("#password2").val();
  if (p == p2)
  {
    $("#btnActualizarPassword").css("display","block");
  }
  if (p != p2)
  {
    $("#btnActualizarPassword").css("display","none");
  }
});

var loadFile = function(event) {
    var output = document.getElementById('output');
    output.src = URL.createObjectURL(event.target.files[0]);
  }

  var id = $("#id_sesion").val();
  $.post('acciones/filtrar_entregas.php',{id:id},function(data){
    $("#divTabla").html(data);
  });
</script>
</body>

</html>
<!-- end document-->
