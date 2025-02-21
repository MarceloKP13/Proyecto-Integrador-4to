<?php session_start(); ?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="../assets/imagenes/info.png">
    <title>HAVCANA - Información</title>
    <link rel="stylesheet" href="../assets/css/infohavcana.css">
    <link rel="stylesheet" href="../assets/css/responsive.css">
</head>
<body>
    <!-- Encabezado -->
    <header>
        <a href="../php/infohavcana.php" class="logo-link">
            <div class="logo">
                <img src="../assets/imagenes/havcanalogo.png" alt="Logo de HAVCANA">
            </div>
            <h1>HAVCANA</h1>
        </a>
        <!-- Menú -->
        <div class="navbar-toggle" onclick="toggleMenu()">
            <div></div>
            <div></div>
            <div></div>
        </div>
        <nav>
            <ul>
                <li><a href="../index.php">INICIO</a></li>
                <li><a href="#">PRODUCTOS</a></li>
                <li><a href="infohavcana.php">SOBRE NOSOTROS</a></li>
                <li><a href="contactos.php">CONTACTOS</a></li>
                <li class="perfil">
                    <img src="../assets/imagenes/perfil.png" alt="Perfil">
                    <?php if (isset($_SESSION['usuario'])): ?>
                        <a href="../php/../index.php"><?php echo $_SESSION['usuario']; ?></a>
                    <?php else: ?>
                        <a href="php/login_registro_global.php">INGRESAR</a>
                    <?php endif; ?>
                </li>
            </ul>
        </nav>
    </header>
    <!-- Botón de contacto -->
    <button class="contacto" onclick="window.location.href='https://wa.me/+593989367154'">
    <img src="../assets/imagenes/whatsapp.png" alt="WhatsApp">
    PEDIDOS | CLICK AQUÍ
</button>

    <script>
        function toggleMenu() {
            const nav = document.querySelector('nav');
            nav.classList.toggle('active');
        }
    </script>
    
    <!-- Banner con imagen -->
    <div class="banner">
        <img src="../assets/imagenes/havcanalogo.png" alt="Banner HAVCANA">
        <div class="cinta">Palabras y Valores</div>
    </div>

    <!-- Valores con imágenes -->
    <div class="valores">
        <div class="valor">
            <img src="../assets/imagenes/humildad.png" alt="Humildad">
            <h2>H - Humildad</h2>
            <p>Es un valor fundamental en HAVCANA, donde el respeto y la empatía son esenciales.</p>
        </div>
        <div class="valor">
            <img src="../assets/imagenes/amabilidad.png" alt="Amabilidad">
            <h2>A - Amabilidad</h2>
            <p>Fomentamos el trato respetuoso y amigable entre las personas y las comunidades.</p>
        </div>
        <div class="valor">
            <img src="../assets/imagenes/vida.png" alt="Vida">
            <h2>V - Vida</h2>
            <p>Valoramos la vida en todas sus formas y trabajamos en armonía con la naturaleza.</p>
        </div>
        <div class="valor">
            <img src="../assets/imagenes/cultura.png" alt="Cultura">
            <h2>C - Cultura</h2>
            <p>Promovemos la riqueza cultural de las comunidades autóctonas.</p>
        </div>
        <div class="valor">
            <img src="../assets/imagenes/ayuda.png" alt="Ayuda">
            <h2>A - Ayuda</h2>
            <p>Creemos en la colaboración y el apoyo mutuo para el desarrollo sostenible.</p>
        </div>
        <div class="valor">
            <img src="../assets/imagenes/naturaleza.png" alt="Naturaleza">
            <h2>N - Naturaleza</h2>
            <p>Protegemos el medioambiente y promovemos prácticas ecológicas.</p>
        </div>
        <div class="valor">
            <img src="../assets/imagenes/avance.png" alt="Avance">
            <h2>A - Avance</h2>
            <p>Innovamos y progresamos con respeto por nuestras raíces.</p>
        </div>
    </div>

    <!-- Separador entre valores y video -->
    <div class="video-section">
        <h2 class="video-title">¡Descubre más sobre nuestro trabajo y valores!</h2>
        <div class="video-container">
            <video controls>
                <source src="../assets/videos/videohavcana.mp4" type="video/mp4">
                Tu navegador no soporta la etiqueta de video.
            </video>
        </div>
    </div>
</body>
</html>
