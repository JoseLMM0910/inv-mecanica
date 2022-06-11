<?php
Class Material{
   public $id;
   public $descripcion;
   public $especificacion;
   public $medida;
   public $tipo;
   public $datoA;
   public $precio;
   public $cantidad;

   public function __construct(int $id, string $descripcion, string $especificacion,string $medida, string $tipo, int $datoA, int $precio, int $cantidad)
   {
       $this->$id=$id;
       $this->$descripcion=$descripcion;
       $this->$especificacion=$especificacion;
       $this->$medida=$medida;
       $this->$tipo=$tipo;
       $this->$datoA=$datoA;
       $this->$precio=$precio;
       $this->$cantidad=$cantidad;
   }

   public function getId() :int{
       return $this->id;
   }
   public function  getDescripcion(): string{
       return $this->descripcion;
   }
   public function getEspecificacion(): string{
       return $this->especificacion;
   }
   public function getMedida(): string{
     return  $this->medida;
   }
   public function getTipo(): string{
       return $this->tipo;
   }
   public function getDatoA() : string{
       return $this->datoA;
   }
   public function getPrecio() : int{
       return $this->precio;
   }
   public function getCantidad() : int{
       return $this->cantidad;
   }
}
?>