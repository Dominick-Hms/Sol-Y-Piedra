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
    <!-- 'EB Garamond' para el subtítulo del banner -->
    <link href="https://fonts.googleapis.com/css2?family=EB+Garamond:wght@500&display=swap" rel="stylesheet">

        <link rel="stylesheet" href="Style/galeria.css">

    <!-- Librería de Iconos (Font Awesome) -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" xintegrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <title>Sol Y Piedra | Nosotros</title> <!-- Título CAMBIADO -->

    <!-- Estilos CSS IncrustADOS -->
    <style>
        /* --- Reseteo Básico y Fuente --- */
       
    </style>
</head>
<body>

<!-- Sección del menú superior -->
<section class="menusuperior">
    <nav class="menu-nav">
        <!-- 1. Enlaces Izquierdos -->
        <div class="menu-links-left">
            <a href="loader.php" class="menu-icon-link" aria-label="Buscar">
                <i class="fa-solid fa-search"></i>
            </a>
            <a href="nosotros.php" class="nav-link">Nosotros</a>
            <a href="loader.php" class="nav-link">Taller</a>
            <a href="productos.php" class="nav-link link-destacado">Productos</a> <!-- CORREGIDO: Apunta a contacto.html -->
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
            <a href="loader.php" class="nav-link">Compra</a>
            <a href="contacto.php" class="nav-link">Contacto</a>
            <a href="loader.php" class="menu-icon-link" aria-label="Perfil de usuario">
                <i class="fa-solid fa-user"></i>
            </a>
            <a href="loader.php" class="menu-icon-link" aria-label="Favoritos">
                <i class="fa-solid fa-heart"></i>
            </a>
            <a href="loader.php" class="menu-icon-link" aria-label="Carrito de compras">
                <i class="fa-solid fa-shopping-bag"></i>
            </a>
        </div>
    </nav>
</section>
<!-- Fin de la sección del menú superior -->

<!-- +++ INICIO SECCIÓN BREADCRUMB +++ -->
<section class="breadcrumb-container">
    <nav class="breadcrumb-nav">
        <a href="index.php">Home</a>
        <span class="breadcrumb-separator">/</span>
        <span class="breadcrumb-actual">Galería</span> <!-- TEXTO CAMBIADO -->
    </nav>
</section>
<!-- +++ FIN SECCIÓN BREADCRUMB +++ -->

<!-- 
  CONTENIDO PRINCIPAL
-->
<!-- +++ INICIO SECCIÓN primerapartado (NUEVO CONTENIDO) +++ -->
<section class="primerapartado">
    <div class="gallery-container">
            
        <!-- 1. Título y Subtítulo -->
        <div class="gallery-header">
            <h2>Galería de Artesanías</h2>
            <p>Descubre nuestras piezas hechas a mano con dedicación y arte. Cada creación es única y refleja la esencia de nuestras tradiciones.</p>
        </div>

        <!-- 2. Rejilla de la Galería -->
        <div class="gallery-grid">
            
            <!-- Card 1 -->
            <div class="gallery-card">
                <img src="Imagenes/artesanias1.jpg" alt="Pulsera de hilo">
                <div class="gallery-card-content">
                    <h3>Pulsera de hilo</h3>
                    <p>Hecha a mano con hilos de colores y diseños únicos.</p>
                </div>
            </div>

            <!-- Card 2 -->
            <div class="gallery-card">
                <img src="Imagenes/artesanias2.jpg" alt="Collar artesanal">
                <div class="gallery-card-content">
                    <h3>Collar artesanal</h3>
                    <p>Inspirado en la naturaleza y las raíces culturales de nuestra región.</p>
                </div>
            </div>
            
            <!-- Card 3 -->
            <div class="gallery-card">
                <img src="Imagenes/artesanias3.jpg" alt="Aretes tejidos">
                <div class="gallery-card-content">
                    <h3>Aretes tejidos</h3>
                    <p>Elaborados con técnicas tradicionales de tejido y bordado.</p>
                </div>
            </div>
            
            <!-- Card 4 -->
            <div class="gallery-card">
                <img src="Imagenes/artesanias4.jpg" alt="Bolsa artesanal">
                <div class="gallery-card-content">
                    <h3>Bolsa artesanal</h3>
                    <p>Tejida con fibras naturales y colores vibrantes.</p>
                </div>
            </div>
            
            <!-- Card 5 -->
            <div class="gallery-card">
                <img src="Imagenes/artesanias5.jpg" alt="Tapete decorativo">
                <div class="gallery-card-content">
                    <h3>Tapete decorativo</h3>
                    <p>Hecho en telar con patrones tradicionales y colores cálidos.</p>
                </div>
            </div>
            
            <!-- Card 6 -->
            <div class="gallery-card">
                <img src="Imagenes/artesanias6.jpg" alt="Figura artesanal">
                <div class="gallery-card-content">
                    <h3>Figura artesanal</h3>
                    <p>Esculpida y pintada a mano con gran detalle artístico.</p>
                </div>
            </div>

        </div> <!-- .gallery-grid -->
    </div> <!-- .gallery-container -->
</section>



<!-- +++ INICIO SECCIÓN cuartoapartado (VACÍA) +++ -->
<section class="cuartoapartado"></section>
<!-- Fin del contenido principal -->

<!-- Pie de página -->
<section class="piepagina">
    <div class="footer-container">
        
        <!-- Columna 1: Logo y Redes Sociales -->
        <div class="footer-column logo-column">
            <!-- Espacio para el logo (izquierda) -->
            <img src="Imagenes/Logo2.png" alt="Logo Sol Y Piedra" class="footer-logo-img">
            <p>Conectando la artesanía con el diseño moderno. Piezas únicas para espacios inolvidables.</p>
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
                <li><a href="productos.php">Productos</a></li> <!-- CORREGIDO: Apunta a contacto.html -->
                <li><a href="galeria.php">Galería</a></li>
                <li><a href="taller.php">Taller</a></li>
                <li><a href="contacto.php">Contacto</a></li>
            </ul>
        </div>

        <!-- Columna 3: Contacto -->
        <div class="footer-column">
            <h4>Contacto</h4>
            <p>
                <i class="fa-solid fa-envelope"></i>
                <a href="mailto:info@solypiedra.com" style="color: #cccccc; text-decoration: none;">info@solypiedra.com</a>
            </p>
            <p>
                <i class="fa-solid fa-phone"></i>
                +52 123 456 7890
            </p>
            <p>
                <i class="fa-brands fa-whatsapp"></i>
                +52 123 456 7890
            </V>
        </div>

        <!-- Columna 4: Dirección -->
        <div class="footer-column">
            <h4>Dirección</h4>
            <p>
                <i class="fa-solid fa-location-dot"></i>
                Calle de los Artesanos 123,
                Col. Creativa, C.P. 45678,
                Ciudad, México.
            </p>
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