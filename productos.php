<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <link rel="icon" type="image/png" href="Imagenes/Logo2.png">

    <!-- Fuentes de Google --><link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <!-- Fuente 'Inter' para el texto normal --><link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;700&display=swap" rel="stylesheet">
    <!-- Fuente 'Great Vibes' para las opciones del menú --><link href="https://fonts.googleapis.com/css2?family=Great+Vibes&display=swap" rel="stylesheet">
    <!-- 'EB Garamond' para el subtítulo del banner --><link href="https://fonts.googleapis.com/css2?family=EB+Garamond:wght@500&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="Style/productos.css">

    <!-- Librería de Iconos (Font Awesome) --><link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" xintegrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- NUEVO: CSS de Swiper.js (Carrusel) -->
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />

    <title>Sol Y Piedra | Productos</title>

    <!-- Estilos CSS IncrustADOS --><style>
       
    </style>
</head>
<body>

<!-- Sección del menú superior --><section class="menusuperior">
    <nav class="menu-nav">
        <!-- 1. Enlaces Izquierdos --><div class="menu-links-left">
            <a href="loader.php" class="menu-icon-link" aria-label="Buscar">
                <i class="fa-solid fa-search"></i>
            </a>
            <a href="nosotros.php" class="nav-link">Nosotros</a>
            <a href="loader.php" class="nav-link">Taller</a>
            <a href="contacto.php" class="nav-link link-destacado">Productos</a>
        </div>

        <!-- 2. Logo Central --><div class="menu-logo">
            <a href="index.php">
                <img src="Imagenes/Logo.png" alt="Logo Sol Y Piedra" class="logo-img">
            </a>
        </div>

        <!-- 3. Enlaces Derechos --><div class="menu-links-right">
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
<!-- Fin de la sección del menú superior --><!-- +++ INICIO SECCIÓN BREADCRUMB +++ --><section class="breadcrumb-container">
    <nav class="breadcrumb-nav">
        <a href="index.php">Home</a>
        <span class="breadcrumb-separator">/</span>
        <span class="breadcrumb-actual">Productos</span>
    </nav>
</section>
<!-- +++ FIN SECCIÓN BREADCRUMB +++ --><!-- 
  CONTENIDO PRINCIPAL
--><!-- +++ INICIO SECCIÓN primerapartado (NUEVO CONTENIDO) +++ --><section class="primerapartado">
    <div class="features-container">
        <!-- Característica 1: Calidad Artesanal --><div class="feature-item">
            <i class="fa-solid fa-gem"></i>
            <h4>Calidad Artesanal Garantizada</h4>
            <p>Cada pieza es elaborada a mano con materiales premium, asegurando durabilidad y un acabado excepcional que realza tu estilo.</p>
        </div>

        <!-- Característica 2: Diseños Exclusivos --><div class="feature-item">
            <i class="fa-solid fa-palette"></i>
            <h4>Diseños Exclusivos y Únicos</h4>
            <p>Descubre una colección de creaciones originales que no encontrarás en ningún otro lugar, perfectas para expresar tu individualidad.</p>
        </div>

        <!-- Característica 3: Ofertas y Novedades --><div class="feature-item">
            <i class="fa-solid fa-tag"></i>
            <h4>Ofertas Especiales Cada Semana</h4>
            <p>Aprovecha descuentos únicos y sé el primero en conocer nuestras nuevas colecciones y promociones limitadas.</p>
        </div>
    </div>
