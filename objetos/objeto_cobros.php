<?php
    include_once('../clases/Cobros.php');
    //CREAR UN OBJETO
    $cobros = new Cobros();

    
    //ATRIBUTOS HEREDADOS DE PERSONA
    $cobros->asignarNombre($_POST['txtNombre']);
    $cobros->apellido=$_POST['txtApellido'];
    $cobros->telefono=$_POST['txtTelefono'];
    $cobros->direccion=$_POST['txtDireccion'];

    //ATRIBUTOS HEREDADOS DE EMPLEADO
    $cobros->codigo=$_POST['txtCodigoEmpleado'];
    $cobros->sueldoBase=$_POST['txtSueldoBase'];
    $cobros->nivelAcademico=$_POST['txtAcademico'];

    //ATRIBUTOS DE LA CLASE
    $cobros->bonificacion=$_POST['txtBonificacion'];
    $cobros->comisionCobros=$_POST['txtComisionCobros'];


    echo "<strong><br>Sueldo Líquido: </strong>"
    . $cobros->calcularSueldoLiquido();
    echo "<strong><br>Comisión Cobros: </strong>"
    . $cobros->comisionCobros;
    echo $cobros->verDatos();
?>