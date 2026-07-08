<?php
session_start();
include("../conexion.php");

if (isset($_POST['btningresar'])) {

    $Usuario = $_POST['usuario'];
    $Contraseña = hash('sha256', $_POST['contraseña']);

    $sql = $conexion->query(
        "SELECT * FROM persona
         WHERE Usuario='$Usuario' AND Contraseña='$Contraseña'"
    );

    if ($datos = $sql->fetch_object()) {

        $_SESSION["id_per"] = $datos->id_per;
        $_SESSION["Nombre"] = $datos->Nombre;

        header("Location: ../index.php");
        exit();

    } else {

        echo "<script>alert('Usuario o contraseña incorrectos');</script>";

    }

}
?>