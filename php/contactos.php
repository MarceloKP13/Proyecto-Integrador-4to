<?php session_start(); ?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="../assets/imagenes/contactos.png">
    <title>HAVCANA - Contactos</title>
    <link rel="stylesheet" href="../assets/css/contactos.css">
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
                        <a href="../php/login_registro_global.php">INGRESAR</a>
                    <?php endif; ?>
                </li>
            </ul>
        </nav>
    </header>

    <!-- Contenido principal -->
    <section class="contactos-container">
        <h2>Conoce sobre nuestro personal</h2>

        <div class="tarjeta">
            <div class="imagen_marcos">
                <img src="../assets/imagenes/marcos.png" alt="Foto de empleado">
            </div>
            <div class="informacion">
                <p style="font-size: 22px;" ><strong>FUNDADOR - HAVCANA</strong></p>
                <p><strong>Nombre:</strong> Marcos Jhoel Mariño Pinza.</p>
                <p style="text-align: justify;"><strong>Emprendedor:</strong> Emprendedor dedicado a la creación de productos artesanales utilizando materias primas autóctonas de la Amazonía ecuatoriana y otras regiones, promoviendo la cultura local.</p>
                <p><strong>Correo:</strong> <span class="correo" onclick="copyToClipboard(this)">havacana@hotmail.com</span></p>
                <p><strong>Teléfono:</strong> <span class="telefono" onclick="copyToClipboard(this)">+593 989367154</span></p>

            </div>
            <div class="redes">
                <p>Visita sus redes</p>
                <a href="https://www.tiktok.com/@artsfantasy8" target="_blank"><img src="../assets/imagenes/tiktok.png" alt="Tik Tok"></a>
                <a href="https://www.instagram.com/jhoel.fam8/" target="_blank"><img src="../assets/imagenes/instagram.png" alt="Instagram"></a>
                <a href="https://wa.me/+593989367154" target="_blank">
    <img src="../assets/imagenes/whatsapp2.png" alt="WhatsApp">
</a>

            </div>
        </div>

        <div class="tarjeta">
            <div class="imagen">
                <img src="../assets/imagenes/marce.jpg" alt="Foto de empleado">
            </div>
            <div class="informacion">
                <p style="font-size: 22px;" ><strong>DISEÑADOR WEB</strong></p>
                <p><strong>Nombre:</strong> Kevin Marcelo Torres Pinza.</p>
                <p style="text-align: justify;"><strong>Diseñador:</strong> Estudiante de Desarrollo de Software, el cual implementa sus conocimientos adquiridos de manera reciente para realizar el diseño web de la página de un emprendimiento, con el objetivo de hacerlo visible al público y expandir su alcance.</p>
                <p><strong>Correo:</strong> <span class="correo" onclick="copyToClipboard(this)">kevin.torres85@outlook.es</span></p>
                <p><strong>Teléfono:</strong> <span class="telefono" onclick="copyToClipboard(this)">+593 968403024</span></p>
                </div>
            <div class="redes">
                <p>Visita sus redes</p>
                <a href="https://www.facebook.com/MarceloKP13" target="_blank"><img src="../assets/imagenes/facebook.png" alt="Facebook"></a>
                <a href="https://www.instagram.com/marce_kp13/" target="_blank"><img src="../assets/imagenes/instagram.png" alt="Instagram"></a>
                <a href="https://www.tiktok.com/@marcelokp13" target="_blank"><img src="../assets/imagenes/tiktok.png" alt="Tik Tok"></a>
                <a href="https://github.com/MarceloKP13" target="_blank"><img src="../assets/imagenes/github2.png" alt="Git Hub"></a>
                <a href="https://wa.me/+593968403024" target="_blank">
    <img src="../assets/imagenes/whatsapp2.png" alt="WhatsApp">
</a>

            </div>
        </div>

        <!-- Botón para desplegar el formulario de comentarios -->
        <button class="comentarios-btn" onclick="toggleComentariosForm()">Deja tu comentario</button>

        <!-- Formulario de comentarios (se oculta al principio) -->
        <div id="comentarios-form" style="display:none;">
            <h3>Deja tu comentario</h3>
            <form action="guardar_comentario.php" method="POST">
                <textarea name="comentario" rows="4" placeholder="Escribe tu comentario aquí..." required></textarea><br>
                <label>
                    <input type="checkbox" name="usuario_registrado" <?php if (isset($_SESSION['usuario'])) echo "checked"; ?>>
                    Usar mis datos registrados
                </label><br>
                <div id="usuario-datos" style="display: none;">
                    <input type="hidden" name="nombre" value="<?php echo isset($_SESSION['usuario']) ? $_SESSION['usuario'] : 'Anónimo'; ?>">
                    <p><strong>Nombre:</strong> <?php echo isset($_SESSION['usuario']) ? $_SESSION['usuario'] : 'Anónimo'; ?></p>
                </div>
                <button type="submit">Enviar comentario</button>
            </form>
        </div>

        <!-- Mostrar todos los comentarios -->
        <div id="comentarios">
            <?php
            // Aquí va el código PHP para mostrar los comentarios de la base de datos
            include 'conexion_com.php';
            $comentarios = "SELECT * FROM comentarios ORDER BY fecha DESC";
            $result = mysqli_query($conexion, $comentarios);
            while ($comentario = mysqli_fetch_assoc($result)) {
                echo "<div class='comentario'>";
                echo "<p><strong>" . ($comentario['nombre'] ?: 'Anónimo') . ":</strong> " . $comentario['comentario'] . "</p>";
                echo "<p><em>" . $comentario['fecha'] . "</em></p>";
                echo "</div>";
            }
            ?>
        </div>
    </section>

    <!-- Botón de contacto -->
    <button class="contacto" onclick="window.location.href='https://wa.me/+593989367154'">
    <img src="../assets/imagenes/whatsapp.png" alt="WhatsApp">
    PEDIDOS | CLICK AQUÍ
</button>

<!-- Agregar un div con el número de WhatsApp -->
<p id="whatsapp-number" onclick="copyToClipboard()">+593989367154</p>
    <script>
        function toggleMenu() {
            const nav = document.querySelector('nav');
            nav.classList.toggle('active');
        }
        function toggleComentariosForm() {
            const form = document.getElementById('comentarios-form');
            form.style.display = form.style.display === 'none' ? 'block' : 'none';
        }

        // Mostrar los datos del usuario si está registrado
        document.querySelector('input[name="usuario_registrado"]').addEventListener('change', function() {
            document.getElementById('usuario-datos').style.display = this.checked ? 'block' : 'none';
        });

        // Función para copiar el número al portapapeles
    function copyToClipboard(element) {
        const text = element.innerText;  // Obtener el texto (número de teléfono)
        
        // Crear un elemento temporal para seleccionar y copiar el texto
        const textarea = document.createElement("textarea");
        textarea.value = text;
        document.body.appendChild(textarea);
        textarea.select();
        document.execCommand("copy");
        document.body.removeChild(textarea);

        // Mostrar un mensaje de confirmación
        alert("Número copiado al portapapeles: " + text);
    }
    </script>
</body>
</html>