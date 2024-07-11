<?php

class Ruta
{

  private $conn;
  public $id_auto;
  public $ruta;

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

   public function Insert($r)
   {
     $sql = $this->conn->prepare("INSERT INTO ruta(id_auto,ruta) values(?,?)");
     $sql->execute(array($r->id_auto,$r->ruta));
   }
   public function BorrarTodo()
   {
     $sql = $this->conn->prepare("truncate table ruta");
     $sql->execute();
   }

   public function BorrarEntrega()
   {

       $sql = $this->conn->prepare("truncate table entrega");
       $sql->execute();
   }

}

 ?>
