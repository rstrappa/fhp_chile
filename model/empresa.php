<?php

class Empresa
{

  private $conn;
  public $id_empresa;
  public $nombre_empresa;


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
     $sql = $this->conn->prepare("INSERT INTO empresa(nombre_empresa) values(?)");
     $sql->execute(array($l->nombre_empresa));
   }
   public function Listar()
   {
     $sql = $this->conn->prepare("SELECT * from empresa");
     $sql->execute();
     return $sql->fetchAll(PDO::FETCH_OBJ);
   }
   public function ListarID($id)
   {
     $sql = $this->conn->prepare("SELECT * from empresa WHERE id_empresa = ?");
     $sql->execute($id);
     return $sql->fetch(PDO::FETCH_OBJ);
   }

   public function BorrarTodo()
   {
     $sql = $this->conn->prepare("truncate table empresa");
     $sql->execute();
   }
}

 ?>
