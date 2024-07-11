$("#id_conductor").change(function(){
  var id_conductor = $("#id_conductor").val();
  $.post('acciones/traerEmpresasConductor.php',{id_conductor:id_conductor},function(data){
    $("#empresaCo").html(data);
  });
});

$("#btnAsignarConductor").click(function(){
  var id_conductor = $("#id_conductor").val();
  var id_empresa = $("#id_empresa").val();
  $.post('acciones/asignarConductor.php',{id_empresa:id_empresa,id_conductor:id_conductor},function(){
    Swal.fire(
    'Se asigno al conductor!',
    '',
    'success'
    )
  });
    $("#empresaCo").html('');
    $("#id_conductor").val('');
    $("#id_empresa").val('');
});

$("#ddlEmpresaS").change(function(){
  var op = $("#ddlEmpresaS").val();
  if (op ==1)
  {
    $("#divEmpresa").css("display","block");
    $("#divSucursal").css("display","none");
  }
  else if (op ==2)
  {
    $("#divEmpresa").css("display","none");
    $("#divSucursal").css("display","block");
  }
  else
  {
    $("#divEmpresa").css("display","none");
    $("#divSucursal").css("display","none");
  }
});

//Cantidad  sucrusales
$("#btnCant").click(function(){
  var cant = $("#cantSucursales").val();
  for (var i = 1; i <=cant; i++)
  {
    $("#divCantidadSucursales").append('<div class="row mt-2"><h2>Sucursal '+i+'</h2><div class="col-md-12 col-sm-12"><hr><div class="row"><div class="col-md-6 col-sm-12"><select required class="form-control ah" name="id_empresa'+i+'" id="id_empresa'+i+'"></select></div></div><div class="row mt-2"><div class="col-md-6 col-sm-12"><input type="text" required class="form-control" placeholder="Direccion" name="direccion_sucursal'+i+'" id="direccion_sucursal'+i+'" value=""></div><div class="col-md-6 col-sm-12"><input type="text" class="form-control" placeholder="Nombre" name="nombre_sucursal'+i+'" required id="nombre_sucursal'+i+'" value=""></div></div></div></div>');
  }
  $("#btnCant").prop("disabled",true);
  $("#btnRegistrarEmpresa").prop("disabled",false);
  //Llenar Empresas
  $.post('acciones/traerEmpresas.php',function(data){
    $(".ah").html(data);
  });
});

$("#id_vehiculo").change(function(){
  $("#btnAsignar").prop("disabled",false);
  var id_vehiculo = $("#id_vehiculo").val();
  $.post('acciones/traerCapacidadAuto.php',{id_vehiculo:id_vehiculo},function(data){
    $("#divCapacidadActual").html(data);
  });
});

function asignar()
{
  var total,capacidad, dimencion,id_vehiculo,id_orden;
  id_vehiculo = $("#id_vehiculo").val();
  id_orden = $("#hId_orden").val();
  dimencion = $("#hDimencion").val();
  capacidad = $("#hCapadidadActual").val();
  total = capacidad - dimencion;

  if (total >= 0)
  {
    $.post('acciones/ajaxAsignar.php',{id_auto:id_vehiculo,id_orden:id_orden,total:total},function(){
      window.location.href = '?c=Usuario&a=ListarOrden&m=ExitoAsignar';
    });
  }
  else
  {
    Swal.fire({
        type: 'error',
        title: 'No hay espacio',
        text: 'Error al asignar la orden de compra'
      });
  }
}

$("#id_conductor").change(function(){
  var id = $("#id_conductor").val();
  $.post('acciones/filtrar_entregas_conductores.php',{id:id},function(data){
    $("#divTabla").html(data);
  });
});

