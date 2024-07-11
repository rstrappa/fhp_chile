<?php

class Solicitud
{

  private $conn;
  public $id_persona;
  public $nombre;
  public $apellido;
  public $fecha;
  public $telefono;
  public $direccion;
  public $iso_nac;
  public $rut;
  public $estado_documentacion;
  public $licencia;
  public $antecedentes;
  public $disponibilidad;
  public $mail;
  public $id_region;
  public $id_comuna;
  public $traslado;
  public $auto_leasing;
  public $patente_vehiculo;
  public $patente_rampla;
  public $id_tipo_vehiculo;
  public $cantidad;
  public $marca;
  public $modelo;
  public $anio;
  public $src_documentos;
  public $fecha_solicitud;
  public $src_perfil;
  public function __CONSTRUCT()
   {
       try
       {
         $this->conn = Database::Conn();
       }
       catch(Exception $e)
       {
         die($e->getMessage());
       }
   }
   public function Insert($a)
   {
     $sql = $this->conn->prepare("INSERT INTO solicitud(nombre, apellido, fecha, telefono, direccion, iso_nac, rut, estado_documentacion, licencia, antecedentes, disponibilidad, mail, id_region, id_comuna, traslado, auto_leasing, patente_vehiculo, patente_rampla, id_tipo_vehiculo, cantidad, marca, modelo, anio, src_documentos,fecha_solicitud) VALUES(?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)");
     $sql->execute(array($a->nombre, $a->apellido, $a->fecha, $a->telefono, $a->direccion, $a->iso_nac, $a->rut, $a->estado_documentacion, $a->licencia, $a->antecedentes, $a->disponibilidad, $a->mail, $a->id_region, $a->id_comuna, $a->traslado, $a->auto_leasing, $a->patente_vehiculo, $a->patente_rampla, $a->id_tipo_vehiculo, $a->cantidad, $a->marca, $a->modelo, $a->anio, $a->src_documentos,
     $a->fecha_solicitud));
   }

   public function Insert2($a)
   {
     $sql = $this->conn->prepare("INSERT INTO solicitud(nombre, apellido, fecha, telefono, direccion, iso_nac, rut, estado_documentacion, licencia, antecedentes, disponibilidad, mail, id_region, id_comuna, traslado, auto_leasing, fehca_solicitud) VALUES(?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)");
     $sql->execute(array($a->nombre, $a->apellido, $a->fecha, $a->telefono, $a->direccion, $a->iso_nac, $a->rut, $a->estado_documentacion, $a->licencia, $a->antecedentes, $a->disponibilidad, $a->mail, $a->id_region, $a->id_comuna, $a->traslado, $a->auto_leasing,$a->fecha_solicitud));
   }

   public function ActualizarSolicitud($p)
   {
     $sql = $this->conn->prepare("UPDATE solicitud set estado_documentacion =?,  antecedentes =?,  disponibilidad =?,  traslado = ?,patente_vehiculo =?,patente_rampla=?,  src_documentos =?,src_perfil =? where id_persona = ?");
     $sql->execute(array($p->estado_documentacion, $p->antecedentes,$p->disponibilidad,$p->traslado,$p->patente_vehiculo,$p->patente_rampla,$p->src_documentos,$p->src_perfil,$p->id_persona));

   }

   public function Listar()
   {
     $sql = $this->conn->prepare("SELECT * from solicitud");
     $sql->execute();
     return $sql->fetchAll(PDO::FETCH_OBJ);
   }
   public function ListarUltimoID()
   {
     $sql = $this->conn->prepare("SELECT max(id_persona) id from solicitud");
     $sql->execute();
     return $sql->fetch(PDO::FETCH_OBJ);
   }
}

 ?>