</section>
<section class="segundoapartado">
    <div class="category-grid-container">
        <h2 class="category-grid-title">Explora Nuestras Categorías</h2>
        <div class="category-grid">
            
            <!-- CAMBIO: href actualizado -->
            <a href="#joyeria" class="category-item">
                <img src="https://placehold.co/100x100/DAA520/ffffff?text=Joyeria" alt="Categoría Joyería y Accesorios" class="category-image">
                <span class="category-name">Joyería y Accesorios</span>
            </a>
            
            <!-- CAMBIO: href actualizado -->
            <a href="#hogar" class="category-item">
                <img src="https://placehold.co/100x100/DAA520/ffffff?text=Hogar" alt="Categoría Hogar y Vida" class="category-image">
                <span class="category-name">Hogar y Vida</span>
            </a>
            
            <!-- CAMBIO: href actualizado -->
            <a href="#ropa" class="category-item">
                <img src="https://placehold.co/100x100/DAA520/ffffff?text=Ropa" alt="Categoría Ropa y Textiles" class="category-image">
                <span class="category-name">Ropa y Textiles</span>
            </a>
            
            <!-- CAMBIO: href actualizado (sin sección aún) -->
            <a href="#" class="category-item">
                <img src="https://placehold.co/100x100/DAA520/ffffff?text=Belleza" alt="Categoría Belleza y Salud" class="category-image">
                <span class="category-name">Belleza y Salud</span>
            </a>
            
            <!-- CAMBIO: href actualizado -->
            <a href="#bolsas" class="category-item">
                <img src="httpshttps://placehold.co/100x100/DAA520/ffffff?text=Bolsas" alt="Categoría Bolsas y Equipaje" class="category-image">
                <span class="category-name">Bolsas y Equipaje</span>
            </a>
            
            <!-- CAMBIO: href actualizado -->
            <a href="#caballeros" class="category-item">
                <img src="https://placehold.co/100x100/DAA520/ffffff?text=Caballeros" alt="Categoría Para Caballeros" class="category-image">
                <span class="category-name">Para Caballeros</span>
            </a>
            
            <!-- CAMBIO: href actualizado (sin sección aún) -->
            <a href="#" class="category-item">
                <img src="https://placehold.co/100x100/DAA520/ffffff?text=Damas" alt="Categoría Para Damas" class="category-image">
                <span class="category-name">Para Damas</span>
            </a>
            
            <!-- CAMBIO: href actualizado (sin sección aún) -->
            <a href="#" class="category-item">
                <img src="https://placehold.co/100x100/DAA520/ffffff?text=Oficina" alt="Categoría Útiles y Oficina" class="category-image">
                <span class="category-name">Útiles y Oficina</span>
            </a>

        </div>
    </div>
