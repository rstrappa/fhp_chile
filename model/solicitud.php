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
   public function Listar()
   {
     $sql = $this->conn->prepare("SELECT s.src_perfil src_perfil,s.id_persona id_persona, s.nombre nombre, s.apellido apellido, s.mail mail, r.nombre nombreRegion,
       c.nombre nombreComuna, s.rut rut, s.fecha fecha, s.telefono, s.direccion direccion, s.iso_nac iso_nac, s.estado_documentacion estado_documentacion,
       s.licencia licencia, s.antecedentes antecedentes, s.disponibilidad disponibilidad, s.traslado traslado, s.auto_leasing auto_leasing,
       s.patente_vehiculo patente_vehiculo, s.patente_rampla patente_rampla, tv.descripcion tipo_vehiculo, s.cantidad cantidad, s.marca marca,
       s.modelo modelo, s.fecha_solicitud fecha_solicitud,s.anio anio, s.src_documentos src_documentos, l.tipo_licencia tipo_licencia, l.fecha_emision fecha_emision,
       l.fecha_vencimiento fecha_vencimiento
       from solicitud s left join tipo_vehiculo tv using(id_tipo_vehiculo)
       join regiones r on s.id_region = r.id
       join comunas c on s.id_comuna = c.id
       join licencia l on l.id_licencia = s.licencia");
     $sql->execute();
     return $sql->fetchAll(PDO::FETCH_OBJ);
   }

   public function ListarID($id)
   {
     $sql = $this->conn->prepare("SELECT * from solicitud where id_persona = ?");
     $sql->execute(array($id));
     return $sql->fetch(PDO::FETCH_OBJ);
   }

   public function delete($id)
   {
     $sql = $this->conn->prepare("DELETE from solicitud where id_persona = ?");
     $sql->execute(array($id));

   }
   public function BorrarTodo()
   {
     $sql = $this->conn->prepare("truncate table solicitud");
     $sql->execute();
   }
}

 ?>
