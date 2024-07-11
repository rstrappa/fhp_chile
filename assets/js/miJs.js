$(document).ready(function(){

var current_fs, next_fs, previous_fs; //fieldsets
var opacity;

$(".next").click(function(){

current_fs = $(this).parent();
next_fs = $(this).parent().next();

//Add Class Active
$("#progressbar li").eq($("fieldset").index(next_fs)).addClass("active");

//show the next fieldset
next_fs.show();
current_fs.hide();
//hide the current fieldset with style
current_fs.animate({opacity: 0}, {
step: function(now) {
// for making fielset appear animation
opacity = 1 - now;

current_fs.css({
'display': 'none',
'position': 'relative'
});
next_fs.css({'opacity': opacity});
},
duration: 600
});
});

$(".previous").click(function(){

current_fs = $(this).parent();
previous_fs = $(this).parent().prev();

//Remove class active
$("#progressbar li").eq($("fieldset").index(current_fs)).removeClass("active");

//show the previous fieldset
previous_fs.show();
current_fs.hide();

//hide the current fieldset with style
current_fs.animate({opacity: 0}, {
step: function(now) {
// for making fielset appear animation
opacity = 1 - now;

current_fs.css({
'display': 'none',
'position': 'relative'
});
previous_fs.css({'opacity': opacity});
},
duration: 600
});
});

$('.radio-group .radio').click(function(){
$(this).parent().find('.radio').removeClass('selected');
$(this).addClass('selected');
});

$(".submit").click(function(){
return false;
})

});

$("#id_region").change(function(){
  var id_region = $("#id_region").val();
  $.post('acciones/filtrarComunas.php',{id_region:id_region},function(data){
    $("#divComunas").html(data);
  });
});

$("#servicio").change(function(){
  var n = $("#servicio").val();
  if (n == 1)
  {
    $("#divLeasing").css("display","block");
    $("#divPropio").css("display","none");
    console.log("el numero es "+1);
  }
  if (n == 2)
  {
    $("#divLeasing").css("display","none");
    $("#divPropio").css("display","block");
    console.log("el numero es "+2);
  }
  if (n == '')
  {
    $("#divLeasing").css("display","nonoe");
    $("#divPropio").css("display","none");
    console.log("el numero es null");
  }
});

$("#tipo_leasing").change(function(){
  var n = $("#tipo_leasing").val();
  if (n == 1)
  {
    $("#div1").css("display","block");
    $("#div2").css("display","none");
    $("#div3").css("display","none");
    console.log("el numero es "+1);
  }
  if (n == 2)
  {
    $("#div1").css("display","none");
    $("#div2").css("display","block");
    $("#div3").css("display","none");
    console.log("el numero es "+2);
  }
  if (n == 3)
  {
    $("#div1").css("display","none");
    $("#div2").css("display","none");
    $("#div3").css("display","block");
    console.log("el numero es "+3);
  }
  if (n == '')
  {
    $("#div1").css("display","none");
    $("#div2").css("display","none");
    $("#div3").css("display","none");
    console.log("el numero es null");
  }
});


//Llenar ddl paises
$.post('acciones/traerPaises.php',function(data){
 $("#ddlPaises").html(data);
});

$("#btnValidar1").click(function(){
  var nombre = $("#nombre").val().length;
  var apellido = $("#apellido").val().length;
  var fecha = $("#fecha").val().length;
  var telefono = $("#telefono").val().length;
  var rut = $("#rut").val().length;
  var iso_nac = $("#iso_nac").val().length;
  var mail = $("#mail").val().length;
  var bandera = false;

  if (nombre == '0')
  {
    bandera = true;
  }
  if (apellido == '0')
  {
    bandera = true;
  }
  if (fecha == '0')
  {
    bandera = true;
  }
  if (telefono == '0')
  {
    bandera = true;
  }
  if (rut == '0')
  {
    bandera = true;
  }
  if (iso_nac == '0')
  {
    bandera = true;
  }
  if (mail == '0')
  {
    bandera = true;
  }

  if (bandera)
  {
    Swal.fire({
        type: 'error',
        title: 'Faltan datos',
        text: 'Faltan datos perosnales'
      });
  }
  else {
    $("#btn1").css('display','block');
    $("#btnValidar1").css('display','none');
  }

});

$("#btnValidar2").click(function(){

  var id_pais = $("#id_pais").val().length;
  var tipo_licencia = $("#tipo_licencia").val().length;
  var fecha_emision = $("#fecha_emision").val().length;
  var fecha_vencimiento = $("#fecha_vencimiento").val().length;
  var bandera = false;

  if (id_pais == '0')
  {
    bandera = true;
  }
  if (tipo_licencia == '0')
  {
    bandera = true;
  }
  if (fecha_emision == '0')
  {
    bandera = true;
  }
  if (fecha_vencimiento == '0')
  {
    bandera = true;
  }

  if (bandera)
  {
    Swal.fire({
        type: 'error',
        title: 'Faltan datos',
        text: 'Faltan datos de la licencia'
      });
  }
  else
  {
    $("#btn2").css('display','block');
    $("#btnValidar2").css('display','none');
  }
});

$("#btnValidar3").click(function(){
  var id_tipo_vehiculo = $("#id_tipo_vehiculo").val().length;
  var capacidad = $("#capacidad").val().length;
  var marca = $("#marca").val().length;
  var modelo = $("#modelo").val().length;
  var anio = $("#anio").val().length;
  var bandera = false;

  if (id_tipo_vehiculo == '0')
  {
      bandera = true;
  }
  if (capacidad == '0')
  {
      bandera = true;
  }
  if (marca == '0')
  {
      bandera = true;
  }
  if (modelo == '0')
  {
      bandera = true;
  }
  if (anio == '0')
  {
      bandera = true;
  }

  if (bandera)
  {
    Swal.fire({
        type: 'error',
        title: 'Faltan datos',
        text: 'Faltan los datos del vehiculo'
      });
  }
  else {
    $("#btn3").css('display','block');
    $("#btnValidar3").css('display','none');
  }
});
