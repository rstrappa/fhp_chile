<?php

class Vehiculo
{

  private $conn;
  public $id_vehiculo;
  public $patente_vehiculo;
  public $patente_rampla;
  public $cantidad;
  public $id_tipo_vehiculo;
  public $anio;
  public $marca;
  public $modelo;
  public $src_imagen;
  public $utilizacion;
  public $capacidad_actual;

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
   public function Insert($v)
   {
     $sql = $this->conn->prepare("INSERT INTO vehiculo(patente_vehiculo,patente_rampla,capacidad,id_tipo_vehiculo,anio,marca,modelo,src_imagen,utilizacion,capacidad_actual) VALUES(?,?,?,?,?,?,?,?,?,?)");
     $sql->execute(array($v->patente_vehiculo,$v->patente_rampla,$v->capacidad,$v->id_tipo_vehiculo,$v->anio,$v->marca,$v->modelo,$v->src_imagen,$v->utilizacion,$v->capacidad_actual));

   }
   public function Listar()
   {
     $sql = $this->conn->prepare("SELECT * from vehiculo");
     $sql->execute();
     return $sql->fetchAll(PDO::FETCH_OBJ);
   }

     public function ListarID($id)
     {
       $sql = $this->conn->prepare("SELECT * from vehiculo where id_vehiculo =?");
       $sql->execute(array($id));
       return $sql->fetch(PDO::FETCH_OBJ);
     }


   public function ListarMax()
   {
     $sql = $this->conn->prepare("SELECT max(id_auto) id from vehiculo");
     $sql->execute();
     return $sql->fetch(PDO::FETCH_OBJ);
 }
 public function BorrarTodo()
 {
   $sql = $this->conn->prepare("TRUNCATE table vehiculo");
   $sql->execute();
 }
}

 ?>
