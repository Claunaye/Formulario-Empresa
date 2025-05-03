<?php
$host = "sql107.infinityfree.com";
$usuario = "if0_38889241";
$contrasena = "13GtBoZXiYb";
$base_datos = "if0_38889241_formulario"; // Reemplaza XXX con el nombre exacto

$conexion = new mysqli($host, $usuario, $contrasena, $base_datos);

if ($conexion->connect_error) {
    die("Error de conexión: " . $conexion->connect_error);
}

// Obtener datos del formulario
$nit = $_POST['nit'];
$nombre = $_POST['nombre'];
$representante = $_POST['representante'];
$categoria = $_POST['categoria'];
$telefono = $_POST['telefono'];
$correo = $_POST['correo'];
$direccion = $_POST['direccion'];

// Insertar en la base de datos
$sql = "INSERT INTO empresas (nit, nombre, representante, categoria, telefono, correo, direccion)
VALUES ('$nit', '$nombre', '$representante', '$categoria', '$telefono', '$correo', '$direccion')";

if ($conexion->query($sql) === TRUE) {
    echo "Registro guardado correctamente.";
} else {
    echo "Error: " . $sql . "<br>" . $conexion->error;
}

$conexion->close();
?>
