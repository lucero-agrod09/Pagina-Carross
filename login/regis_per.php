<?php
session_start();
include("../conexion.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $Nombre = $_POST['nombre'];
    $Apellido_pa = $_POST['apellido_pa'];
    $Apellido_ma = $_POST['apellido_ma'];
    $Usuario = $_POST['usuario'];
    $Correo = $_POST['correo'];
    $Direccion = $_POST['direccion'];
    $Telefono = $_POST['telefono'];
    $Contraseña = hash('sha256', $_POST['contraseña']);

    $sql = "INSERT INTO persona
    (Nombre, Apellido_pa, Apellido_ma, Usuario, Correo, Direccion, Telefono, Contraseña)
    VALUES
    ('$Nombre','$Apellido_pa','$Apellido_ma','$Usuario','$Correo','$Direccion','$Telefono','$Contraseña')";

    if ($conexion->query($sql)) {
        echo "<script>alert('Registro exitoso');</script>";
        echo "<script>window.location='login.php';</script>";
    } else {
        echo "Error: " . $conexion->error;
    }

    $conexion->close();
}
?>