</section>
<!-- +++ FIN SECCIÓN segundoapartado +++ --><!-- +++ INICIO SECCIÓN tercerapartado (NUEVO CONTENIDO) +++ --><section class="tercerapartado">
    <div class="product-grid-container">

        <!-- CATEGORÍA 1: JOYERÍA Y ACCESORIOS -->
        <!-- CAMBIO: id añadido -->
        <div class="product-category-section" id="joyeria">
            <h2 class="product-category-title">Joyería y Accesorios</h2>
            <div class="product-grid">
                
                <!-- Producto 1 (CORREGIDO) -->
                <div class="product-card">
                    <span class="product-card-tag">Hecho a mano</span>
                    <img src="Imagenes/Aretes de plata.png" alt="Aretes de Plata" class="product-card-image">
                    <div class="product-card-content">
                        <h3 class="product-card-title">Aretes de Plata</h3>
                        <div class="product-card-rating">
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star-half-stroke"></i>
                            <span class="rating-count">(18)</span>
                        </div>
                        <span class="product-card-price">$550.00</span>
                        <a href="loader.php" class="product-card-button">Ver Producto</a>
                    </div>
                </div>
                
                <!-- Producto 2 (CORREGIDO) -->
                <div class="product-card">
                    <span class="product-card-tag">Hecho a mano</span>
                    <img src="Imagenes/pulseraclasica.png" alt="Pulsera Classic" class="product-card-image">
                    <div class="product-card-content">
                        <h3 class="product-card-title">Pulsera Classic</h3>
                        <div class="product-card-rating">
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star-half-stroke"></i>
                            <span class="rating-count">(12)</span>
                        </div>
                        <span class="product-card-price">$380.00</span>
                        <a href="loader.php" class="product-card-button">Ver Producto</a>
                    </div>
                </div>

                <!-- Producto 3 (CORREGIDO) -->
                <div class="product-card">
                    <span class="product-card-tag">Hecho a mano</span>
                    <img src="Imagenes/Anillo de viaje.png" alt="Anillo de Viaje" class="product-card-image">
                    <div class="product-card-content">
                        <h3 class="product-card-title">Anillo de Viaje</h3>
                        <div class="product-card-rating">
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <span class="rating-count">(20)</span>
                        </div>
                        <span class="product-card-price">$420.00</span>
                        <a href="loader.php" class="product-card-button">Ver Producto</a>
                    </div>
                </div>

                <!-- Producto 4 (CORREGIDO) -->
                <div class="product-card">
                    <span class="product-card-tag">Hecho a mano</span>
                    <img src="Imagenes/Anillo de cobre.png" alt="Anillo de Cobre" class="product-card-image">
                    <div class="product-card-content">
                        <h3 class="product-card-title">Anillo de Cobre</h3>
                        <div class="product-card-rating">
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star-half-stroke"></i>
                            <span class="rating-count">(15)</span>
                        </div>
                        <span class="product-card-price">$450.00</span>
                        <a href="loader.php" class="product-card-button">Ver Producto</a>
                    </div>
                </div>

            </div>
        </div>

        <!-- CATEGORÍA 2: HOGAR Y VIDA -->
        <!-- CAMBIO: id añadido -->
        <div class="product-category-section" id="hogar">
            <h2 class="product-category-title">Hogar y Vida</h2>
            <div class="product-grid">
                
                <!-- Producto 5 (CORREGIDO) -->
                <div class="product-card">
                    <span class="product-card-tag">Hecho a mano</span>
                    <img src="Imagenes/Abanico.png" alt="Abanico Decorativo" class="product-card-image">
                    <div class="product-card-content">
                        <h3 class="product-card-title">Abanico Decorativo</h3>
                        <div class="product-card-rating">
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <span class="rating-count">(9)</span>
                        </div>
                        <span class="product-card-price">$600.00</span>
                        <a href="loader.php" class="product-card-button">Ver Producto</a>
                    </div>
                </div>
                
                <!-- Producto 6 (CORREGIDO) -->
                <div class="product-card">
                    <span class="product-card-tag">Hecho a mano</span>
                    <img src="Imagenes/Adorno de coche.png" alt="Adorno de Coche" class="product-card-image">
                    <div class="product-card-content">
                        <h3 class="product-card-title">Adorno de Coche</h3>
                        <div class="product-card-rating">
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star-half-stroke"></i>
                            <span class="rating-count">(22)</span>
                        </div>
                        <span class="product-card-price">$350.00</span>
                        <a href="loader.php" class="product-card-button">Ver Producto</a>
                    </div>
                </div>

                <!-- Producto 7 (CORREGIDO) -->
                <div class="product-card">
                    <span class="product-card-tag">Hecho a mano</span>
                    <img src="Imagenes/Albun de fotos.png" alt="Álbum de Fotos en Piel" class="product-card-image">
                    <div class="product-card-content">
                        <h3 class="product-card-title">Álbum de Fotos en Piel</h3>
                        <div class="product-card-rating">
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <span class="rating-count">(7)</span>
                        </div>
                        <span class="product-card-price">$800.00</span>
                        <a href="loader.php" class="product-card-button">Ver Producto</a>
                    </div>
                </div>

                <!-- Producto 8 (CORREGIDO) -->
                <div class="product-card">
                    <span class="product-card-tag">Hecho a mano</span>
                    <img src="Imagenes/Cajita de madera decorada.png" alt="Cajita de Madera Decorada" class="product-card-image">
                    <div class="product-card-content">
                        <h3 class="product-card-title">Cajita de Madera Decorada</h3>
                        <div class="product-card-rating">
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star-half-stroke"></i>
                            <span class="rating-count">(11)</span>
                        </div>
                        <span class="product-card-price">$720.00</span>
                        <a href="loader.php" class="product-card-button">Ver Producto</a>
                    </div>
                </div>

            </div>
        </div>
        
        <!-- CATEGORÍA 3: ROPA Y TEXTILES -->
        <!-- CAMBIO: id añadido -->
        <div class="product-category-section" id="ropa">
            <h2 class="product-category-title">Ropa y Textiles</h2>
            <div class="product-grid">
                
                <!-- Producto 9 (CORREGIDO) -->
                <div class="product-card">
                    <span class="product-card-tag">Hecho a mano</span>
                    <img src="Imagenes/Corbata.png" alt="Corbata de Moño Elegante" class="product-card-image">
                    <div class="product-card-content">
                        <h3 class="product-card-title">Corbata de Moño Elegante</h3>
                        <div class="product-card-rating">
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <span class="rating-count">(10)</span>
                        </div>
                        <span class="product-card-price">$480.00</span>
                        <a href="loader.php" class="product-card-button">Ver Producto</a>
                    </div>
                </div>
                
                <!-- Producto 10 (CORREGIDO) -->
                <div class="product-card">
                    <span class="product-card-tag">Hecho a mano</span>
                    <img src="Imagenes/Manta de flores.png" alt="Manta de Flores Bordada" class="product-card-image">
                    <div class="product-card-content">
                        <h3 class="product-card-title">Manta de Flores Bordada</h3>
                        <div class="product-card-rating">
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star-half-stroke"></i>
                            <span class="rating-count">(6)</span>
                        </div>
                        <span class="product-card-price">$1,200.00</span>
                        <a href="loader.php" class="product-card-button">Ver Producto</a>
                    </div>
                </div>

                <!-- Producto 11 (CORREGIDO) -->
                <div class="product-card">
                    <span class="product-card-tag">Hecho a mano</span>
                    <img src="Imagenes/Sombrero.png" alt="Sombrero Artesanal" class="product-card-image">
                    <div class="product-card-content">
                        <h3 class="product-card-title">Sombrero Artesanal</h3>
                        <div class="product-card-rating">
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <span class="rating-count">(14)</span>
                        </div>
                        <span class="product-card-price">$950.00</span>
                        <a href="loader.php" class="product-card-button">Ver Producto</a>
                    </div>
                </div>

                <!-- Producto 12 (CORREGIDO) -->
                <div class="product-card">
                    <span class="product-card-tag">Hecho a mano</span>
                    <img src="Imagenes/Sandalias.png" alt="Sandalias de Cuero" class="product-card-image">
                    <div class="product-card-content">
                        <h3 class="product-card-title">Sandalias de Cuero</h3>
                        <div class="product-card-rating">
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star-half-stroke"></i>
                            <span class="rating-count">(17)</span>
                        </div>
                        <span class="product-card-price">$880.00</span>
                        <a href="loader.php" class="product-card-button">Ver Producto</a>
                    </div>
                </div>

            </div>
        </div>

        <!-- CATEGORÍA 4: BOLSAS Y EQUIPAJE -->
        <!-- CAMBIO: id añadido -->
        <div class="product-category-section" id="bolsas">
            <h2 class="product-category-title">Bolsas y Equipaje</h2>
            <div class="product-grid">
                
                <!-- Producto 13 (CORREGIDO) -->
                <div class="product-card">
                    <span class="product-card-tag">Hecho a mano</span>
                    <img src="Imagenes/Bolsa de compras.png" alt="Bolsa Tejida a Mano" class="product-card-image">
                    <div class="product-card-content">
                        <h3 class="product-card-title">Bolsa Tejida a Mano</h3>
                        <div class="product-card-rating">
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <span class="rating-count">(25)</span>
                        </div>
                        <span class="product-card-price">$750.00</span>
                        <a href="loader.php" class="product-card-button">Ver Producto</a>
                    </div>
                </div>
                
                <!-- Producto 14 (CORREGIDO) -->
                <div class="product-card">
                    <span class="product-card-tag">Hecho a mano</span>
                    <img src="Imagenes/Bolso.png" alt="Bolso de Piel Genuina" class="product-card-image">
                    <div class="product-card-content">
                        <h3 class="product-card-title">Bolso de Piel Genuina</h3>
                        <div class="product-card-rating">
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star-half-stroke"></i>
                            <span class="rating-count">(8)</span>
                        </div>
                        <span class="product-card-price">$1,500.00</span>
                        <a href="loader.php" class="product-card-button">Ver Producto</a>
                    </div>
                </div>

                <!-- Producto 15 (CORREGIDO) -->
                <div class="product-card">
                    <span class="product-card-tag">Hecho a mano</span>
                    <img src="Imagenes/Cartera del mundo.png" alt="Cartera del Mundo" class="product-card-image">
                    <div class="product-card-content">
                        <h3 class="product-card-title">Cartera del Mundo</h3>
                        <div class="product-card-rating">
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <span class="rating-count">(19)</span>
                        </div>
                        <span class="product-card-price">$620.00</span>
                        <a href="loader.php" class="product-card-button">Ver Producto</a>
                    </div>
                </div>

                <!-- Producto 16 (CORREGIDO) -->
                <div class="product-card">
                    <span class="product-card-tag">Hecho a mano</span>
                    <img src="Imagenes/Cartera.png" alt="Cartera de Piel" class="product-card-image">
                    <div class="product-card-content">
                        <h3 class="product-card-title">Cartera de Piel</h3>
                        <div class="product-card-rating">
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star-half-stroke"></i>
                            <span class="rating-count">(16)</span>
                        </div>
                        <span class="product-card-price">$590.00</span>
                        <a href="loader.php" class="product-card-button">Ver Producto</a>
                    </div>
                </div>

            </div>
        </div>

        <!-- CATEGORÍA 5: PARA CABALLEROS -->
        <!-- CAMBIO: id añadido -->
        <div class="product-category-section" id="caballeros">
            <h2 class="product-category-title">Para Caballeros</h2>
            <div class="product-grid">
                
                <!-- Producto 17 (CORREGIDO) -->
                <div class="product-card">
                    <span class="product-card-tag">Hecho a mano</span>
                    <img src="Imagenes/Cinturon de cintura.png" alt="Cinturón de Piel Grabado" class="product-card-image">
                    <div class="product-card-content">
                        <h3 class="product-card-title">Cinturón de Piel Grabado</h3>
                        <div class="product-card-rating">
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <span class="rating-count">(13)</span>
                        </div>
                        <span class="product-card-price">$700.00</span>
                        <a href="loader.php" class="product-card-button">Ver Producto</a>
                    </div>
                </div>
                
                <!-- Producto 18 (CORREGIDO) -->
                <div class="product-card">
                    <span class="product-card-tag">Hecho a mano</span>
                    <img src="Imagenes/Cinturon de cuero.png" alt="Cinturón de Cuero Clásico" class="product-card-image">
                    <div class="product-card-content">
                        <h3 class="product-card-title">Cinturón de Cuero Clásico</h3>
                        <div class="product-card-rating">
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star-half-stroke"></i>
                            <span class="rating-count">(10)</span>
                        </div>
                        <span class="product-card-price">$650.00</span>
                        <a href="loader.php" class="product-card-button">Ver Producto</a>
                    </div>
                </div>

                <!-- Producto 19 (CORREGIDO) -->
                <div class="product-card">
                    <span class="product-card-tag">Hecho a mano</span>
                    <img src="Imagenes/Clip de billetes.png" alt="Clip para Billetes" class="product-card-image">
                    <div class="product-card-content">
                        <h3 class="product-card-title">Clip para Billetes</h3>
                        <div class="product-card-rating">
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <span class="rating-count">(21)</span>
                        </div>
                        <span class="product-card-price">$400.00</span>
                        <a href="loader.php" class="product-card-button">Ver Producto</a>
                    </div>
                </div>

                <!-- Producto 20 (CORREGIDO) -->
                <div class="product-card">
                    <span class="product-card-tag">Hecho a mano</span>
                    <img src="Imagenes/Clip de solapa.png" alt="Clip de Solapa" class="product-card-image">
                    <div class="product-card-content">
                        <h3 class="product-card-title">Clip de Solapa</h3>
                        <div class="product-card-rating">
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star-half-stroke"></i>
                            <span class="rating-count">(5)</span>
                        </div>
                        <span class="product-card-price">$350.00</span>
                        <a href="loader.php" class="product-card-button">Ver Producto</a>
                    </div>
                </div>

            </div>
        </div>


    </div>
