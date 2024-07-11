<?php

class Sucursal
{

  private $conn;
  public $id_sucursal;
  public $id_empresa;
  public $nombre_sucursal;
  public $direccion_sucursal;

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
     $sql = $this->conn->prepare("INSERT INTO sucursal(id_sucursal,id_empresa,nombre_sucursal,direccion_sucursal) values(?,?,?,?)");
     $sql->execute(array($l->id_sucursal,$l->id_empresa,$l->nombre_sucursal,$l->direccion_sucursal));
   }
   public function Listar()
   {
     $sql = $this->conn->prepare("SELECT * from sucursal");
     $sql->execute();
     return $sql->fetchAll(PDO::FETCH_OBJ);
   }
   public function ListarID($id)
   {
     $sql = $this->conn->prepare("SELECT * from sucursal WHERE id_sucursal = ?");
     $sql->execute(array($id));
     return $sql->fetch(PDO::FETCH_OBJ);
   }

   public function ListarEmpresa($id)
   {
     $sql = $this->conn->prepare("SELECT * from sucursal WHERE id_empresa = ?");
     $sql->execute(array($id));
     return $sql->fetchAll(PDO::FETCH_OBJ);
   }

   public function Delete($id)
   {
     $sql = $this->conn->prepare("DELETE from sucursal where id_sucursal = ?");
     $sql->execute(array($id));
   }

   public function BorrarTodo()
   {
     $sql = $this->conn->prepare("truncate table sucursal");
     $sql->execute();
   }
}

 ?>
