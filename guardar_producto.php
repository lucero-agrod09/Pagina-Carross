<?php
include("conexion.php");
$nombre        = $_POST['nombre'];
$categoria     = $_POST['categoria'];
$precio        = $_POST['precio'];
$descripcion   = $_POST['descripcion'];
$nombreImagen  = $_POST['nombre_imagen'];

$imagen        = $_FILES['imagen'];
$nombreArchivo = $imagen['name'];
$tmpImagen     = $imagen['tmp_name'];

$extension = pathinfo($nombreArchivo, PATHINFO_EXTENSION);
$nombreFinal = time() . "_" . $nombreImagen . "." . $extension;
$rutaDestino = "imagenes/" . $nombreFinal;
if (move_uploaded_file($tmpImagen, $rutaDestino)) {


 $sql = "INSERT INTO carro (nombre, categoria, precio, descripcion, imagen_nombre) VALUES ('$nombre', '$categoria', '$precio', '$descripcion', '$nombreFinal')";

    if (mysqli_query($conexion, $sql)) {
    header("Location: agregar_producto.php?success=1");
    exit();

        
    } else {
        echo "Error al guardar en la BD";
    }

} else {
    echo "Error al subir la imagen";
}
?>
