<?php
//INLCUIR EL ARCHIVO EMPLEADO.PHP PARA PODER UTILIZAR EL CODIGO QUE CONTIENE
    include_once('../clases/Empleado.php');
 
//CREAR UN OBJETO DE TIPO EMPLEADO = INSTANCIAR LA CLASE
    $empleado = new Empleado();

    //ATRIBUTO DE LA CLASE EMPLEADO
    $empleado->codigo=$_GET["txtCodigoEmpleado"];
    $empleado->nivelAcademico=$_GET["txtAcademico"];
    $empleado->sueldoBase=$_GET["txtSueldoBase"];

    //ATRIBUTOS QUE HERADA DE LA CLASE PERSONA
    $empleado->asignarNombre($_GET["txtNombre"]);
    $empleado->apellido=$_GET["txtApellido"];
    $empleado->telefono=$_GET["txtTelefono"];
    $empleado->direccion=$_GET["txtDireccion"];
 
    
    echo "<strong>Sueldo Liquido: </strong>". $empleado->calcularSueldoLiquido();
    echo $empleado->verDatos();

?>