function GenerarMapa(num)
{

  var loc = 'https://www.google.cl/maps/dir/Del+Valle+601,+Huechuraba,+Región+Metropolitana';

  function moveMapToBerlin(map){
  map.setCenter({lat:52.5159, lng:13.3777});
  map.setZoom(14);
}

/**
 * Boilerplate map initialization code starts below:
 */

//Step 1: initialize communication with the platform
// In your own code, replace variable window.apikey with your own apikey
var platform = new H.service.Platform({
  apikey:'bCeIxB7sq7cixX2aniJCW5t3I_naqWgdEIo_GijiDog'
});
var defaultLayers = platform.createDefaultLayers();

//Step 2: initialize a map - this map is centered over Europe
var map = new H.Map(document.getElementById('map'),
  defaultLayers.vector.normal.map,{
  center: {lat:-33.4718999, lng:-70.9100236},
  zoom: 10,
  pixelRatio: window.devicePixelRatio || 1
});
// add a resize listener to make sure that the map occupies the whole container
window.addEventListener('resize', () => map.getViewPort().resize());

//Step 3: make the map interactive
// MapEvents enables the event system
// Behavior implements default interactions for pan/zoom (also on mobile touch environments)
var behavior = new H.mapevents.Behavior(new H.mapevents.MapEvents(map));

// Create the default UI components
var ui = H.ui.UI.createDefault(map, defaultLayers);

// Now use the map as required...
window.onload = function () {
  moveMapToBerlin(map);
}

  for (var i = 1; i <=num; i++) {
    var direccion = $("#hDireccion"+i).val();
    $.getJSON("https://us1.locationiq.com/v1/search.php?key=4a7c6e2ffc5f07&q="+direccion+"&format=json",function(data){

        //Latitud y longitud de la direccion buscada
        var lat = data[0].lat;
        var lon = data[0].lon;
        loc = loc +'/'+lat+','+lon;
        //Creamos el marcador con  sus coordenadas
        var mark = new H.map.Marker({lat:lat, lng: lon});
        //Agregamos en el mapa el marcador
        map.addObject(mark);
        $("#hLoc").val(loc);
        $("#hLat").val(lat);
        $("#hLon").val(lon);
    });


      alert('Se agrego la direccion: '+direccion);
  }
  $("#hLoc").val(loc);
  $("#btnGuardarRuta").prop("disabled",false);
}

function GuardarRuta()
{
  var id_auto = $("#hId_auto").val();
  var ruta = $("#hLoc").val();
  console.log(id_auto);
  $.post('acciones/cambiarRuta.php',{id_auto:id_auto,ruta:ruta},function(){
    Swal.fire(
    'Se asigno la ruta al conductor!',
    '',
    'success'
    )
  });
}


function finalizar(id)
{
  $.post('acciones/finalizar.php',{id:id},function(){
    window.location.href = "?c=Usuario&a=Dashboard&m=finalizo";
  });
}
//Validar rut

function checkRut(rut) {
// Se quitan los puntos y los guiones mediante el metodo replace
var valor = rut.value.replace('.','');
valor = valor.replace('-','');

// Aislar Cuerpo y Dígito Verificador
var cuerpo = valor.slice(0,-1);
var dv = valor.slice(-1).toUpperCase();

// Formatear rut
rut.value = cuerpo +'-'+ dv;

// Si no cumple con el mínimo ej. (n.nnn.nnn)
if(cuerpo.length < 7) {
$("#fg_rut").addClass('has-error');
    rut.setCustomValidity("RUT Incompleto");
return false;
}

// Calcular Dígito Verificador
var suma = 0;
var multiplo = 2;

// Para cada dígito del Cuerpo
for(var i=1;i<=cuerpo.length;i++) {

    // Obtener su Producto con el Múltiplo Correspondiente
    var index = multiplo * valor.charAt(cuerpo.length - i);

    // Sumar al Contador General
    suma = suma + index;

    // Consolidar Múltiplo dentro del rango [2,7]
    if(multiplo < 7) {
        multiplo = multiplo + 1;
    }else{
        multiplo = 2;
    }
}

// se calcula el dv con modulo 11
var dvEsperado = 11 - (suma % 11);

// Casos Especiales (0 y K)
if(dv == 'K'){
    dv = 10;
}else{
    dv=dv;
}
if(dv == 0){
   dv = 11;
}else{
   dv = dv;
}

// Validar que el Cuerpo coincide con su Dígito Verificador
if(dvEsperado != dv){
    rut.setCustomValidity("RUT Inválido");
$("#fg_rut").addClass('has-error');
return false;
}




//se resetea el setCustomValidity en caso de haber ocurrido alguna ocurrencia en el if
rut.setCustomValidity('');
}


$("#btnRecibir").click(function(){
  if ($("#acepto").val() == null)
  {
    alert("Check box in Checked");
  }
});

$(document).ready(function() {
  $("#signature").jSignature({color:"#00f",lineWidth:2,height:300});
});
function importImg(sig)
{
	sig.children("img.imported").remove();
	$("<img class='imported'></img").attr("src",sig.jSignature('getData')).appendTo(sig);
  $("#hFirma").val(sig.jSignature('getData'));

}
function importData(sig,url)
{
	if ($.trim(url)) {
		sig.jSignature('importData',url);
	}
}

$(function(){
  var url = $("#hFirma").val();
  importData($("#signature"),url);
})
