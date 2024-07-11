<?php

class Tipo_vehiculo
{

  private $conn;
  public $id_tipo_vehiculo;
  public $descripcion;

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
     $sql = $this->conn->prepare("SELECT * from tipo_vehiculo");
     $sql->execute();
     return $sql->fetchAll(PDO::FETCH_OBJ);
   }

}

 ?>
