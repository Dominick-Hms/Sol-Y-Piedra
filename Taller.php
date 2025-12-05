<?php
$nombre_taller = "Cerámica Sol Naciente"; // Cambia esto según tu taller
$objetivo = "Inauguración y primera clase con cupo lleno"; // Cambia según objetivo
$fecha_final = "2026-03-15"; // Fecha objetivo de finalización
$fecha_inicio = "2025-12-08"; // Fecha propuesta de inicio
$tecnica_principal = "Alfarería"; // Técnica principal del taller
?>

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
    <link rel="stylesheet" href="Style/taller.css">

    <!-- Librería de Iconos (Font Awesome) -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" xintegrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <title>Sol Y Piedra | Taller </title>
</head>
<body>
    
<section class="menusuperior">
    <nav class="menu-nav">
        <!-- 1. Enlaces Izquierdos -->
        <div class="menu-links-left">
            <a href="loader.php" class="menu-icon-link" aria-label="Buscar">
                <i class="fa-solid fa-search"></i>
            </a>
            <a href="nosotros.php" class="nav-link">Nosotros</a>
            <a href="Taller.php" class="nav-link">Taller</a>
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

<section class="taller-banner">
    <div class="taller-banner-content">
        <h1 class="taller-banner-title"><?php echo $nombre_taller; ?></h1>
        <h2 class="taller-banner-subtitle"><?php echo $tecnica_principal; ?> — <?php echo $objetivo; ?></h2>
    </div>
</section>

<main class="timeline-container">
    <div class="project-meta">
        <div class="meta-item">Nombre: <?php echo $nombre_taller; ?></div>
        <div class="meta-item">Técnica: <?php echo $tecnica_principal; ?></div>
        <div class="meta-item">Inicio: <?php echo $fecha_inicio; ?></div>
        <div class="meta-item">Fin objetivo: <?php echo $fecha_final; ?></div>
    </div>

    <section class="phase">
        <h3>Fase 1 — Conceptualización e Investigación (2 semanas)</h3>
        <table class="timeline">
            <thead>
                <tr><th>Tarea</th><th>Inicio</th><th>Fin</th><th>Responsable</th><th>Estado</th></tr>
            </thead>
            <tbody>
                <tr><td>Definir nombre del taller y objetivo final</td><td>2025-12-08</td><td>2025-12-10</td><td>Tú / Fundador</td><td>Pendiente</td></tr>
                <tr><td>Estudio de mercado local (encuestas, visitas)</td><td>2025-12-11</td><td>2025-12-15</td><td>Tú / Equipo</td><td>Pendiente</td></tr>
                <tr><td>Selección de técnica principal y oferta inicial</td><td>2025-12-16</td><td>2025-12-21</td><td>Tú / Instructor</td><td>Pendiente</td></tr>
                <tr><td>Validación rápida de precios y público objetivo</td><td>2025-12-18</td><td>2025-12-21</td><td>Tú / Equipo</td><td>Pendiente</td></tr>
            </tbody>
        </table>
    </section>

    <section class="phase">
        <h3>Fase 2 — Logística y Espacio (4 semanas)</h3>
        <table class="timeline">
            <thead>
                <tr><th>Tarea</th><th>Inicio</th><th>Fin</th><th>Responsable</th><th>Estado</th></tr>
            </thead>
            <tbody>
                <tr><td>Búsqueda y visitas a locales</td><td>2025-12-22</td><td>2026-01-04</td><td>Tú / Agente</td><td>Pendiente</td></tr>
                <tr><td>Negociación y firma de contrato</td><td>2026-01-05</td><td>2026-01-11</td><td>Tú / Abogado</td><td>Pendiente</td></tr>
                <tr><td>Compra de equipo y herramientas principales</td><td>2026-01-06</td><td>2026-01-15</td><td>Compras / Proveedor</td><td>Pendiente</td></tr>
                <tr><td>Instalación y configuración de estaciones</td><td>2026-01-12</td><td>2026-01-18</td><td>Equipo técnico</td><td>Pendiente</td></tr>
            </tbody>
        </table>
    </section>

    <section class="phase">
        <h3>Fase 3 — Diseño de Oferta y Marketing (5 semanas)</h3>
        <table class="timeline">
            <thead>
                <tr><th>Tarea</th><th>Inicio</th><th>Fin</th><th>Responsable</th><th>Estado</th></tr>
            </thead>
            <tbody>
                <tr><td>Crear currículo para primeros 3 talleres</td><td>2026-01-19</td><td>2026-02-02</td><td>Tú / Instructor</td><td>Pendiente</td></tr>
                <tr><td>Desarrollo de identidad visual (logo, paleta)</td><td>2026-02-03</td><td>2026-02-09</td><td>Diseñador</td><td>Pendiente</td></tr>
                <tr><td>Producción de materiales (flyers, fotos, videos)</td><td>2026-02-10</td><td>2026-02-16</td><td>Diseñador / Fotógrafo</td><td>Pendiente</td></tr>
                <tr><td>Landing page y perfiles en RRSS</td><td>2026-02-10</td><td>2026-02-16</td><td>Web / Marketing</td><td>Pendiente</td></tr>
                <tr><td>Campaña de prelanzamiento</td><td>2026-02-17</td><td>2026-02-22</td><td>Marketing</td><td>Pendiente</td></tr>
            </tbody>
        </table>
    </section>

    <section class="phase">
        <h3>Fase 4 — Operativa y Legal (3 semanas)</h3>
        <table class="timeline">
            <thead>
                <tr><th>Tarea</th><th>Inicio</th><th>Fin</th><th>Responsable</th><th>Estado</th></tr>
            </thead>
            <tbody>
                <tr><td>Obtención de permisos y requisitos legales</td><td>2026-02-23</td><td>2026-03-01</td><td>Tú / Abogado</td><td>Pendiente</td></tr>
                <tr><td>Contratación y capacitación de personal</td><td>2026-03-02</td><td>2026-03-08</td><td>Tú / RRHH</td><td>Pendiente</td></tr>
                <tr><td>Prueba piloto: clase beta y ajustes</td><td>2026-03-09</td><td>2026-03-15</td><td>Instructor / Tú</td><td>Pendiente</td></tr>
                <tr><td>Preparación final e inauguración</td><td>2026-03-13</td><td>2026-03-15</td><td>Tú / Equipo</td><td>Pendiente</td></tr>
            </tbody>
        </table>
    </section>

    <section class="phase">
        <h3>Ideas de Diseño (Branding)</h3>
        <p>Basado en <strong><?php echo $nombre_taller; ?></strong> y la técnica <strong><?php echo $tecnica_principal; ?></strong>, se proponen 3 paletas y estilos de logo:</p>

        <div>
            <strong>Paleta 1 — Calidez artesanal</strong>
            <div class="swatches">
                <div class="swatch" style="background:#A35C2A">#A35C2A</div>
                <div class="swatch" style="background:#E8C69C;color:#222">#E8C69C</div>
                <div class="swatch" style="background:#2F3A2E">#2F3A2E</div>
                <div class="swatch" style="background:#FFFFFF;color:#222;border:1px solid #ccc">#FFFFFF</div>
                <div class="swatch" style="background:#7A4B2A">#7A4B2A</div>
            </div>
        </div>

        <div style="margin-top:10px">
            <strong>Paleta 2 — Tradición y naturalidad</strong>
            <div class="swatches">
                <div class="swatch" style="background:#5A4E3A">#5A4E3A</div>
                <div class="swatch" style="background:#C7B89A;color:#222">#C7B89A</div>
                <div class="swatch" style="background:#F5F2EA;color:#222">#F5F2EA</div>
                <div class="swatch" style="background:#B04C3A">#B04C3A</div>
                <div class="swatch" style="background:#2E5F4F">#2E5F4F</div>
            </div>
        </div>

        <div style="margin-top:10px">
            <strong>Paleta 3 — Moderno y minimal</strong>
            <div class="swatches">
                <div class="swatch" style="background:#0F1724">#0F1724</div>
                <div class="swatch" style="background:#F7F7F7;color:#222">#F7F7F7</div>
                <div class="swatch" style="background:#FF8A4C">#FF8A4C</div>
                <div class="swatch" style="background:#7BD389;color:#222">#7BD389</div>
                <div class="swatch" style="background:#2B7A78">#2B7A78</div>
            </div>
        </div>

        <div class="logo-style">
            <strong>Estilos de logotipo sugeridos</strong>
            <ul>
                <li><strong>Emblema artesanal:</strong> Símbolo circular con icono (torno, aguja) y texto alrededor — ideal para sellos y etiquetas.</li>
                <li><strong>Wordmark con trazo manual:</strong> Nombre con tipografía tipo pincel o caligrafía, con un icono pequeño — cercano y humano.</li>
                <li><strong>Minimal moderno:</strong> Isotipo simple y tipografía sans geométrica — profesional y apto para público joven.</li>
            </ul>
        </div>

        <p class="cta-note">¿Deseas que personalice las paletas y fechas con el nombre o técnica real? Puedo actualizar las variables al inicio del archivo.</p>
    </section>

