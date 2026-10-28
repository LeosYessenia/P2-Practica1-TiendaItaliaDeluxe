<?php
$host = "localhost";
$usuario = "root";
$password = "";
$bd = "italia_deluxe";

$conexion = new mysqli($host, $usuario, $password, $bd);

if ($conexion->connect_error) {
    die("Error en la conexión: " . $conexion->connect_error);
}
?>