</section>
<!-- +++ FIN SECCIÓN tercerapartado +++ --><!-- +++ INICIO SECCIÓN cuartoapartado (NUEVO CONTENIDO) +++ --><section class="cuartoapartado">
    <div class="carousel-container">
        <h2 class="carousel-title">Mas Arte Increible</h2>
        
        <!-- Contenedor del Carrusel -->
        <div class="swiper-container product-carousel">
            <div class="swiper-wrapper">
                
                <!-- Slide 1 (CORREGIDO) -->
                <div class="swiper-slide">
                    <div class="product-card">
                        <span class="product-card-tag">Hecho a mano</span>
                        <img src="Imagenes/Collar de ambar.png" alt="Collar de ambar" class="product-card-image">
                        <div class="product-card-content">
                            <h3 class="product-card-title">Collar de Ambar</h3>
                            <div class="product-card-rating">
                                <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i>
                                <span class="rating-count">(9)</span>
                            </div>
                            <span class="product-card-price">$580.00</span>
                            <a href="loader.php" class="product-card-button">Ver Producto</a>
                        </div>
                    </div>
                </div>
                
                <!-- Slide 2 (CORREGIDO) -->
                <div class="swiper-slide">
                    <div class="product-card">
                        <span class="product-card-tag">Hecho a mano</span>
                        <img src="Imagenes/Collar de cuarzo.png" alt="Collar de cuarzo" class="product-card-image">
                        <div class="product-card-content">
                            <h3 class="product-card-title">Collar de Cuarzo</h3>
                            <div class="product-card-rating">
                                <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star-half-stroke"></i>
                                <span class="rating-count">(14)</span>
                            </div>
                            <span class="product-card-price">$460.00</span>
                            <a href="loader.php" class="product-card-button">Ver Producto</a>
                        </div>
                    </div>
                </div>

                <!-- Slide 3 (CORREGIDO) -->
                <div class="swiper-slide">
                    <div class="product-card">
                        <span class="product-card-tag">Hecho a mano</span>
                        <img src="Imagenes/Collar de madera.png" alt="Collar de madera" class="product-card-image">
                        <div class="product-card-content">
                            <h3 class="product-card-title">Collar de Madera</h3>
                            <div class="product-card-rating">
                                <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star-half-stroke"></i>
                                <span class="rating-count">(7)</span>
                            </div>
                            <span class="product-card-price">$390.00</span>
                            <a href="loader.php" class="product-card-button">Ver Producto</a>
                        </div>
                    </div>
                </div>

                <!-- Slide 4 (CORREGIDO) -->
                <div class="swiper-slide">
                    <div class="product-card">
                        <span class="product-card-tag">Hecho a mano</span>
                        <img src="Imagenes/Collar_Negro.png" alt="Collar Negro" class="product-card-image">
                        <div class="product-card-content">
                            <h3 class="product-card-title">Collar Negro</h3>
                            <div class="product-card-rating">
                                <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i>
                                <span class="rating-count">(11)</span>
                            </div>
                            <span class="product-card-price">$430.00</span>
                            <a href="loader.php" class="product-card-button">Ver Producto</a>
                        </div>
                    </div>
                </div>

                <!-- Slide 5 (CORREGIDO) -->
                <div class="swiper-slide">
                    <div class="product-card">
                        <span class="product-card-tag">Hecho a mano</span>
                        <img src="Imagenes/Correa de reloj.png" alt="Correa de reloj" class="product-card-image">
                        <div class="product-card-content">
                            <h3 class="product-card-title">Correa de Reloj</h3>
                            <div class="product-card-rating">
                                <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star-half-stroke"></i>
                                <span class="rating-count">(16)</span>
                            </div>
                            <span class="product-card-price">$650.00</span>
                            <a href="loader.php" class="product-card-button">Ver Producto</a>
                        </div>
                    </div>
                </div>
                
                <!-- Slide 6 (CORREGIDO) -->
                <div class="swiper-slide">
                    <div class="product-card">
                        <span class="product-card-tag">Hecho a mano</span>
                        <img src="Imagenes/Diadema de flores.png" alt="Diadema de flores" class="product-card-image">
                        <div class="product-card-content">
                            <h3 class="product-card-title">Diadema de Flores</h3>
                            <div class="product-card-rating">
                                <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i>
                                <span class="rating-count">(8)</span>
                            </div>
                            <span class="product-card-price">$480.00</span>
                            <a href="loader.php" class="product-card-button">Ver Producto</a>
                        </div>
                    </div>
                </div>

                <!-- Slide 7 (CORREGIDO) -->
                <div class="swiper-slide">
                    <div class="product-card">
                        <span class="product-card-tag">Hecho a mano</span>
                        <img src="Imagenes/Dije vaca.png" alt="Dije vaca" class="product-card-image">
                        <div class="product-card-content">
                            <h3 class="product-card-title">Dije Vaca</h3>
                            <div class="product-card-rating">
                                <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star-half-stroke"></i>
                                <span class="rating-count">(12)</span>
                            </div>
                            <span class="product-card-price">$320.00</span>
                            <a href="loader.php" class="product-card-button">Ver Producto</a>
                        </div>
                    </div>
                </div>

                <!-- Slide 8 (CORREGIDO) -->
                <div class="swiper-slide">
                    <div class="product-card">
                        <span class="product-card-tag">Hecho a mano</span>
                        <img src="Imagenes/Encendedor.png" alt="Encendedor" class="product-card-image">
                        <div class="product-card-content">
                            <h3 class="product-card-title">Encendedor Forrado</h3>
                            <div class="product-card-rating">
                                <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i>
                                <span class="rating-count">(18)</span>
                            </div>
                            <span class="product-card-price">$400.00</span>
                            <a href="loader.php" class="product-card-button">Ver Producto</a>
                        </div>
                    </div>
                </div>

                <div class="swiper-slide">
                    <div class="product-card">
                        <span class="product-card-tag">Hecho a mano</span>
                        <img src="Imagenes/Florero.png" alt="Florero" class="product-card-image">
                        <div class="product-card-content">
                            <h3 class="product-card-title">Florero de Cerámica</h3>
                            <div class="product-card-rating">
                                <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star-half-stroke"></i>
                                <span class="rating-count">(6)</span>
                            </div>
                            <span class="product-card-price">$750.00</span>
                            <a href="loader.php" class="product-card-button">Ver Producto</a>
                        </div>
                    </div>
                </div>

                <!-- Slide 10 (CORREGIDO) -->
                <div class="swiper-slide">
                    <div class="product-card">
                        <span class="product-card-tag">Hecho a mano</span>
                        <img src="Imagenes/Funda de laptop.png" alt="Funda de laptop" class="product-card-image">
                        <div class="product-card-content">
                            <h3 class="product-card-title">Funda de Laptop</h3>
                            <div class="product-card-rating">
                                <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i>
                                <span class="rating-count">(11)</span>
                            </div>
                            <span class="product-card-price">$900.00</span>
                            <a href="loader.php" class="product-card-button">Ver Producto</a>
                        </div>
                    </div>
                </div>


            </div>
            <!-- Botones de Navegación ELIMINADOS -->
        </div>

        <!-- +++ INICIO SECCIÓN TESTIMONIOS (NUEVO) +++ -->
        <div class="testimonials-section">
            <div class="brand-statement">
                <i class="fa-solid fa-gem brand-icon"></i>
                <h3 class="brand-title">Sol Y Piedra es tu Refugio de Arte</h3>
                <p class="brand-mission">Conectando la artesanía con el diseño moderno. Piezas únicas para espacios inolvidables.</p>
                <br>
                <br>
                <hr>
                <br>
                <br>
                                <h3 class="brand-title">Tips Para Artesanias</h3>
                <p class="brand-mission">Guárdalas en un lugar seco y sin sol directo, ya que la humedad deforma la madera, el papel o la arcilla, y el sol desvanece los colores. Si son piezas barnizadas o pintadas, límpialas con un paño suave y seco (sin agua ni productos químicos) para evitar que pierdan brillo o se desprenda la pintura.</p>
            </div>
