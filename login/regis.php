<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <script src="https://kit.fontawesome.com/a2dd6045c4.js" crossorigin="anonymous"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrar</title>
    <link rel="stylesheet" href="regis.css">
</head>
<body>

<section>
    <div class="contenedor">
        <div class="formulario">

            <h2>Regístrate</h2>

            <?php
                include("../conexion.php");
                include("regis_per.php");
            ?>

            <form method="post" action="">

                <div class="input-contenedor">
                    <i class="fa-solid fa-user"></i>
                    <input type="text" name="nombre" required>
                    <label>Nombre</label>
                </div>

                <div class="input-contenedor">
                    <i class="fa-solid fa-user"></i>
                    <input type="text" name="apellido_pa" required>
                    <label>Apellido paterno</label>
                </div>

                <div class="input-contenedor">
                    <i class="fa-solid fa-user"></i>
                    <input type="text" name="apellido_ma" required>
                    <label>Apellido materno</label>
                </div>

                <div class="input-contenedor">
                    <i class="fa-solid fa-user"></i>
                    <input type="text" name="usuario" required>
                    <label>Usuario</label>
                </div>

                <div class="input-contenedor">
                    <i class="fa-solid fa-envelope"></i>
                    <input type="email" name="correo" required>
                    <label>Correo electrónico</label>
                </div>

                <div class="input-contenedor">
                        <i class="fa-solid fa-address-book icon"></i>
                        <input type="text" name="direccion" required>
                        <label for="direccion">Direccion</label>
                    </div>

                <div class="input-contenedor">
                    <i class="fa-solid fa-phone"></i>
                    <input type="text" name="telefono" required>
                    <label>Teléfono</label>
                </div>

                <div class="input-contenedor">
                    <i class="fa-solid fa-lock"></i>
                    <input type="password" name="contraseña" required>
                    <label>Contraseña</label>
                </div>

                <button type="submit" name="btnregistrar">Registrar</button>

                <div class="iniciosesion">
                    <p>¿Ya tienes cuenta?
                        <a class="link" href="login.php">Iniciar sesión</a>
                    </p>
                </div>

            </form>
        </div>
    </div>
</section>

</body>
</html>
