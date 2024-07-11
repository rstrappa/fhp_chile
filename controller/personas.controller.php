<?php
require_once 'model/solicitud.php';
require_once 'model/nacionalidad.php';
require_once 'model/tipo_vehiculo.php';
require_once 'model/regiones.php';
require_once 'model/comunas.php';
require_once 'model/licencia.php';
class PersonasController
{
  private $model_p;
  private $model_n;
  private $model_tv;
  private $model_re;
  private $model_co;
  private $model_li;
  public function __CONSTRUCT()
   {
   $this->model_p = new Solicitud();
   $this->model_n = new Nacionalidad();
   $this->model_tv = new Tipo_vehiculo();
   $this->model_re = new Regiones();
   $this->model_co = new Comunas();
   $this->model_li = new Licencia();
   }


   //Funcuines vistas
   public function Index()
    {
      require_once 'view/header.php';
      require_once 'view/index.php';

    }
    public function Contacto()
     {
       require_once 'view/header.php';
       require_once 'view/contacto.php';
       require_once 'view/footer.php';

     }

    public function RegistrarPersona()
    {
      $n = new Nacionalidad();
      $tp = new Tipo_vehiculo();
      $re = new Regiones();
      $co = new Comunas();
      require_once 'view/header.php';
      require_once 'view/registro2.php';
      require_once 'view/footer.php';
    }

    public function Informacion()
    {
      require_once 'view/header.php';
      require_once 'view/informacionAdicional.php';
      require_once 'view/footer.php';
    }

