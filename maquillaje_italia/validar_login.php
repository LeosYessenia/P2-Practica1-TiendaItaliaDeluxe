<?php
include("conexion.php");

$correo = $_POST['correo'];
$password = $_POST['password'];

$sql = "SELECT * FROM usuarios WHERE correo = '$correo' AND password = '$password'";
$resultado = $conexion->query($sql);

if ($resultado->num_rows > 0) {
    echo "<h3>¡Bienvenido de nuevo a Italia Deluxe!</h3>";
    echo "<a href='index.html'>Ir a la Tienda</a>";
} else {
    echo "<h3>Correo o contraseña incorrectos.</h3>";
    echo "<a href='login.html'>Intentar de nuevo</a>";
}

$conexion->close();
?>