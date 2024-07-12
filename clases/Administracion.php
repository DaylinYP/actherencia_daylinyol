<?php
    include_once('Empleado.php');
    class Administracion extends Empleado{
        public $bonificacion=0;

        public function calcularSueldoLiquido(){
            return parent::calcularSueldoLiquido() + $this->bonificacion;
        }
        public function verDatos(){
            return parent::verDatos()
            . "<strong><br>Bonificación: </strong>"
            . $this->bonificacion;
        }
    }
?>