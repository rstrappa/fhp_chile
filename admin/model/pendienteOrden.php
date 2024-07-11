<?php

class PendienteOrden
{

  private $conn;
  public $id_orden;
  public $empresa;
  public $direccion;
  public $comuna;
  public $cliente;
  public $rut_cliente;
  public $sku;
  public $marca;
  public $codigo;
  public $valor;
  public $peso;
  public $dimencion;
  public $fecha_entrega;
  public $src_imagen;

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
     $sql = $this->conn->prepare("INSERT INTO pendienteOrden(empresa, direccion, comuna, cliente, rut_cliente, sku, marca, codigo, valor, peso, dimencion,fecha_entrega) VALUES(?,?,?,?,?,?,?,?,?,?,?,?)");
     $sql->execute(array($a->empresa, $a->direccion, $a->comuna, $a->cliente, $a->rut_cliente, $a->sku, $a->marca, $a->codigo, $a->valor, $a->peso, $a->dimencion,$a->fecha_entrega));

   }
   public function Listar()
   {
     $sql = $this->conn->prepare("SELECT * from pendienteOrden join empresa on pendienteOrden.empresa = empresa.id_empresa  where entregado = 0");
     $sql->execute();
     return $sql->fetchAll(PDO::FETCH_OBJ);
   }

   public function ListarID($id)
   {
     $sql = $this->conn->prepare("SELECT * from pendienteOrden where id_orden = ?");
     $sql->execute(array($id));
     return $sql->fetch(PDO::FETCH_OBJ);
   }
   public function ListarEntregas($id)
   {
     $sql = $this->conn->prepare("SELECT pendienteOrden.id_orden id_orden, sku, pendienteOrden.direccion direccion, id_auto, pendienteOrden.comuna comuna, pendienteOrden.entregado entregado from entrega join vehiculo using(id_auto) join pendienteOrden using(id_orden) join conductor using(id_auto) where id_conductor =?");
     $sql->execute(array($id));
     return $sql->fetch(PDO::FETCH_OBJ);
   }

   public function delete($id)
   {
     $sql = $this->conn->prepare("DELETE from pendienteOrden where id_orden = ?");
     $sql->execute(array($id));
   }
   public function entregar($a)
   {
     $sql = $this->conn->prepare("UPDATE pendienteOrden set entregado = 2, src_imagen =? where id_orden = ? ");
     $sql->execute(array($a->src_imagen, $a->id_orden));

   }
   public function BorrarTodo()
   {
     $sql = $this->conn->prepare("truncate table pendienteOrden");
     $sql->execute();
   }
}

 ?>
