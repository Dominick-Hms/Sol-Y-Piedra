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

    <link rel="stylesheet" href="Style/index.css">

    <!-- Librería de Iconos (Font Awesome) -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" xintegrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <title>Sol Y Piedra | Inicio</title>

    <!-- Estilos CSS IncrustADOS -->
    <style>
       

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

<!-- 
  Banner Principal
-->
<section class="primerapartado">
    
    <!-- Video de fondo -->
    <video class="hero-video" autoplay loop muted playsinline>
        <!-- IMPORTANTE: Reemplaza este video de ejemplo por el tuyo. Ej: "videos/mi-video.mp4" -->
        <source src="Imagenes/Video.mp4" type="video/mp4">
        Tu navegador no soporta videos HTML5.
    </video>
    
    <!-- Contenido del Banner (esto no se tocó) -->
    <div class="hero-content">
        <h2>Artesanía Hecha a Mano</h2>
        <h1>Diseños Únicos para Ti</h1>
        <a href="productos.php" class="hero-button">Ver Productos</a>
    </div>
</section>
<!-- Fin del Banner -->

<!-- 
  Presentación del Taller
-->
<section class="segundoapartado">
    <div class="container-apartado">
        
        <!-- Columna de Texto -->
        <div class="col-texto">
            <h2 class="titulo-seccion">Presentación del taller</h2>
            <blockquote class="texto-identidad">
                <p>“En Sol y Piedra transformamos materiales nobles en piezas únicas que celebran la armonía entre lo natural y lo hecho a mano.”</p>
            </blockquote>
        </div>
        
        <!-- Columna de Imagen (Ahora con Card 3D) -->
        <div class="col-imagen">
            <div class="card">
                <!-- Icono SVG (de la imagen del usuario) -->
                <!-- Este SVG es un icono genérico de "imagen" -->
<img src="Imagenes/1index.jpg" alt="Descripción de la imagen" width="300" height="250">
                
                <!-- Contenido Oculto -->
                <div class="card__content">
                    <p class="card__title">Nuestro Taller</p>
                    <p class="card__description">Un vistazo a nuestro espacio creativo, donde la artesanía y el diseño se encuentran.</p>
                </div>
            </div>
        </div>
        
    </div>
</section>
<!-- Fin de Presentación del Taller -->

<!-- 
  Proceso Creativo y Filosofía
-->
<section class="tercerapartado">
    <div class="container-apartado">
        
        <!-- 1. Título de la sección -->
        <h2 class="titulo-seccion">Proceso Creativo y Filosofía</h2>

        <!-- 2. Bloque del Proceso (4 pasos) -->
        <div class="proceso-container">
            
            <div class="proceso-paso">
                <div class="proceso-icon">
                    <i class="fa-solid fa-lightbulb"></i>
                </div>
                <h4>Inspiración</h4>
            </div>
            
            <div class="proceso-paso">
                <div class="proceso-icon">
                    <i class="fa-solid fa-gem"></i>
                </div>
                <h4>Selección</h4>
            </div>
            
            <div class="proceso-paso">
                <div class="proceso-icon">
                    <i class="fa-solid fa-hammer"></i>
                </div>
                <h4>Creación</h4>
            </div>
            
            <div class="proceso-paso">
                <div class="proceso-icon">
                    <i class="fa-solid fa-star"></i>
                </div>
                <h4>Acabado</h4>
            </div>
            
        </div>

        <!-- 3. Frase (Cita) -->
        <blockquote class="texto-identidad">
            <p>“Cada pieza nace de un equilibrio entre técnica, paciencia y respeto por la materia.”</p>
        </blockquote>

    </div>
</section>
<!-- Fin del Proceso Creativo -->

<!-- 
  Nuestras Creaciones (Categorías)
-->
<section class="cuartoapartado">
    <div class="container-apartado">
        
        <!-- 1. Título de la sección -->
        <h2 class="titulo-seccion">Nuestras Creaciones</h2>
        
        <!-- 2. Contenedor de Tarjetas -->
        <div class="creaciones-container">
            
            <!-- Tarjeta 1 -->
            <div class="creacion-card">
                <div class="card-imagen-placeholder">
<img src="Imagenes/Caba.jpg" alt="Descripción de la imagen" width="420" height="250" border-radius="10px">
                </div>
                <div class="card-contenido">
                    <h4>Accesorios para caballero</h4>
                    <p>Diseños únicos y materiales nobles que definen un estilo auténtico y varonil.</p>
                </div>
            </div>
            
            <!-- Tarjeta 2 -->
            <div class="creacion-card">
                <div class="card-imagen-placeholder">
<img src="Imagenes/Dama.jpg" alt="Descripción de la imagen" width="420" height="250" border-radius="10px">
                </div>
                <div class="card-contenido">
                    <h4>Para dama</h4>
                    <p>Piezas elegantes que capturan la esencia de la feminidad con un toque artesanal.</p>
                </div>
            </div>
            
            <!-- Tarjeta 3 -->
            <div class="creacion-card">
                <div class="card-imagen-placeholder">
<img src="Imagenes/Masa.jpg" alt="Descripción de la imagen" width="420" height="250" border-radius="10px">
                </div>
                <div class="card-contenido">
                    <h4>Más artesanías</h4>
                    <p>Explora nuestra colección de objetos decorativos y piezas especiales hechas a mano.</p>

                </div>
            </div>

        </div> <!-- Fin de .creaciones-container -->

        <!-- Banner CTA (Call to Action) -->
        <div class="cta-banner">
            <h3>¿Tienes una idea en mente?</h3>
            <p>Nos encanta crear piezas personalizadas. Cuéntanos qué necesitas y lo haremos realidad.</p>
            <a href="contacto.php" class="cta-button">Hablemos</a>
        </div>

    </div> <!-- Fin de .container-apartado -->
</section>
<!-- Fin de Nuestras Creaciones -->


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
                <li><a href="productos.php">Productos</a></li>
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