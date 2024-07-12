<?php
    class Persona{
//ATRIBUTOS SON LAS CARACTERISTICAS
//METODOS SON ACCIONES

        //atributos
        private $nombre=" "; 
        public $apellido=" ";
        //metodos

        //METODO PARA ASIGNAR = METODO SET SETTER
            public function asignarNombre($valor){ //SET ES PARA ELEMENTOS PRIVADOS
                $this->nombre=$valor;
            }
            public function verNombre(){ 
                return $this->nombre;
            }
            public function nombreCompleto(){
                return "<strong><br>Nombre Completo: </strong>". $this->nombre . " " . $this->apellido;
            }
            public function verDatos(){
                return "<strong><br>Nombre Completo: </strong>". $this->nombre . " " . $this->apellido . "<strong><br>Teléfono: </strong>". $this->telefono;
            }
    }
?>

