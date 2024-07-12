<?php
    include_once('../clases/Ventas.php');

    $ventas = new Ventas();
    $ventas->tipoContratacion=$_GET["txtTipoContratacion"];
    $ventas->comisionVenta=$_GET["txtComisionVenta"];
    //ATRIBUTO DE LA CLASE EMPLEADO
    $ventas->codigo=$_GET["txtCodigoEmpleado"];
    $ventas->nivelAcademico=$_GET["txtAcademico"];
    $ventas->sueldoBase=$_GET["txtSueldoBase"];

    //ATRIBUTOS QUE HERADA DE LA CLASE PERSONA
    $ventas->asignarNombre($_GET["txtNombre"]);
    $ventas->apellido=$_GET["txtApellido"];
    $ventas->telefono=$_GET["txtTelefono"];
    $ventas->direccion=$_GET["txtDireccion"];
 
    //ATRIBUTOS DE LA CLASE VENTAS
    echo $ventas->verDatos();
    //ATRIBUTOS QUE HERADA DE LA CLASE PERSONA
    $ventas->asignarNombre($_GET["txtNombre"]);
    $ventas->apellido=$_GET["txtApellido"];
    $ventas->telefono=$_GET["txtTelefono"];
    $ventas->direccion=$_GET["txtDireccion"];
     
    echo "<strong><br>Sueldo Líquido: </strong>". $ventas->calcularSueldoLiquido();
    echo "<br>". $ventas->verDatos();
?>