<?php

class Licencia
{

  private $conn;
  public $id_licencia;
  public $id_pais;
  public $fecha_emision;
  public $fecha_vencimiento;
  public $tipo_licencia;



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

   public function insert($l)
   {
     $sql = $this->conn->prepare("INSERT INTO licencia(id_pais,fecha_emision,fecha_vencimiento,tipo_licencia) values(?,?,?,?)");
     $sql->execute(array($l->id_pais,$l->fecha_emision,$l->fecha_vencimiento,$l->tipo_licencia));
   }
   public function Listar()
   {
     $sql = $this->conn->prepare("SELECT * from licencia");
     $sql->execute();
     return $sql->fetchAll(PDO::FETCH_OBJ);
   }
   public function ListarID($id)
   {
     $sql = $this->conn->prepare("SELECT * from licencia WHERE id_licencia = ?");
     $sql->execute($id);
     return $sql->fetch(PDO::FETCH_OBJ);
   }

   public function ListarUltimoID()
   {
     $sql = $this->conn->prepare("SELECT max(id_licencia) id from licencia");
     $sql->execute();
     return $sql->fetch(PDO::FETCH_OBJ);
   }
}

 ?>
