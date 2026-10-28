<?php
include("conexion.php");

$nombre = $_POST['nombre'];
$correo = $_POST['correo'];
$password = $_POST['password'];

$sql = "INSERT INTO usuarios (nombre, correo, password) VALUES ('$nombre', '$correo', '$password')";

if ($conexion->query($sql) === TRUE) {
    echo "<h3>¡Usuario registrado con éxito!</h3>";
    echo "<a href='login.html'>Iniciar Sesión aquí</a>";
} else {
    echo "Error al registrar: " . $conexion->error;
}

$conexion->close();
?> 