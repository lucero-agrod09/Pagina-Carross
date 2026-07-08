<?php
include("conexion.php");

$id = $_POST['id'];

$sql = "SELECT imagen_nombre FROM carro WHERE id = '$id'";
$resultado = mysqli_query($conexion, $sql);

if ($fila = mysqli_fetch_assoc($resultado)) {

    $imagen = $fila['imagen_nombre'];
    $rutaDestino = "imagenes/" . $imagen;

    if (file_exists($rutaDestino)) {
        unlink($rutaDestino);
    }

    $sqlDelete = "DELETE FROM carro WHERE id = '$id'";
    mysqli_query($conexion, $sqlDelete);

    header("Location: index.php?deleted=1");
    exit();

} else {
    echo "Producto no encontrado";
}
?>
