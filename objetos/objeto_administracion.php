<?php
    include_once('../clases/Administracion.php');
    //CREAR UN OBJETO
    $admin = new Administracion(); 

    //ATRIBUTOS HEREDADOS DE PERSONA.PHP
    $admin->asignarNombre($_POST['txtNombre']);
    $admin->apellido=$_POST['txtApellido'];
    $admin->telefono=$_POST['txtTelefono'];
    $admin->direccion=$_POST['txtDireccion'];

    //ATRIBUTOS HEREDADOS DE EMPLEADO.PHP
    $admin->codigo=$_POST['txtCodigoEmpleado'];
    $admin->sueldoBase=$_POST['txtSueldoBase'];
    $admin->nivelAcademico=$_POST['txtAcademico'];

    //ATRIBUTOS DE LA CLASE
    $admin->bonificacion=$_POST['txtBonificacion'];

    echo "<strong><br>Sueldo Líquido: </strong>"
    . $admin->calcularSueldoLiquido();
    echo $admin->verDatos();


?>