<br>
            <h2 class="testimonials-title">Clientes Satisfechos</h2>
            <div class="testimonials-summary">
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star-half-stroke"></i>
                <strong>4.8 / 5.0</strong> - Excelente
                <p>Basado en cientos de opiniones.</p>
            </div>

            <div class="testimonials-grid">
                <!-- Testimonio 1 -->
                <div class="testimonial-card">
                    <div class="testimonial-stars">
                        <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i>
                    </div>
                    <p class="testimonial-text">"Siempre encuentro lo que busco. La calidad de las piezas es increíble y las promociones son muy interesantes. ¡Mi tienda favorita!"</p>
                    <strong class="testimonial-author">Rocío V.</strong>
                    <span class="testimonial-date">07-02-2025</span>
                </div>
                <!-- Testimonio 2 -->
                <div class="testimonial-card">
                    <div class="testimonial-stars">
                        <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i>
                    </div>
                    <p class="testimonial-text">"Mi experiencia siempre ha sido buena. Compro habitualmente y nunca he tenido ningún problema. Lo recomiendo por la autenticidad."</p>
                    <strong class="testimonial-author">Marta Z.</strong>
                    <span class="testimonial-date">25-03-2025</span>
                </div>
                <!-- Testimonio 3 -->
                <div class="testimonial-card">
                    <div class="testimonial-stars">
                        <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i>
                    </div>
                    <p class="testimonial-text">"Se ha convertido en una de mis marcas favoritas. Me encantan sus productos, la rapidez y el cuidado en el envío. ¡Insuperable!"</p>
                    <strong class="testimonial-author">S.Asensio.</strong>
                    <span class="testimonial-date">09-01-2025</span>
                </div>
            </div>
        </div>
        <!-- +++ FIN SECCIÓN TESTIMONIOS +++ -->

    </div>
