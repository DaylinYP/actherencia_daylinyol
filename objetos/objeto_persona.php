<?php
// REFERENCIA AL ARCHIVO DONDE ESTÁ LA CLASE Persona
include_once('../clases/Persona.php');

// INSTANCIAR LA CLASE = CREAR UN OBJETO
$persona = new Persona();

// ASIGNAR VALORES A LOS ATRIBUTOS
$persona->apellido = $_GET["txtApellido"];
$persona->telefono = $_GET["txtTelefono"];
$persona->direccion = $_GET["txtDireccion"];

// ASIGNAR VALOR AL ATRIBUTO NOMBRE UTILIZANDO MÉTODO PRIVADO
$persona->asignarNombre($_GET["txtNombre"]);

// MOSTRAR LOS DATOS UTILIZANDO MÉTODOS PÚBLICOS DE LA CLASE Persona
echo "<strong><br> Datos: </strong>" . $persona->verDatos(); // Método público que muestra todos los datos
echo "<br> Dirección: ". $persona->direccion;
?>