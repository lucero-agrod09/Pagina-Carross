<?php
session_start();

if (!isset($_SESSION["id_per"])) {
    header("Location: login/login.php");
    exit();
}

include("conexion.php");
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Agregar Producto</title>

    <link rel="stylesheet" href="agregar_producto.css">
</head>

<body>

<div class="contenedor-admin">

    <div class="form_producto">
        <h2>Agregar Producto</h2>

        <form action="guardar_producto.php" method="POST" enctype="multipart/form-data">
            <input type="text" name="nombre" placeholder="Nombre del producto" required>
            <select name="categoria" required>
                <option value="">Selecciona una categoría</option>
                <option value="producto">Producto</option>
                <option value="venta">Venta</option>
            </select>

            <input type="number" name="precio" step="0.01" placeholder="Precio" required>
            <input type="text" name="nombre_imagen" placeholder="Nombre visible de la imagen" required>
            <textarea name="descripcion" placeholder="Descripción"></textarea>
            <input type="file" name="imagen" accept="image/*" required>

            <button type="submit">
                Guardar Producto
            </button>

        </form>

    </div>



    <div class="contenedor-tabla">

            <div class="titulo-tabla">
                <h2>Productos registrados</h2>
                <a href="index.php" class="volver">
                    Regresar
                </a>
            </div>

            <table class="tabla-productos">
                <thead>
                    <tr>
                        <th>Nombre de imagen</th>
                        <th>Nombre</th>
                        <th>Categoría</th>
                        <th>Precio</th>
                        <th>Descripción</th>
                        <th>Acciones</th>
                    </tr>
                </thead>

                <tbody>

                    <?php
                        $sql="SELECT * FROM carro ORDER BY id DESC";
                        $resultado=mysqli_query($conexion,$sql);
                        while($fila=mysqli_fetch_assoc($resultado))
                        {
                    ?>

                    <tr>

                        <td class="nombre-imagen">
                            <?php echo $fila['imagen_nombre']; ?>
                        </td>

                        <td>
                            <?php echo $fila['nombre'];?>
                        </td>

                        <td>
                            <?php echo ucfirst($fila['categoria']);?>
                        </td>

                        <td>
                            $<?php echo number_format($fila['precio'],2);?>
                        </td>

                        <td class="descripcion">
                            <?php echo $fila['descripcion']; ?>
                        </td>

                        <td>
                            <form action="eliminar_producto.php" method="POST" style="display:inline;">

                                <input type="hidden" name="id" value="<?php echo $fila['id'];?>">

                                <button class="btn-eliminar" onclick="return confirm('¿Desea eliminar este producto?')">Eliminar</button>

                            </form>
                        </td>

                    </tr>
                    
                    <?php
                    }
                    ?>

                </tbody>

            </table>

        </div>

    </div>

</body>

</html>