    //Metodos
    public function IngresarPersona()
    {

    $p = new Solicitud();
    $l = new Licencia();

    //Licencia
    $l->id_pais = $_REQUEST['id_pais'];
    $l->fecha_emision = $_REQUEST['fecha_emision'];
    $l->fecha_vencimiento = $_REQUEST['fecha_vencimiento'];
    $l->tipo_licencia = $_REQUEST['tipo_licencia'];
    $this->model_li->insert($l);

    //Sacamos la licencia para agregarla a la solicitud
    $id_licencia = $this->model_li->ListarUltimoID();

    //Conductor
    $p->licencia = $id_licencia->id;
    $p->nombre = $_REQUEST['nombre'];
    $p->apellido = $_REQUEST['apellido'];
    $p->fecha = $_REQUEST['fecha'];
    $p->telefono = $_REQUEST['telefono'];
    $p->direccion = $_REQUEST['direccion'];
    $p->iso_nac = $_REQUEST['iso_nac'];
    $p->rut = $_REQUEST['rut'];
    $p->id_region = $_REQUEST['id_region'];
    $p->id_comuna = $_REQUEST['id_comuna'];
    $p->mail = $_REQUEST['mail'];

    $dia = Date(d);
    $mes = Date(m);
    $anio = Date(Y);

     $fecha_solicitud = $anio."/".$mes."/".$dia;
     $p->fecha_solicitud = $fecha_solicitud;


    /*
    $p->estado_documentacion = $_REQUEST['estado_documentacion'];
    $p->licencia = $_REQUEST['licencia'];
    $p->antecedentes = $_REQUEST['antecedentes'];
    $p->disponibilidad = $_REQUEST['disponibilidad'];
    $p->mail = $_REQUEST['mail'];
    $p->traslado = $_REQUEST['traslado'];
    $al = $_REQUEST['auto_leasing'];*/
    if ($al == null)
    {
      $p->id_tipo_vehiculo = $_REQUEST['id_tipo_vehiculo'];
      $p->cantidad = $_REQUEST['capacidad'];
      $p->marca = $_REQUEST['marca'];
      $p->modelo = $_REQUEST['modelo'];
      $p->anio = $_REQUEST['anio'];

      $this->model_p->Insert($p);
      // Enviamos correo con un link para que el usuario registre sus siguientes trader_cdlrisefall3methods

      $id = $this->model_p->ListarUltimoID();
    $nombre =  $_REQUEST['nombre'];
    $correo = $_REQUEST['mail'];

     $to = $correo;

     $subject = 'Contacto FHPCHILE';

     $message = '
     <html>
     <head>
       <title>BIenvenido a FHPChile</title>
     </head>
     <body>
       <p> Hola '.$nombre.' bienvenido a FHPChile</p><br>
       <p>Ingresa a https://fhpchile.cl/index.php?c=Personas&a=Informacion&id_solicitud='.$id->id.'</p>

     </body>
     </html>
     ';


     $headers[] = 'MIME-Version: 1.0';
     $headers[] = 'Content-type: text/html; charset=iso-8859-1';

     $headers[] = 'To: Contacto <contacto@fhpchile.cl>';
     $headers[] = 'From: Soporte FHPCHILE <soporte@fhpchile.cl>';

     mail($to, $subject, $message, implode("\r\n", $headers));

      header('Location: ?c=Personas&a=RegistrarPersona&e=2');

/*     $p->auto_leasing = 0;
      $p->patente_vehiculo = $_REQUEST['patente_vehiculo'];
      $p->patente_rampla = $_REQUEST['patente_rampla'];*/

      //Creamos y movemos archivo licencia
    /*  $i1 = $_FILES['licencia']['name'];
      $ext1 = strtolower(pathinfo($i1,PATHINFO_EXTENSION));
      $archivo1 = $_FILES['licencia']['tmp_name'];
      $ruta1 = "documentos/licencia";
      $ruta1 = $ruta1.".".$ext1;
      $moved1 = move_uploaded_file($archivo1, $ruta1);

      //Creamos y movemos archivo Padron
      $i2 = $_FILES['padron']['name'];
      $ext2 = strtolower(pathinfo($i2,PATHINFO_EXTENSION));
      $archivo2 = $_FILES['padron']['tmp_name'];
      $ruta2 = "documentos/padron";
      $ruta2 = $ruta2.".".$ext2;
      $moved2 = move_uploaded_file($archivo2, $ruta2);

      // Creamos y movemos archivo permiso
      $i3 = $_FILES['permiso']['name'];
      $ext3 = strtolower(pathinfo($i3,PATHINFO_EXTENSION));
      $archivo3 = $_FILES['permiso']['tmp_name'];
      $ruta3 = "documentos/permiso";
      $ruta3 = $ruta3.".".$ext3;
      $moved3 = move_uploaded_file($archivo3, $ruta3);

      //Si se movieron los acrhivos comprime
      if ($moved1 && $moved2 && $moved3)
      {
        $zip = new ZipArchive();
        $filename = 'documentos/documentos-'.$_REQUEST['patente_vehiculo'].'.zip';
        if($zip->open($filename,ZIPARCHIVE::CREATE)===true)
        {


          //Comprime los archivos
            $zip->addFile('documentos/licencia.'.$ext1);
            $zip->addFile('documentos/padron.'.$ext2);
            $zip->addFile('documentos/permiso.'.$ext3);
            $zip->close();

            $p->src_documentos = $filename;
            //Borra los archivos despues de comprimir
            unlink('documentos/licencia.'.$ext1);
            unlink('documentos/padron.'.$ext2);
            unlink('documentos/permiso.'.$ext3);

            $this->model_p->Insert($p);
            header('Location: ?c=Personas&a=RegistrarPersona&e=2');

        }
        else
        {
          echo "Error al crear el archivo";
        }
      }*/
  }
  else
  {
   $p->auto_leasing = $_REQUEST['auto_leasing'];
    $this->model_p->Insert2($p);
    header('Location: ?c=Personas&a=RegistrarPersona&e=2');
  }
}

public function AcutalizarInfo()
{
  $p = new Solicitud();
  $id_solicitud = $_REQUEST['id_solicitud'];

  $p->estado_documentacion = $_REQUEST['estado_documentacion'];
  $p->antecedentes = $_REQUEST['antecedentes'];
  $p->disponibilidad = $_REQUEST['disponibilidad'];
  $p->traslado = $_REQUEST['traslado'];
  $p->id_persona = $id_solicitud;
  $p->patente_vehiculo = $_REQUEST['patente_vehiculo'];
  $p->patente_rampla = $_REQUEST['patente_rampla'];

  //Foto perfiles
  $i = $_FILES['src_perfil']['name'];
  $ext = strtolower(pathinfo($i,PATHINFO_EXTENSION));
  $archivo = $_FILES['src_perfil']['tmp_name'];
  $ruta = "assets/images/perfil/";
  $ruta = $ruta.$id_solicitud.".".$ext;
  $moved=move_uploaded_file($archivo, 'admin/'.$ruta);

  //Creamos y movemos archivo licencia
  $i1 = $_FILES['licencia']['name'];
  $ext1 = strtolower(pathinfo($i1,PATHINFO_EXTENSION));
  $archivo1 = $_FILES['licencia']['tmp_name'];
  $ruta1 = "documentos/licencia";
  $ruta1 = $ruta1.".".$ext1;
  $moved1 = move_uploaded_file($archivo1, $ruta1);

  //Creamos y movemos archivo Padron
  $i2 = $_FILES['padron']['name'];
  $ext2 = strtolower(pathinfo($i2,PATHINFO_EXTENSION));
  $archivo2 = $_FILES['padron']['tmp_name'];
  $ruta2 = "documentos/padron";
  $ruta2 = $ruta2.".".$ext2;
  $moved2 = move_uploaded_file($archivo2, $ruta2);

  // Creamos y movemos archivo permiso
  $i3 = $_FILES['permiso']['name'];
  $ext3 = strtolower(pathinfo($i3,PATHINFO_EXTENSION));
  $archivo3 = $_FILES['permiso']['tmp_name'];
  $ruta3 = "documentos/permiso";
  $ruta3 = $ruta3.".".$ext3;
  $moved3 = move_uploaded_file($archivo3, $ruta3);

  //Si se movieron los acrhivos comprime
  if ($moved && $moved1 && $moved2 && $moved3)
  {
    $zip = new ZipArchive();
    $filename = 'documentos/documentos-'.$_REQUEST['id_solicitud'].'.zip';
    if($zip->open($filename,ZIPARCHIVE::CREATE)===true)
    {


      //Comprime los archivos
        $zip->addFile('documentos/licencia.'.$ext1);
        $zip->addFile('documentos/padron.'.$ext2);
        $zip->addFile('documentos/permiso.'.$ext3);
        $zip->close();

        $p->src_documentos = $filename;
        $p->src_perfil = $ruta;
        //Borra los archivos despues de comprimir
        unlink('documentos/licencia.'.$ext1);
        unlink('documentos/padron.'.$ext2);
        unlink('documentos/permiso.'.$ext3);

        $this->model_p->ActualizarSolicitud($p);
        header('Location: ?c=Personas&a=RegistrarPersona&e=2');

    }
    else
    {
      echo "Error al crear el archivo";
    }
  }
}

