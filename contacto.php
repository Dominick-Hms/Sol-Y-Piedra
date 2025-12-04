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
<link rel="stylesheet" href="Style/contacto.css">
    
    <!-- Librería de Iconos (Font Awesome) -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" xintegrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <title>Sol Y Piedra | Contacto</title>

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
            <a href="contacto.html" class="nav-link">Contacto</a> <!-- CAMBIADO A .HTML -->
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
        <span class="breadcrumb-actual">Contacto</span>
    </nav>
</section>
<!-- +++ FIN SECCIÓN BREADCRUMB +++ -->

<!-- 
  CONTENIDO PRINCIPAL
-->

<!-- +++ INICIO CABECERA DE CONTACTO (primerapartado) +++ -->
<section class="primerapartado">
    <div class="primerapartado-wrapper"> <!-- MODIFICADO: Se quitó el style= y se añadió la clase -->
        <!-- Título y Subtítulo -->
        <div class="contact-header-container">
            <h2 class="contact-header-title">Bienvenido a Nuestro Taller</h2>
            <p class="contact-header-subtitle">Un espacio para la inspiración, el diseño y la creación de piezas únicas.</p>
        </div>

        <!-- Opciones de Contacto -->
        <div class="contact-options-container">
            <!-- Opción 1: Contacta al Artesano -->
            <div class="contact-option-item">
                <i class="fa-solid fa-user-pen"></i>
                <div class="contact-option-text">
                    <h4>Contacta al Artesano</h4>
                    <p>Si tienes dudas sobre una pieza o un pedido personalizado, nuestro maestro artesano está para ayudarte.</p>
                </div>
            </div>
            
            <!-- Separador Vertical -->
            <div class="contact-option-separator"></div>

            <!-- Opción 2: Llámanos -->
            <div class="contact-option-item">
                <i class="fa-solid fa-phone-volume"></i>
                <div class="contact-option-text">
                    <h4>Llámanos</h4>
                    <p>Para información sobre visitas al taller, grupos o eventos especiales, no dudes en comunicarte.</p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- +++ FIN CABECERA DE CONTACTO +++ -->


<!-- +++ INICIO FORMULARIO DE CONTACTO (segundoapartado) +++ -->
<!-- ID añadido para el ancla del botón -->
<section class="segundoapartado" id="contact-form-section">
    <div class="contact-form-container">
        
        <h2 class="contact-main-title">Ponte en Contacto con Nosotros</h2>
        <p class="contact-main-subtitle">
            Si tienes alguna pregunta o deseas un pedido personalizado, no dudes en enviarnos un mensaje. Te responderemos a la brevedad.
        </p>

        <div class="contact-body-container">
            
            <!-- Columna Izquierda (Info) -->
            <div class="contact-info-box">
                <h4>Conecta con el Taller</h4>
                <p>Nuestras piezas son un espacio sagrado para la purificación del cuerpo y el espíritu, siguiendo las antiguas tradiciones.</p>
                
                <div class="contact-info-item">
                    <i class="fa-solid fa-phone"></i>
                    <div>
                        <strong>Teléfono y WhatsApp</strong>
                        +52 123 456 7890
                    </div>
                </div>
                <div class="contact-info-item">
                    <i class="fa-solid fa-envelope"></i>
                    <div>
                        <strong>Correo Electrónico</strong>
                        info@solypiedra.com
                    </div>
                </div>
                <div class="contact-info-item">
                    <i class="fa-solid fa-location-dot"></i>
                    <div>
                        <strong>Ubicación del Taller</strong>
                        Calle de los Artesanos 123, Col. Creativa, Ciudad, México.
                    </div>
                </div>
            </div>
            
            <!-- Columna Derecha (Formulario) -->
            <div class="contact-form-box">
                <form action="#" method="POST" class="contact-form">
                    
                    <!-- Fila 1: Nombre y Teléfono -->
                    <div class="form-group">
                        <label for="nombre">Nombre</label>
                        <input type="text" id="nombre" name="nombre" required>
                    </div>
                    <div class="form-group">
                        <label for="telefono">Teléfono</label>
                        <input type="tel" id="telefono" name="telefono" required>
                    </div>
                    
                    <!-- Fila 2: Correo -->
                    <div class="form-group full-width">
                        <label for="correo">Correo Electrónico</label>
                        <input type="email" id="correo" name="correo" required>
                    </div>
                    
                    <!-- Fila 3: Producto y Cantidad -->
                    <div class="form-group">
                        <label for="producto">Producto de Interés</label>
                        <input type="text" id="producto" name="producto">
                    </div>
                    <div class="form-group">
                        <label for="cantidad">Cantidad</label>
                        <input type="number" id="cantidad" name="cantidad" min="1" style="width: 100%;">
                    </div>
                    
                    <!-- Fila 4: Color -->
                    <div class="form-group full-width">
                        <label for="color">Color Preferido</label>
                        <input type="text" id="color" name="color">
                    </div>
                    
                    <!-- Fila 5: Comentarios -->
                    <div class="form-group full-width">
                        <label for="comentarios">Comentarios</label>
                        <textarea id="comentarios" name="comentarios"></textarea>
                    </div>
                    
                    <!-- Fila 6: Botones -->
                    <div class="form-button-container">
                        <button type="reset" class="form-button button-reset">Limpiar</button>
                        <button type="submit" class="form-button button-submit">Enviar Mensaje</button>
                    </div>

                </form>
            </div>
            
        </div>
    </div>
