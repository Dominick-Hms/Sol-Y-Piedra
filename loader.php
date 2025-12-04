<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="Imagenes/Logo2.png">

    <!-- Fuentes de Google -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <!-- Fuente 'Inter' para el texto normal -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;700&display=swap" rel="stylesheet">
    <!-- Fuente 'Great Vibes' para las opciones del menú -->
    <link href="https://fonts.googleapis.com/css2?family=Great+Vibes&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="Style/loader.css">

    <!-- Librería de Iconos (Font Awesome) -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" xintegrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <title>Sol Y Piedra | Inicio</title>

    <!-- Estilos CSS Incrustados -->
    <style>
       
    </style>
</head>
<body>

<!-- Sección del menú superior -->
<section class="menusuperior">
    <nav class="menu-nav">
        <!-- 1. Enlaces Izquierdos -->
        <div class="menu-links-left">
            <!-- CAMBIO: Apunta a loader.php -->
            <a href="loader.php" class="menu-icon-link" aria-label="Buscar">
                <i class="fa-solid fa-search"></i>
            </a>
            <a href="nosotros.php" class="nav-link">Nosotros</a>
            <!-- CAMBIO: Apunta a loader.php -->
            <a href="loader.php" class="nav-link">Taller</a>
            <a href="productos.php" class="nav-link link-destacado">Productos</a>
        </div>

        <!-- 2. Logo Central -->
        <div class="menu-logo">
            <a href="index.php">
                <img src="Imagenes/Logo.png" alt="Logo Sol Y Piedra" class="logo-img">
            </a>
        </div>

        <!-- 3. Enlaces Derechos -->
        <div class="menu-links-right">
            <a href="galeria.php" class="nav-link link-destacado">Galería</a>
            <!-- CAMBIO: Apunta a loader.php -->
            <a href="loader.php" class="nav-link">Compra</a>
            <a href="contacto.php" class="nav-link">Contacto</a>
            <!-- CAMBIO: Apunta a loader.php -->
            <a href="loader.php" class="menu-icon-link" aria-label="Perfil de usuario">
                <i class="fa-solid fa-user"></i>
            </a>
            <!-- CAMBIO: Apunta a loader.php -->
            <a href="loader.php" class="menu-icon-link" aria-label="Favoritos">
                <i class="fa-solid fa-heart"></i>
            </a>
            <!-- CAMBIO: Apunta a loader.php -->
            <a href="loader.php" class="menu-icon-link" aria-label="Carrito de compras">
                <i class="fa-solid fa-shopping-bag"></i>
            </a>
        </div>
    </nav>
</section>
<!-- Fin de la sección del menú superior -->

<!-- 
  Loader en el primer apartado.
-->
<section class="primerapartado">
     <br>
    <br>
    <br>
    <br>
    <br>
    <div class="illusion"></div>
    <p class="loader-text">La perfección requiere un instante más</p>
    <br>
    <br>
    <br>
    <br>
    <br>
</section>


<!-- Pie de página -->
<section class="piepagina">
    <div class="footer-container">
        
        <!-- Columna 1: Logo y Redes Sociales -->
        <div class="footer-column logo-column">
            <!-- Espacio para el logo (izquierda) -->
            <img src="Imagenes/Logo2.png" alt="Logo Sol Y Piedra" class="footer-logo-img">
            <!-- Este párrafo ahora usa la fuente 'Inter' (por defecto) -->
            <p>Conectando la artesanía con el diseño moderno. Piezas únicas para espacios inolvidables.</p>
            <!-- Redes Sociales (AHORA CON ENLACES EXTERNOS) -->
            <div class="footer-socials">
                <a href="https://www.facebook.com/" target="_blank" rel="noopener noreferrer" aria-label="Facebook"><i class="fa-brands fa-facebook-f"></i></a>
                <a href="https://www.instagram.com/" target="_blank" rel="noopener noreferrer" aria-label="Instagram"><i class="fa-brands fa-instagram"></i></a>
                <a href="https://www.whatsapp.com/" target="_blank" rel="noopener noreferrer" aria-label="WhatsApp"><i class="fa-brands fa-whatsapp"></i></a>
            </div>
        </div>

        <!-- Columna 2: Accesos Directos -->
        <div class="footer-column">
            <h4>Enlaces</h4>
            <ul>
                <li><a href="index.php">Inicio</a></li>
                <li><a href="productos.php">Productos</a></li>
                <li><a href="galeria.php">Galería</a></li>
                <li><a href="taller.php">Taller</a></li>
                <li><a href="contacto.php">Contacto</a></li>
            </ul>
        </div>

        <!-- Columna 3: Contacto -->
        <div class="footer-column">
            <h4>Contacto</h4>
            <!-- Correo electrónico -->
            <p>
                <i class="fa-solid fa-envelope"></i>
                <a href="mailto:info@solypiedra.com" style="color: #cccccc; text-decoration: none;">info@solypiedra.com</a>
            </p>
            <!-- Teléfono / WhatsApp -->
            <p>
                <i class="fa-solid fa-phone"></i>
                +52 123 456 7890
            </p>
            <p>
                <i class="fa-brands fa-whatsapp"></i>
                +52 123 456 7890
            </p>
        </div>

        <!-- Columna 4: Dirección -->
        <div class="footer-column">
            <h4>Dirección</h4>
            <!-- Dirección física -->
            <p>
                <i class="fa-solid fa-location-dot"></i>
                Calle de los Artesanos 123,
                Col. Creativa, C.P. 45678,
                Ciudad, México.
            </p>
            <!-- Mapa -->
            <p>
                <i class="fa-solid fa-map"></i>
                <a href="#" style="color: #DAA520; text-decoration: none; font-weight: 500;">Ver en el mapa</a>
            </p>
        </div>

    </div>
    
    <!-- Barra inferior: Derechos de autor -->
    <div class="footer-bottom-bar">
        &copy; 2024 Sol Y Piedra. Todos los derechos reservados.
    </div>
</section>
<!-- Fin del pie de página -->


</body>
</html>