<?php
//Heredar se utiliza extends
//Cuando se hace referencia a un atributo de la clase se coloca this.
    include_once('Persona.php');
    class Empleado extends Persona{
        public $codigo=0; //Numero (0)
        public $nivelAcademico=""; //Texto ""
        public $sueldoBase=0;
        private $igss=0;

        public function calcularSueldoLiquido(){
            //IGSS = SUELDO BASE * 4.83/100
            $this->igss = $this->sueldoBase * 4.83/100;
//igss y sueldo liquido no lleva this porque va dentro de la funcion            
            $sueldoLiquido = $this->sueldoBase - $this->igss;

            return $sueldoLiquido;
        }
        public function verDatos(){
//va a regresar a la clase padre y colocar esto  
            return "<strong><br>Código de Empleado: </strong>". $this->codigo
             .parent::verDatos()
            . "<strong><br>Nivel Académico: </strong>". $this->nivelAcademico
            . "<strong><br>Sueldo Base: </strong>". $this->sueldoBase
            . "<strong><br>IGSS: </strong>". $this->igss; 
        }
    }
?>