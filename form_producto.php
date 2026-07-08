<div id="formProducto" class="form_producto" style="display:none;">

    <form action="guardar_producto.php" method="POST" enctype="multipart/form-data">

        <input type="text" name="nombre" placeholder="Nombre del producto" required>

        <select name="categoria" required>
            <option value="">Selecciona categoría</option>
            <option value="producto">Producto</option>
            <option value="venta">Venta</option>
        </select>

        <input type="number" name="precio" step="0.01" placeholder="Precio" required>

        <textarea name="descripcion" placeholder="Descripción"></textarea>

        <input type="text" name="nombre_imagen" placeholder="Nombre visible de la imagen" required>

        <input type="file" name="imagen" accept="image/*" required>

        <button type="submit">Guardar</button>

    </form>
</div>
