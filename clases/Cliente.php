<?php
include_once('Persona.php');
class Cliente extends Persona{
    public $nit=" ";
    public function verDatos(){
        return "<strong><br> Nit: </strong>"
        . $this->nit . parent:: verDatos();
    }
}
?>