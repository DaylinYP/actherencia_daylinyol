<?php
    include_once('Administracion.php');
    class Cobros extends Administracion{
        public $comisionCobros=0;

        public function calcularSueldoLiquido(){
            return parent::calcularSueldoLiquido() + $this->bonificacion;
        }
        public function verDatos(){
            return parent::verDatos()
            . "<strong><br>Comision Cobros: </strong>"
            .$this->comisionCobros;
        }
    }

?>