</main>
</body>
</html>

<!-- Bloque: Línea de Tiempo Vertical (integrado) -->
<section class="vertical-timeline">
    <h2 class="vt-title">Línea de Tiempo — <?php echo $nombre_taller; ?></h2>

    <ul class="vt-list">
        <li class="vt-item">
            <time class="vt-date">Enero 2026</time>
            <div class="vt-content">
                <h3>Fase de Conceptualización</h3>
                <p>Definición final de la marca, los 3 productos/talleres iniciales y el plan de negocio.</p>
            </div>
        </li>

        <li class="vt-item">
            <time class="vt-date">Marzo 2026</time>
            <div class="vt-content">
                <h3>Logística y Equipamiento</h3>
                <p>Firma del contrato, compra/instalación del equipo principal y mobiliario de trabajo.</p>
            </div>
        </li>

        <li class="vt-item">
            <time class="vt-date">Abril 2026</time>
            <div class="vt-content">
                <h3>Branding y Diseño</h3>
                <p>Creación y aprobación del logotipo, identidad visual y ambientación del taller.</p>
            </div>
        </li>

        <li class="vt-item">
            <time class="vt-date">Mayo 2026</time>
            <div class="vt-content">
                <h3>Marketing y Legal</h3>
                <p>Lanzamiento de campaña en redes, inicio de pre-inscripciones y obtención de permisos legales.</p>
            </div>
        </li>

        <li class="vt-item">
            <time class="vt-date">Junio 2026</time>
            <div class="vt-content">
                <h3>Inauguración</h3>
                <p>Inauguración oficial y primera clase/evento promocional con cupo lleno.</p>
            </div>
        </li>
    </ul>
</section>

</body>
</html>