</section>
<!-- +++ FIN FORMULARIO DE CONTACTO +++ -->


<!-- +++ INICIO SECCIÓN MAPA (tercerapartado) +++ -->
<section class="tercerapartado">
    <div class="map-container">
        <div class="map-header">
            <h2 class="map-title">¿Cómo Llegar al Taller?</h2>
            <a href="https://maps.app.goo.gl/u2CwDKpaJkYzNCjF9" target="_blank" rel="noopener noreferrer" class="btn-outline"> <!-- Clase de botón unificada -->
                Abrir en Google Maps
            </a>
        </div>
       <div class="map-placeholder" style="width: 100%; height: 400px;">
  <iframe 
    src="https://maps.app.goo.gl/5qdvr8NBGbMcNB7i6"
    width="100%"
    height="100%"
    style="border:0;"
    allowfullscreen=""
    loading="lazy"
    referrerpolicy="no-referrer-when-downgrade">
  </iframe>
</div>
    </div>
</section>
<!-- +++ FIN SECCIÓN MAPA +++ -->


<!-- +++ INICIO SECCIÓN INFO Y FAQ (cuartoapartado) +++ -->
<section class="cuartoapartado">
    
    <!-- NUEVO: Bloque "A tener en cuenta" -->
    <div class="info-container">
        <div class="info-header">
            <div class="info-header-text">
                <h2 class="info-title">A tener en cuenta</h2>
                <p class="info-subtitle">Información importante sobre pedidos y visitas al taller.</p>
            </div>
            <!-- El botón ahora es un ancla a la sección del formulario -->
            <a href="#contact-form-section" class="btn-outline">Contactar ahora</a>
        </div>
        <div class="info-box">
            <p>Todas nuestras piezas son hechas a mano. El tiempo de producción puede variar según la complejidad del pedido.</p>
            <p>Si deseas una pieza personalizada, por favor indícalo en el formulario de contacto. Tu visión es nuestra inspiración.</p>
        </div>
    </div>
    
    <!-- Bloque "Preguntas Frecuentes" -->
    <div class="faq-container">
        <h2 class="faq-title">Preguntas Frecuentes</h2>
        
        <div class="faq-accordion">
            <!-- Pregunta 1 -->
            <div class="faq-item">
                <div class="faq-question">
                    <h5>¿Hacen envíos a todo el país?</h5>
                    <i class="fa-solid fa-chevron-down"></i>
                </div>
                <div class="faq-answer">
                    <p>Sí, realizamos envíos seguros a toda la República Mexicana. El costo y tiempo de entrega varían según tu ubicación. Puedes simular el costo de envío en el carrito de compras.</p>
                </div>
            </div>
            
            <!-- Pregunta 2 -->
            <div class="faq-item">
                <div class="faq-question">
                    <h5>¿Puedo solicitar un diseño personalizado?</h5>
                    <i class="fa-solid fa-chevron-down"></i>
                </div>
                <div class="faq-answer">
                    <p>¡Claro! Nos especializamos en piezas únicas. Ponte en contacto con nosotros a través de este formulario, indicando el producto, medidas, colores o ideas que tengas en mente y con gusto te cotizamos.</p>
                </div>
            </div>
            
            <!-- Pregunta 3 -->
            <div class="faq-item">
                <div class="faq-question">
                    <h5>¿Qué cuidados requieren las piezas?</h5>
                    <i class="fa-solid fa-chevron-down"></i>
                </div>
                <div class="faq-answer">
                    <p>Cada material es diferente. La piedra y el metal suelen requerir limpieza en seco o con un paño ligeramente húmedo, evitando químicos abrasivos. Al momento de tu compra, te daremos las especificaciones exactas para tu pieza.</p>
                </div>
            </div>
            
            <!-- Pregunta 4 -->
            <div class="faq-item">
                <div class="faq-question">
                    <h5>¿Tienen garantía sus productos?</h5>
                    <i class="fa-solid fa-chevron-down"></i>
                </div>
                <div class="faq-answer">
                    <p>Todas nuestras piezas están hechas a mano y cuidamos cada detalle. Ofrecemos garantía por defectos de fabricación. Si tu pieza llega dañada por paquetería, por favor contáctanos en las primeras 24 horas.</p>
                </div>
            </div>

        </div>
    </div>
</section>
<!-- +++ FIN SECCIÓN INFO Y FAQ +++ -->


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
                <li><a href="contacto.php">Contacto</a></li> <!-- CAMBIADO A .HTML -->
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

<!-- Script para el Acordeón de FAQ -->
<script>
    // Seleccionamos todos los items del acordeón
    const faqItems = document.querySelectorAll('.faq-item');

    // Añadimos un "escuchador" de clics a cada item
    faqItems.forEach(item => {
        const question = item.querySelector('.faq-question');
        
        question.addEventListener('click', () => {
            // Comprueba si el item clickeado ya está activo
            const isCurrentlyActive = item.classList.contains('active');

            // Opcional: Cierra todos los demás items
            // faqItems.forEach(otherItem => {
            //     otherItem.classList.remove('active');
            // });

            // Si no estaba activo, ábrelo. Si sí estaba, ciérralo.
            if (!isCurrentlyActive) {
                item.classList.add('active');
            } else {
                item.classList.remove('active');
            }
        });
    });
</script>


</body>
</html>