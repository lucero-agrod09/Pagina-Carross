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
      <title>FORDCAR</title>
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="stylesheet" href="styles.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css" integrity="sha512-2SwdPD6INVrV/lHTZbO2nodKhrnDdJK9/kg2XD1r9uGqPo1cUbujc+IYdlYdEErWNu69gVcYgdxlmVmzTWnetw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    </head>

<body>


    <header id="inicio">

        <nav>
         <h1>FORDCAR</h1>
            <a id="top"></a> 
                
            <div class="buscador">

                <input
                    type="text"id="buscar" placeholder="Buscar productos..." autocomplete="off">

                <ul id="listaResultados" class="resultados"></ul>

            </div>


            <ul>
                <li><a href="index.php">Inicio</a></li>

                    <li class="dropdown">
                    <a href="#servicios">Servicios</a>
                        <ul class="submenu">
                            <li><a href="#productos">Productos</a></li>
                            <li><a href="#ventas">Ventas</a></li>
                        </ul>
                    </li>

                <li><a href="#contacto">Contactanos</a></li>
                <li><a href="#nosotros">Nosotros</a></li>
                <li><a href="agregar_producto.php">Agregar producto</a></li>
                <li><a href="login/cerrar_sesion.php">Cerrar sesión</a></li>

            </ul>
        </nav>

        <main class="bienvenido">
        
            <article class="bienvenido-text">

                <span class="saludo">
                 Bienvenido/a, <?php echo htmlspecialchars($_SESSION["Nombre"]); ?>
                </span>
        
                <h2>BIENVENIDO</h2>
                <p>
                Bienvenido a FORDCAR. Este sistema está enfocado en la administración de
                productos y servicios relacionados con el sector automotriz. Aquí podrás
                explorar vehículos, consultar precios y realizar búsquedas de manera rápida
                y sencilla.
                </p>

            </article>
            <img src="images/portada.jpeg" alt="Carro" class="bienvenido-img">
        </main>
    
    </header>



    <!-- servicios -->
    <section id="servicios" class="servicios">
        <?php
        if (isset($_GET['success'])) {
        echo "<script>
                alert('Producto agregado correctamente');
            </script>";
        }
        ?>

        <?php
        if (isset($_GET['deleted'])) {
        echo "<script>
                alert('Producto eliminado correctamente');
            </script>";
        }
        ?>

        <h2>servicios</h2>
    
        <br><br><br>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Veniam sunt quibusdam ipsam, quae illum cumque, ratione fugit a libero soluta distinctio labore? Suscipit dolor, ducimus modi perspiciatis atque maxime explicabo?
            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nesciunt quo recusandae fugiat, quidem optio molestias itaque numquam laborum! Perferendis deserunt qui illum enim? Iusto libero sunt possimus dicta neque alias.
        </p>
        <br><br><br>

        
    
        <!-- productos --> 
        <p class="subtitulo" id="productos">Productos</p>

        <?php
            $sqlProductos = $conexion->query(
                "SELECT * FROM carro WHERE categoria = 'producto'"
            );
        ?>

        <section class="productos-grid">
            <?php while ($p = $sqlProductos->fetch_object()) { ?>
                <article class="producto-card" id="producto<?php echo $p->id; ?>">
                    <img src="imagenes/<?php echo $p->imagen_nombre; ?>">
                    <h4><?php echo $p->nombre; ?></h4>
                    <p class="precio">$<?php echo $p->precio; ?> MXN</p>
                </article>
            <?php } ?>
        </section>


        <!-- ventas -->
        <br><br><br>
        <p class="subtitulo" id="ventas">Ventas</p>

        <?php
            $sqlVentas = $conexion->query(
            "SELECT * FROM carro WHERE categoria = 'venta'"
            );
        ?>

        <section class="servicios-cards">
            <?php while ($v = $sqlVentas->fetch_object()) { ?>
                <article class="card" id="venta<?php echo $v->id; ?>">
                    <img src="imagenes/<?php echo $v->imagen_nombre; ?>">
                    <h4><?php echo $v->nombre; ?></h4>
                    <p class="precio">$<?php echo $v->precio; ?> MXN</p>
                    <p class="parrafo"><?php echo $v->descripcion; ?></p>
                </article>
            <?php } ?>
        </section>

    </section>


    <!-- contacto -->
    <section id="contacto" class="contacto">
        <h2>CONTACTANOS</h2>

        <section class="contacto-dato">

            <article class="contacto-info">
                <p><strong>LLAMENOS</strong>
                <br>919-133-42-90</p>
                <br>
                <p><strong>UBICACION</strong><br>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Earum, cumque dignissimos. Consequuntur labore voluptas laudantium inventore voluptatibus et dicta veritatis quod odio itaque commodi nisi molestias cumque, animi similique possimus.
                </p>

                <br>
                <p><strong>HORAS DE TRABAJO</strong><br>
                Lun - Vie: 10 am - 8 pm<br>
                Sáb, Dom: Cerrado
                </p>
            </article>

            <form class="contacto-form">
                <h3>CONTACTENOS</h3>
                <input type="text" placeholder="Escribe tu nombre">
                <input type="email" placeholder="Correo">
                <textarea placeholder="Mensaje"></textarea>
                <button type="text">ENVIAR</button>
            </form>
        </section>

    </section>


    <section id="nosotros" class="nosotros">
        <h2>Nosotros</h2>

        <section class="nosotros-contenido">
            <img src="images/nosotros.jpg" alt="Nosotros">

            <p>
                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Voluptate ut quos cupiditate laboriosambr
                consequatur, in possimus expedita aut id, similique vitae tenetur placeat quas doloribus perferendis
                commodi eligendi illum magnam!
            </p>
        </section>

    </section>


    <!-- pie de pagina -->
    <footer class="footer">
        <div class="footer-container">

            <div class="footer-box">
                <h3>¿Necesitas ayuda?</h3>
                <p> 01 234 56 78</p>
                <p> contacto@fordcar.com</p>
                <p> Rayón, Chiapas</p>
            </div>

            <div class="footer-box">
                <h3>Síguenos</h3>
                <a href="https://www.facebook.com" target="_blank">Facebook</a>
                <a href="https://www.instagram.com" target="_blank">Instagram</a>
                <a href="https://x.com" target="_blank">Twitter</a>
            </div>

            <div class="footer-box">
                <h3>FORDCAR</h3>
                <a href="#">Inicio</a>
                <a href="#">Servicios</a>
                <a href="#">Nuestro equipo</a>
                <a href="#">Contacto</a>
            </div>

        </div>

        <div class="footer-bottom">
            2026 FORDCAR / coches
        </div>
    </footer>

    <script>

        const buscar=document.getElementById("buscar");
        const lista=document.getElementById("listaResultados");
        const productos = document.querySelectorAll(".producto-card, .card");

        buscar.addEventListener("keyup",()=>{

            const texto=buscar.value.toLowerCase().trim();
            lista.innerHTML="";

            if(texto===""){lista.style.display="none"; return;}

            let encontrados=0;

            productos.forEach(producto => {

                const nombre = producto.querySelector("h4").textContent.toLowerCase();
                const precio = producto.querySelector(".precio").textContent.replace("$", "") .replace("MXN", "") .trim();
                const esNumero = /^[0-9]+$/.test(texto);

                let coincide = false;

                if (esNumero) {
                    coincide = precio.startsWith(texto);
                } else {
                    coincide = nombre.startsWith(texto);
                }

                if (coincide) {
                    encontrados++;
                    const li = document.createElement("li");
                    const textoMostrar = esNumero? `$${precio} MXN`: nombre.toUpperCase();

                    li.innerHTML = `<a href="#${producto.id}"> ${textoMostrar}</a>`;
                    lista.appendChild(li);
                }

            });

            if(encontrados===0){
                lista.innerHTML="<li><a>No se encontraron resultados</a></li>";
            }

            lista.style.display="block";

        });

        document.addEventListener("click",(e)=>{

            if(!e.target.closest(".buscador")){
                lista.style.display="none";
            }

        });

    </script>

</body>
</html>