    public function EnviarCorreo()
    {
     $nombre =  $_REQUEST['nombre'];
      $telefono = $_REQUEST['telefono'];
      $correo = $_REQUEST['correo'];
      $mensaje = $_REQUEST['mensaje'];

    $to = 'rstrappa@tecnoactive.cl';

    $subject = 'Contacto FHPCHILE';

    $message = '
    <html>
    <head>
      <title>Contacto</title>
    </head>
    <body>
      <p>'.$nombre.' ha mandado un mensaje</p>
      <table>
        <tr>
          <td>Nombre:</td>
          <td>'.$nombre.'</td>
        </tr>
        <tr>
          <td>Telefono</td>
          <td>'.$telefono.'</td>
        </tr>
        <tr>
          <td>Correo</td>
          <td>'.$correo.'</td>
        </tr>
        <tr>
          <td>Mensaje</td>
          <td><p>'.$mensaje.'</p></td>
        </tr>
      </table>
    </body>
    </html>
    ';


    $headers[] = 'MIME-Version: 1.0';
    $headers[] = 'Content-type: text/html; charset=iso-8859-1';

    $headers[] = 'To: Contacto <contacto@fhpchile.cl>';
    $headers[] = 'From: Soporte FHPCHILE <soporte@fhpchile.cl>';

    mail($to, $subject, $message, implode("\r\n", $headers));
      header('Location: ?c=Personas&a=Contacto&e=2');
    }

    public function enviarCorreoPrueba()
    {

       $to = 'achung@tecnoactive.cl, rstrappa@tecnoactive.cl';

       $subject = 'Contacto FHPCHILE';

       $message = '
       <html>
       <head>
         <title>BIenvenido a FHPChile</title>
         <style>
         .nombre
         {
           color:blue;
         }
         </style>
       </head>
       <body>
         <p style="color:red;"> Hola bienvenido a FHPChile</p><br>
         <label class="nombre">Raul Strappa</label>
         <img src="https://fhpchile.cl/assets/img/Todos-juntos.gif"></img><br>
         <img src="https://fhpchile.cl/assets/img/Todos-juntos.gif"></img><bt>
         <img src="https://fhpchile.cl/assets/img/Todos-juntos.gif"></img><bt>
         <img src="https://fhpchile.cl/assets/img/Todos-juntos.gif"></img><bt>
         <img src="https://fhpchile.cl/assets/img/Todos-juntos.gif"></img><bt>

       </body>
       </html>
       ';


       $headers[] = 'MIME-Version: 1.0';
       $headers[] = 'Content-type: text/html; charset=iso-8859-1';

       $headers[] = 'To: Contacto <contacto@fhpchile.cl><rstrappa@tecnoactive.cl>';
       $headers[] = 'From: Soporte FHPCHILE <soporte@fhpchile.cl>';

       mail($to, $subject, $message, implode("\r\n", $headers));

    }
}
