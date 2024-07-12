<?php
//Heredar se utiliza extends
//Cuando se hace referencia a un atributo de la clase se coloca this.
    include_once('Empleado.php');
    class Ventas extends Empleado{
        public $tipoContratacion="";
        public $comisionVenta=0;

        public function calcularSueldoLiquido(){
            $sueldoLiquido = parent::calcularSueldoLiquido()
            + $this->comisionVenta;

            return $sueldoLiquido;
        }
        public function verDatos(){
//va a regresar a la clase padre y colocar esto  
            return parent::verDatos()
            ."<strong><br>Tipo Contratación: </strong>". $this->tipoContratacion
            ."<strong><br>Comisión Venta: </strong>". $this->comisionVenta;
        }
    }
?>