</section>
<!-- +++ FIN SECCIÓN cuartoapartado +++ --><!-- Pie de página --><section class="piepagina">
    <div class="footer-container">
        
        <!-- Columna 1: Logo y Redes Sociales --><div class="footer-column logo-column">
            <!-- Espacio para el logo (izquierda) --><img src="Imagenes/Logo2.png" alt="Logo Sol Y Piedra" class="footer-logo-img">
            <p>Conectando la artesanía con el diseño moderno. Piezas únicas para espacios inolvidables.</p>
            
            <div class="footer-socials">
                <a href="https://www.facebook.com/" target="_blank" rel="noopener noreferrer" aria-label="Facebook"><i class="fa-brands fa-facebook-f"></i></a>
                <a href="https://www.instagram.com/" target="_blank" rel="noopener noreferrer" aria-label="Instagram"><i class="fa-brands fa-instagram"></i></a>
                <a href="https://www.whatsapp.com/" target="_blank" rel="noopener noreferrer" aria-label="WhatsApp"><i class="fa-brands fa-whatsapp"></i></a>
            </div>
        </div>

        <!-- Columna 2: Accesos Directos --><div class="footer-column">
            <h4>Enlaces</h4>
            <ul>
                  <li><a href="index.php">Inicio</a></li>
                <li><a href="productos.php">Productos</a></li> <!-- CORREGIDO: Apunta a contacto.html -->
                <li><a href="galeria.php">Galería</a></li>
                <li><a href="taller.php">Taller</a></li>
                <li><a href="contacto.php">Contacto</a></li>
            </ul>
        </div>

        <!-- Columna 3: Contacto --><div class="footer-column">
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

        <!-- Columna 4: Dirección --><div class="footer-column">
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
    
    <!-- Barra inferior: Derechos de autor --><div class="footer-bottom-bar">
        &copy; 2024 Sol Y Piedra. Todos los derechos reservados.
    </div>
