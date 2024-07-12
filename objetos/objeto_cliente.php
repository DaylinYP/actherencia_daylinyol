<?php
//INLCUIR EL ARCHIVO CLIENTE.PHP PARA PODER UTILIZAR EL CÓDIGO QUE CONTIENE
    include_once('../clases/Cliente.php');
//CREAR UN OBJETO DE TIPO CLIENTE = INSTANCIAR LA CLASE
    $cliente = new Cliente();

    $cliente->nit= $_GET["txtNit"];
    $cliente->telefono=$_GET["txtTelefono"];
    $cliente->apellido=$_GET["txtApellido"];
    $cliente->asignarNombre($_GET["txtNombre"]);
    $cliente->direccion=$_GET["txtDireccion"];
    
    echo $cliente->verDatos();
    echo "<strong><br>Dirección: </strong>" 
     .$cliente->direccion;

?>