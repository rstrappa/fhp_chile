<?php
  require_once 'model/usuario.php';
  require_once 'model/solicitud.php';
  require_once 'model/nacionalidad.php';
  require_once 'model/conductor.php';
  require_once 'model/vehiculo.php';
  require_once 'model/tipo_vehiculo.php';
  require_once 'model/pendienteOrden.php';
  require_once 'model/ruta.php';
  require_once 'model/licencia.php';
  require_once 'model/empresa.php';
  require_once 'model/sucursal.php';

  class UsuarioController
  {
    private $model_us;
    private $model_so;
    private $model_na;
    private $model_co;
    private $model_ve;
    private $model_tv;
    private $model_po;
    private $model_ru;
    private $model_li;
    private $model_em;
    private $model_su;
    public function __CONSTRUCT()
     {
     $this->model_us = new Usuario();
     $this->model_so = new Solicitud();
     $this->model_na = new Nacionalidad();
     $this->model_co = new Conductor();
     $this->model_ve = new Vehiculo();
     $this->model_tv = new Tipo_vehiculo();
     $this->model_po = new PendienteOrden();
     $this->model_ru = new Ruta();
     $this->model_li = new Licencia();
     $this->model_em = new Empresa();
     $this->model_su = new Sucursal();

     }


     //Funcuines vistas
     public function Index()
      {
        require_once 'view/login.php';
      }
      public function Dashboard()
      {
        if ($_SESSION['usuario'] == null)
        {
          header('Location:?c=usuario&a=Index&e=login2');
        }
        $sU = new Usuario();
        $tv = new Tipo_vehiculo();
        $sU = $_SESSION['usuario'];
        $sC = new Conductor();
        $sC = $_SESSION['conductor'];
        $nombreC = str_replace(' ','',$sC->nombre);

        $ruta = $sC->ruta;
        if ($sU->id_tipo_usuario == 1)
        {
          require_once 'view/header.php';
        }

        if ($sU->id_tipo_usuario == 2)
        {
          require_once 'view/headerConductor.php';
        }



        if ($sU->id_tipo_usuario == 1)
        {
          require_once 'view/index.php';
        }

        if ($sU->id_tipo_usuario == 2)
        {
          if ($sU->password == $nombreC)
          {
            require_once 'view/cambiarPassword.php';
          }
          if ($sU->password != $nombreC && $sC->id_auto == null)
          {
            require_once 'view/subirAuto.php';
          }
          if ($sC->id_auto != null && $sC->src_perfil == null)
          {
            require_once 'view/agregarFotoPerfil.php';
          }
          if ($sC->id_auto != null && $sC->src_perfil != null)
          {
            $conductorr = $this->model_co->ListarID($sU->id_usuario);
            require_once 'view/indexConductor.php';
          }

        }
        require_once 'view/footer.php';
      }

      public function MisDatos()
      {

        if ($_SESSION['usuario'] == null)
        {
          header('Location:?c=usuario&a=Index&e=login2');
        }
        $sU = new Usuario();
        $sU = $_SESSION['usuario'];
        if ($sU->id_tipo_usuario == 1)
                {
                  require_once 'view/header.php';
                }

                if ($sU->id_tipo_usuario == 2)
                {
                  require_once 'view/headerConductor.php';
                }
        require_once 'view/misDatos.php';
        require_once 'view/footer.php';
      }

      public function FotoPerfil()
      {
        if ($_SESSION['usuario'] == null)
        {
          header('Location:?c=usuario&a=Index&e=login2');
        }

        require_once 'view/header.php';
        require_once 'view/agregarFotoPerfil.php';
        require_once 'view/footer.php';
      }
      public function SubirOrden()
      {
        if ($_SESSION['usuario'] == null)
        {
          header('Location:?c=usuario&a=Index&e=login2');
        }

        require_once 'view/header.php';
        require_once 'view/subirOrdenCompra.php';
        require_once 'view/footer.php';
      }
      public function ListarOrden()
      {
        if ($_SESSION['usuario'] == null)
        {
          header('Location:?c=usuario&a=Index&e=login2');
        }
          $p = new PendienteOrden();
        require_once 'view/header.php';
        require_once 'view/listarOrdenesCompra.php';
        require_once 'view/footer.php';
      }
      public function AsignarOrden()
      {
        if ($_SESSION['usuario'] == null)
        {
          header('Location:?c=usuario&a=Index&e=login2');
        }
        $p = new PendienteOrden();
        $p = $this->model_po->ListarID($_REQUEST['id_orden']);

        $c = new Conductor();
      require_once 'view/header.php';
      require_once 'view/asignarOrden.php';
      require_once 'view/footer.php';
      }


    public function SolicitudConductores()
    {
      if ($_SESSION['usuario'] == null)
      {
        header('Location:?c=usuario&a=Index&e=login2');
      }
      $p = new Solicitud();
      require_once 'view/header.php';
      require_once 'view/solicitudConductores.php';
      require_once 'view/footer.php';
    }
    public function Entregas()
    {
      if ($_SESSION['usuario'] == null)
      {
        header('Location:?c=usuario&a=Index&e=login2');
      }
      $c = new Conductor();
      require_once 'view/header.php';
      require_once 'view/entregas.php';
      require_once 'view/footer.php';
    }
    public function EntregasConductor()
    {
      if ($_SESSION['usuario'] == null)
      {
        header('Location:?c=usuario&a=Index&e=login2');
      }
      $p = new pendienteOrden();
      require_once 'view/headerConductor.php';
      require_once 'view/entregaConductor.php';
      require_once 'view/footer.php';
    }
    public function VerReceptor()
    {
      if ($_SESSION['usuario'] == null)
      {
        header('Location:?c=usuario&a=Index&e=login2');
      }
      $p = new pendienteOrden();
      $id = $_REQUEST['id'];
      require_once 'view/headerConductor.php';
      require_once 'view/verReceptor.php';
      require_once 'view/footer.php';
    }
    public function Conductores()
    {
      if ($_SESSION['usuario'] == null)
      {
        header('Location:?c=usuario&a=Index&e=login2');
      }
      $c = new Conductor();
      require_once 'view/header.php';
      require_once 'view/conductores.php';
      require_once 'view/footer.php';
    }
    public function IngresarClientes()
    {
      if ($_SESSION['usuario'] == null)
      {
        header('Location:?c=usuario&a=Index&e=login2');
      }
      $c = new Conductor();
      require_once 'view/header.php';
      require_once 'view/ingresarClientes.php';
      require_once 'view/footer.php';
    }

    public function AsignarConductores()
    {
      if ($_SESSION['usuario'] == null)
      {
        header('Location:?c=usuario&a=Index&e=login2');
      }
      $c = new Conductor();
      $e = new Empresa();
      require_once 'view/header.php';
      require_once 'view/asignarConductores.php';
      require_once 'view/footer.php';
    }

    public function Clientes()
    {
      if ($_SESSION['usuario'] == null)
      {
        header('Location:?c=usuario&a=Index&e=login2');
      }

      $e = new Empresa();
      require_once 'view/header.php';
      require_once 'view/clientes.php';
      require_once 'view/footer.php';
    }
    public function Sucursales()
    {
      if ($_SESSION['usuario'] == null)
      {
        header('Location:?c=usuario&a=Index&e=login2');
      }
      $s = new Sucursal();
      require_once 'view/header.php';
      require_once 'view/sucursales.php';
      require_once 'view/footer.php';
    }
    public function CambiarContraseña()
    {
      if ($_SESSION['usuario'] == null)
      {
        header('Location:?c=usuario&a=Index&e=login2');
      }
      $s = new Sucursal();
      require_once 'view/header.php';
      require_once 'view/cambiarPassword.php';
      require_once 'view/footer.php';
    }
    public function CambiarContraseñaU()
    {
      if ($_SESSION['usuario'] == null)
      {
        header('Location:?c=usuario&a=Index&e=login2');
      }
      $s = new Sucursal();
      require_once 'view/headerConductor.php';
      require_once 'view/cambiarPassword.php';
      require_once 'view/footer.php';
    }
    public function RecuperarPassword()
    {

      require_once 'view/recuperarPass.php';

    }

    public function Entregar()
    {
      if ($_SESSION['usuario'] == null)
      {
        header('Location:?c=usuario&a=Index&e=login2');
      }

      require_once 'view/header.php';
      require_once 'view/entregar.php';
      require_once 'view/footer.php';
    }
    public function EntregarC()
    {
      if ($_SESSION['usuario'] == null)
      {
        header('Location:?c=usuario&a=Index&e=login2');
      }

      require_once 'view/headerConductor.php';
      require_once 'view/entregar.php';
      require_once 'view/footer.php';
    }
      //Funciones
      public function Ingresar()
      {

          $correo = $_REQUEST['correo'];
          $password = $_REQUEST['password'];


          if ($correo == 'admin')
          {
            $u = $this->model_us->listarNombreA($correo);

            if ($correo == $u->nombre && $password == $u->password)
            {
                $_SESSION['id_usuario'] = $u->id_usuario;
                $_SESSION['nombre'] = $u->nombre;
                $_SESSION['usuario'] = $u;

                $c = new Conductor();
                $c = $this->model_co->ListarID($u->id_usuario);
                $_SESSION['conductor'] = $c;
                header('Location:index.php?c=Usuario&a=Dashboard');
            }
            else {
                header('Location:index.php?m=Error');
            }
          }
          else {
            $u = $this->model_us->listarNombre($correo);

            if ($correo == $u->mail && $password == $u->password)
            {
                $_SESSION['id_usuario'] = $u->id_usuario;
                $_SESSION['nombre'] = $u->nombre;
                $_SESSION['usuario'] = $u;

                $c = new Conductor();
                $c = $this->model_co->ListarID($u->id_usuario);
                $_SESSION['conductor'] = $c;
                header('Location:index.php?c=Usuario&a=Dashboard');


            }
            else {
                header('Location:index.php?m=Error');
            }
          }

      }

      public function logOut()
      {
        session_destroy();
        header('Location:index.php');
      }

      public function AceptarSolicitudConductor()
      {
        $id_persona = $_REQUEST['id'];
        $solicitud = new Solicitud();
        $conductor = new Conductor();
        $vehiculo = new Vehiculo();
        $usuario = new Usuario();
        $ruta = new Ruta();

        //Buscamos la solicitud que vamos a aceptar
        $solicitud = $this->model_so->ListarID($id_persona);

        // Revisamos si el conductor tiene auto o no
        if ($solicitud->auto_leasing == 0)
        {
          //Crearemos el vehiculo primero, sacando los datos de la solicitud
          $v->patente_vehiculo = $solicitud->patente_vehiculo;
          $v->patente_rampla = $solicitud->patente_rampla;
          $v->capacidad = $solicitud->cantidad;
          $v->id_tipo_vehiculo = $solicitud->id_tipo_vehiculo;
          $v->anio = $solicitud->anio;
          $v->marca = $solicitud->marca;
          $v->modelo = $solicitud->modelo;
          $v->utilizacion = 100;
          $v->capacidad_actual = $solicitud->cantidad;
          $this->model_ve->Insert($v);
        }
        //Creamos el conductor
        $conductor->id_conductor = $id_persona;
        $conductor->nombre = $solicitud->nombre.' '.$solicitud->apellido;
        $conductor->fecha = $solicitud->fecha;
        $conductor->telefono = $solicitud->telefono;
        $conductor->direccion = $solicitud->direccion;
        $conductor->iso_nac = $solicitud->iso_nac;
        $conductor->rut = $solicitud->rut;
        $conductor->licencia = $solicitud->licencia;
        $conductor->mail = $solicitud->mail;
        $conductor->id_region = $solicitud->id_region;
        $conductor->id_comuna = $solicitud->id_comuna;
        $conductor->traslado = $solicitud->traslado;
        $conductor->src_perfil = $solicitud->src_perfil;

        //Sacamos el id mayor de vehiculos para asignarcelo al conductor
        $id = $this->model_ve->ListarMax();
        $conductor->id_auto = $id->id;
        $conductor->id_auto_leasing = $solicitud->auto_leasing;
        //Se registra el conductor
        $this->model_co->Insert($conductor);
        //Se borra la solicitud
        unlink("../".$solicitud->src_documentos);
       $this->model_so->delete($id_persona);

        //Creamos el Usuario
        $usuario->id_usuario = $id_persona;
        $usuario->nombre = $solicitud->mail;
        $usuario->password = str_replace(' ','',$solicitud->nombre.$solicitud->apellido);
        $usuario->id_tipo_usuario = 2;
        $this->model_us->Insert($usuario);

        //Creamos ruta
        $ruta->id_auto = $id->id;
        $ruta->ruta = '';
        $this->model_ru->Insert($ruta);
        //Enviamos corre con info al nuevo conductores

        $to = $conductor->mail;

        $subject = 'Contacto FHPCHILE';

        $message = '
        <html>
        <head>
          <title>Contacto</title>
        </head>
        <body>
          <p>Bienvenido a la comunidad de FHPChile</p>
          <table>
            <tr>
              <td>Nombre de usuario:</td>
              <td>'.$usuario->nombre.'</td>
            </tr>
            <tr>
              <td>Contraseña</td>
              <td>'.$usuario->password.'</td>
            </tr>
            <label style="color:red">Debe cambiar su contraseña al iniciar sesion</label>
          </table>

          <p>Ingresa a https://fhpchile.cl/admin/ para iniciar</p>
        </body>
        </html>
        ';


        $headers[] = 'MIME-Version: 1.0';
        $headers[] = 'Content-type: text/html; charset=iso-8859-1';

        $headers[] = 'To: Contacto <contacto@fhpchile.cl>';
        $headers[] = 'From: Soporte FHPCHILE <soporte@fhpchile.cl>';

        mail($to, $subject, $message, implode("\r\n", $headers));

        header('Location:index.php?c=Usuario&a=SolicitudConductores&m=ExitoEnviar');
      }

      public function CambiarPassword()
      {
        $sU = $_SESSION['usuario'];
        $pass = $_REQUEST['password'];
        $this->model_us->cambiarPassword($pass,$sU->id_usuario);

        $sU->password = $pass;
        $_SESSION['usuario'] = $sU;
        header('Location:index.php?c=Usuario&a=Dashboard&m=ExitoPassword');
      }

      public function IngresarAuto()
      {
        $sC = new Conductor();
        $sC = $_SESSION['conductor'];
        $v = new Vehiculo();

        $i = $_FILES['src_imagen']['name'];
        $ext = strtolower(pathinfo($i,PATHINFO_EXTENSION));
        $archivo = $_FILES['src_imagen']['tmp_name'];
        $ruta = "assets/images/autos/";
        $ruta = $ruta.$sC->id_conductor.".".$ext;

        $v->patente_vehiculo = $_REQUEST['patente_vehiculo'];
        $v->patente_rampla = $_REQUEST['patente_rampla'];
        $v->capacidad = $_REQUEST['capacidad'];
        $v->id_tipo_vehiculo = $_REQUEST['id_tipo_vehiculo'];
        $v->anio = $_REQUEST['anio'];
        $v->marca = $_REQUEST['marca'];
        $v->modelo = $_REQUEST['modelo'];
        $v->src_imagen = $ruta;
        $v->utilizacion = 100;
        $id = $this->model_ve->ListarMax();


      $moved=move_uploaded_file($archivo, $ruta);
        if ($moved)
        {
          $this->model_ve->Insert($v);
          $id = $this->model_ve->ListarMax();
          $this->model_co->AgregarAutoConductor($id->id,$sC->id_conductor);

          $sC->id_auto = $id->id;
          $_SESSION['conductor'] = $sC;
          header('Location:index.php?c=Usuario&a=Dashboard&m=ExitoAuto');
        }
        else {
          header('Location:index.php?c=Usuario&a=Dashboard&m=ErrorAuto');
        }
      }

      public function SubirPerfil()
      {
        $sU = new Usuario();
        $tv = new Tipo_vehiculo();
        $sU = $_SESSION['usuario'];
        $sC = new Conductor();
        $sC = $_SESSION['conductor'];

        $i = $_FILES['src_perfil']['name'];
        $ext = strtolower(pathinfo($i,PATHINFO_EXTENSION));
        $archivo = $_FILES['src_perfil']['tmp_name'];
        $ruta = "assets/images/perfil/";
        $ruta = $ruta.$sC->id_conductor.".".$ext;
        $moved=move_uploaded_file($archivo, $ruta);

        if ($moved)
        {
          $this->model_co->SubirFotoPerfil($ruta,$sC->id_conductor);
          header('Location:index.php?m=ExitoFoto');
        }else {
            header('Location:index.php?c=Usuario&a=FotoPerfil&m=ErrorFoto');
        }

      }

      public function RechazarSolicitud()
      {

        //Correo
        $to = $_REQUEST['correo'];

        $subject = 'Contacto FHPCHILE';

        $message = '
        <html>
        <head>
          <title>Contacto</title>
        </head>
        <body>
          <p>Lamentamos informarle que hay errores en su solicitud, vuelva a intentarlo </p>
        </body>
        </html>
        ';


        $headers[] = 'MIME-Version: 1.0';
        $headers[] = 'Content-type: text/html; charset=iso-8859-1';

        $headers[] = 'To: yo <rstrappa@tecnoactive.cl>';
        $headers[] = 'From: Soporte FHPCHILE <soporte@fhpchile.cl>';

        mail($to, $subject, $message, implode("\r\n", $headers));

        //-----
        $id = $_REQUEST['id'];
        $this->model_so->delete($id);
        header('Location:index.php?c=Usuario&a=SolicitudConductores');
      }

      public function OrdenDeCompra()
      {
          $hoy = date("YmdHis");

        //Subir archivo
          $i = $_FILES['orden']['name'];
          $ext = strtolower(pathinfo($i,PATHINFO_EXTENSION));
          $archivo = $_FILES['orden']['tmp_name'];
          $ruta = "assets/Ordenes/orden";
          $ruta = $ruta.$hoy.".".$ext;

          $moved=move_uploaded_file($archivo, $ruta);

          if ($moved)
          {
            //Leer archivo
              include 'model/PHPExcel.php';
              $tempFile = $ruta;
              $excelReader = PHPExcel_IOFactory::createReaderForFile($tempFile);
              $excelObj = $excelReader->load($tempFile);
              $worksheet = $excelObj->getActiveSheet();
              $lastRow = $worksheet->getHighestRow();

              $orden = new PendienteOrden();
              for ($i=2; $i <=$lastRow ; $i++)
              {


                $orden->empresa = $worksheet->getCell('A'.$i)->getValue();
                $orden->numeroCompra = $worksheet->getCell('B'.$i)->getValue();
                $fecha = $worksheet->getCell('C'.$i)->getValue();

                $orden->fecha_entrega = date($format = 'Y/m/d', PHPExcel_Shared_Date::ExcelToPHP($fecha));
                $orden->direccion = $worksheet->getCell('D'.$i)->getValue();
                $orden->comuna = $worksheet->getCell('E'.$i)->getValue();
                $orden->cliente = $worksheet->getCell('F'.$i)->getValue();
                $orden->rut_cliente = $worksheet->getCell('G'.$i)->getValue();
                $orden->sku = $worksheet->getCell('H'.$i)->getValue();
                $orden->marca = $worksheet->getCell('I'.$i)->getValue();
                $orden->codigo = $worksheet->getCell('J'.$i)->getValue();
                $orden->valor = $worksheet->getCell('K'.$i)->getValue();
                $orden->peso = $worksheet->getCell('L'.$i)->getValue();
                $orden->dimencion = $worksheet->getCell('M'.$i)->getValue();
                $this->model_po->Insert($orden);
              }

            header('Location:index.php?c=Usuario&a=ListarOrden&m=ExitoSubirOrden');
          }
          else {
              header('Location:index.php?c=Usuario&a=SubirOrden&m=ErrorsubirOrden');
          }


      }

      public function ReenviarCorreo()
      {
        $id = $_REQUEST['id'];

        $solicitud = $this->model_so->ListarID($id);

         $to = $solicitud->mail;

         $subject = 'Contacto FHPCHILE';

         $message = '
         <html>
         <head>
           <title>BIenvenido a FHPChile</title>
         </head>
         <body>
           <p> Hola '.$solicitud->nombre.' le recordamos que tiene que terminar su registro</p><br>
           <p>Ingrese a https://fhpchile.cl/index.php?c=Personas&a=Informacion&id_solicitud='.$id.'</p>

         </body>
         </html>
         ';


         $headers[] = 'MIME-Version: 1.0';
         $headers[] = 'Content-type: text/html; charset=iso-8859-1';

         $headers[] = 'To: Contacto <contacto@fhpchile.cl>';
         $headers[] = 'From: Soporte FHPCHILE <soporte@fhpchile.cl>';

        mail($to, $subject, $message, implode("\r\n", $headers));
        header('Location: ?c=Usuario&a=SolicitudConductores&e=2');
      }

      public function RegistrarEmpresa()
      {
        $e = new Empresa();

        $e->nombre_empresa = $_REQUEST['nombre_empresa'];
        $this->model_em->insert($e);
         header('Location: ?c=Usuario&a=IngresarClientes&m=RegistroEmpresa');
      }

      public function RegistrarSucursal()
      {
        $s = new Sucursal();

        $cant = $_REQUEST['cantSucursales'];
        for ($i=1; $i <=$cant ; $i++)
        {

          $s->id_empresa = $_REQUEST['id_empresa'.$i];
          $s->direccion_sucursal = $_REQUEST['direccion_sucursal'.$i];
          $s->nombre_sucursal = $_REQUEST['nombre_sucursal'.$i];

          $this->model_su->insert($s);
          header('Location: ?c=Usuario&a=IngresarClientes&m=RegistroSucursal');
        }
      }

      public function EliminarSucursal()
      {
        $id_empresa = $_REQUEST['id_empresa'];
        $id = $_REQUEST['id_sucursal'];
        $this->model_su->Delete($id);
        header('Location: ?c=Usuario&a=Sucursales&m=EliminoSucursal&id_empresa='.$id_empresa);
      }
      public function NuevaPassword()
      {
         $u = new Usuario();
         $mail = $_REQUEST['mail'];
         $u = $this->model_us->listarCorreo($mail);
         $to = $mail;

         $subject = 'Recupera tu contraseña FHPCHILE';

         $message = '
         <html>
         <head>
           <title>Cambiar tu contraseña</title>
         </head>
         <body>
           <p>Hola '.$u->nombre.' se le envia este correo porque solicitud su cambio de contraseña, de no se asi, por favor contactese con nosotros</p><br>
           <p>Su Contraseña es: '.$u->password.'</p>

         </body>
         </html>
         ';


         $headers[] = 'MIME-Version: 1.0';
         $headers[] = 'Content-type: text/html; charset=iso-8859-1';

         $headers[] = 'To: Contacto <contacto@fhpchile.cl>';
         $headers[] = 'From: Soporte FHPCHILE <soporte@fhpchile.cl>';

       mail($to, $subject, $message, implode("\r\n", $headers));
       header('Location: ?c=Usuario&a=Index&m=ExitoEnvioPass');


      }

      public function BorrarTodo()
      {
        $this->model_co->BorrarTodo();
        $this->model_ve->BorrarTodo();
        $this->model_us->BorrarTodo();
        $this->model_ru->BorrarTodo();
        $this->model_po->BorrarTodo();
        $this->model_li->BorrarTodo();
        $this->model_so->BorrarTodo();
        $this->model_co->BorrarTodoE();
      //  $this->model_em->BorrarTodo();
      //  $this->model_su->BorrarTodo();
        $this->model_ru->BorrarEntrega();
        //Borramos foto perfiles
        $files = glob('assets/images/perfil/*'); //obtenemos todos los nombres de los ficheros
        foreach($files as $file)
        {
          if(is_file($file))
          unlink($file); //elimino el fichero
        }

        //Borramos
        $files = glob('assets/Ordenes/*'); //obtenemos todos los nombres de los ficheros
        foreach($files as $file)
        {
          if(is_file($file))
          unlink($file); //elimino el fichero
        }
        //Borramos fotos autos
        $autos = glob('assets/images/autos/*'); //obtenemos todos los nombres de los ficheros
        foreach($autos as $file)
        {
          if(is_file($file))
          unlink($file); //elimino el fichero
        }

        //Borramos fotos de entregas
        $entregas = glob('assets/fotos_entregas/*'); //obtenemos todos los nombres de los ficheros
        foreach($entregas as $file)
        {
          if(is_file($file))
          unlink($file); //elimino el fichero
        }
              header('Location:index.php?c=Usuario&a=Dashboard&m=BorroTodo');
      }
      public function FirmarEntrega()
      {
        $o = new pendienteOrden();
        $o->id_orden = $_REQUEST['id_orden'];
        $hoy = date("YmdHis");
        $o->rut_receptor = $_REQUEST['rut'];
        $acepto =  $_REQUEST['acepto'];
        $o->src_imagen = $_REQUEST['hFirma'];
        $this->model_po->entregar($o);
        header('Location:?c=Usuario&a=EntregasConductor&m=Entrego');

      /*  $i = $_FILES['src_imagen']['name'];
        $ext = strtolower(pathinfo($i,PATHINFO_EXTENSION));
        $archivo = $_FILES['src_imagen']['tmp_name'];
        $ruta = "assets/fotos_entregas/";
        $ruta = $ruta.$rut.'-'.$hoy.'.'.$ext;
        $moved=move_uploaded_file($archivo, $ruta);
        $o->src_imagen = $ruta;

        if ($moved)
        {
          $this->model_po->entregar($o);
          header('Location:?c=Usuario&a=EntregasConductor&m=Entrego');
        }
        else
         {
           header('Location:?c=Usuario&a=Entregar&id='.$_REQUEST["id_orden"].'&m=NOEntrego');
        }*/
      }
  }

?>
