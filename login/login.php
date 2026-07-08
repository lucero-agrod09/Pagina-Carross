<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <script src="https://kit.fontawesome.com/a2dd6045c4.js" crossorigin="anonymous"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar Sesión</title>
    <link rel="stylesheet" href="login.css">

    <?php
        include("../conexion.php");
        include("controlador.php");
    ?>
</head>
<body>

<section>
    <div class="contenedor">
        <div class="formulario">

            <h2>Iniciar Sesión</h2>

            <form method="post" action="">

                <div class="input-contenedor">
                    <i class="fa-solid fa-user"></i>
                    <input id="usuario" type="text" class="input" name="usuario"  required>
                    <label>Usuario</label>
                </div>

                <div class="input-contenedor">
                    <i class="fa-solid fa-lock"></i>
                    <input id="input" type="password" class="input" name="contraseña"  required>
                    <label>Contraseña</label>
                </div>

                <div class="olvidar">
                    <label>
                        <input type="checkbox"> Recordar
                    </label>
                    <a href="#">Olvidé la contraseña</a>
                </div>

                <button type="submit" name="btningresar">Acceder</button>

                <div class="registrar">
                    <p>No tengo cuenta
                        <a class="link" href="regis.php">Crear una</a>
                    </p>
                </div>

            </form>

        </div>
    </div>
</section>

</body>
</html>