</section>
<!-- Fin del pie de página --><!-- NUEVO: JS de Swiper.js (Carrusel) --><script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

<!-- NUEVO: Script de inicialización del carrusel --><script>
    document.addEventListener('DOMContentLoaded', function () {
      var swiper = new Swiper('.product-carousel', {
        loop: true, // El carrusel es infinito
        slidesPerView: 1, // 1 slide por defecto (móvil)
        spaceBetween: 20, // Espacio entre slides
        
        /* --- NAVEGACIÓN ELIMINADA --- */
        
        /* --- AUTOPLAY AÑADIDO --- */
        autoplay: {
            delay: 3000, /* 3 segundos por slide */
            disableOnInteraction: false, /* Sigue después del clic */
            pauseOnMouseEnter: true, /* Pausa al pasar el mouse */
        },
        
        // Breakpoints (diseño responsivo)
        breakpoints: {
          // 640px y más
          640: {
            slidesPerView: 2, // 2 slides
            spaceBetween: 20,
          },
          // 900px y más
          900: {
            slidesPerView: 3, // 3 slides
            spaceBetween: 25,
          },
          // 1200px y más
          1200: {
            slidesPerView: 4, // 4 slides
            spaceBetween: 25,
          },
        }
      });
    });
</script>

</body>
</html>