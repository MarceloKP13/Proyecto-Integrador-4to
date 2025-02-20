<?php
session_start();
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="assets/imagenes/havcanalogo.png">
    <title>HAVCANA</title>
    <link rel="stylesheet" href="assets/css/estilo-pagina.css">
    <link rel="stylesheet" href="assets/css/responsive.css">
    <link rel="stylesheet" href="assets/css/grid.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css">
</head>
<body>
    <!-- Header con Logo y Barra de Navegación -->
    <header>
        <a href="php/infohavcana.php" class="logo-link">
            <div class="logo">
                <img src="assets/imagenes/havcanalogo.png" alt="Logo de HAVCANA">
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
                <li><a href="#">INICIO</a></li>
                <li><a href="#">PRODUCTOS</a></li>
                <li><a href="php/infohavcana.php">SOBRE NOSOTROS</a></li>
                <li><a href="#">CONTACTOS</a></li>
                <li>
                    <class class="perfil">
                        <img src="assets/imagenes/perfil.png" alt="Perfil">
                        <?php if (isset($_SESSION['usuario'])): ?>
                            <a href="php/../index.php"><?php echo $_SESSION['usuario']; ?></a>
                        <?php else: ?>
                            <a href="php/login_registro_global.php">INGRESAR</a>
                        <?php endif; ?>
                    </class>
                </li>
            </ul>
        </nav>
    </header> 
    <!-- Botón de contacto-->
    <button class="contacto" onclick="window.location.href='pedidos.php'">
        <img src="assets/imagenes/whatsapp.png" alt="WhatsApp">
        PEDIDOS  |  CLICK AQUÍ
    </button>
    <script>
        // Función para activar/desactivar el menú hamburguesa
        function toggleMenu() {
            const nav = document.querySelector('nav');
            nav.classList.toggle('active');
        }
    </script>

    <div class="contenedor-grid">
        <!-- Sección de categorías -->
         <aside class="categorias">
            <h2>Productos</h2>
            <ul>
                <li><strong>Vinos</strong>
                    <ul>
                        <li>- Sabores</li>
                        <li>- Tamaño</li>
                        
                    </ul>
                </li>
                <li><strong>Chocolates</strong>
                    <ul>
                        <li>- Ingredientes</li>
                        <li>- Tamaños</li>
                    </ul>
                </li>
                <li><strong>Jabones</strong>
                    <ul>
                        <li>- Fragancias</li>
                    </ul>
                </li>
            </ul>
         </aside>
        <!-- Sección de productos -->
         <section class="catalogo-imagen">
        </section>
        
        <!-- Sección de contacto -->
        <section class="pro-ordenados">
            <span>Total de productos: (0)</span>
            <class class="seleccion">
            <label for="ordenar">Ordenar por:</label>
            <select id="ordenar">
                <option value=""disabled selected>Seleccionar...</option>
                <option value="a-z">De la A - Z</option>
                <option value="z-a">De la Z - A</option>
                <option value="barato-caro">Más barato - más caro</option>
                <option value="caro-barato">Más caro - más barato</option>
            </select>
        </class>
        </section>
    </div>
    <a href="php/cerrar_sesion.php">Cerrar Sesión</a>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</body>
</html>