<?php

class Conductor
{

  private $conn;
  public $id_conductor;
  public $nombre;
  public $fecha;
  public $telefono;
  public $direccion;
  public $iso_nac;
  public $rut;
  public $licencia;
  public $mail;
  public $id_region;
  public $id_comuna;
  public $traslado;
  public $id_auto;
  public $id_auto_leasing;
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
     $sql = $this->conn->prepare("INSERT INTO conductor(id_conductor,nombre,fecha,telefono,direccion,iso_nac,rut,licencia,mail,id_region,id_comuna,traslado,id_auto,id_auto_leasing,src_perfil) VALUES(?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)");
     $sql->execute(array($a->id_conductor,$a->nombre,$a->fecha,$a->telefono,$a->direccion,$a->iso_nac,$a->rut,$a->licencia,$a->mail,$a->id_region,$a->id_comuna,$a->traslado,$a->id_auto,$a->id_auto_leasing,$a->src_perfil));

   }
   public function Listar()
   {
     $sql = $this->conn->prepare("SELECT * from conductor");
     $sql->execute();
     return $sql->fetchAll(PDO::FETCH_OBJ);
   }
   public function ListarConductores()
   {
     $sql = $this->conn->prepare("SELECT * from conductor c join vehiculo v USING(id_auto)");
     $sql->execute();
     return $sql->fetchAll(PDO::FETCH_OBJ);
   }
   public function ListarAsignar($id)
   {
     $sql = $this->conn->prepare("SELECT * from conductor join vehiculo using(id_auto) join ConductorEmpresa using(id_conductor) where utilizacion > 0 and id_empresa = ?");
     $sql->execute(array($id));
     return $sql->fetchAll(PDO::FETCH_OBJ);
   }
     public function ListarID($id)
     {
       $sql = $this->conn->prepare("SELECT * from conductor left join vehiculo using(id_auto) left join tipo_vehiculo using(id_tipo_vehiculo) left join ruta using(id_auto) where id_conductor =?");
       $sql->execute(array($id));
       return $sql->fetch(PDO::FETCH_OBJ);
   }

   public function AgregarAutoConductor($id,$id_conductor)
   {
     $sql = $this->conn->prepare("UPDATE conductor set id_auto = ? where id_conductor = ?");
     $sql->execute(array($id,$id_conductor));
   }

   public function SubirFotoPerfil($img,$id_conductor)
   {
     $sql = $this->conn->prepare("UPDATE conductor set src_perfil = ? where id_conductor = ?");
     $sql->execute(array($img,$id_conductor));
   }

   public function BorrarTodo()
   {
     $sql = $this->conn->prepare("truncate table conductor");
     $sql->execute();
   }

   public function BorrarTodoE()
   {
     $sql = $this->conn->prepare("truncate table ConductorEmpresa");
     $sql->execute();
   }
}


 ?>
