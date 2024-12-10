<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Celular Market</title>
    <link rel="stylesheet" href="../modelo/estilosProyecto.css">
    <script defer src="../controlador/ProyectoJs.js"></script>
</head>
<body>
    <header>
        <nav class="navbar">
            <div class="logo">
            <a href="Index.php">
                <img src="../Imagenes/celularmarket_logo.png" alt="Logo Celular Market">
                </a><br>
                <span>CELULAR MARKET</span>
            </div>
            <ul class="nav-links">
                <li><a href="productos.php">PRODUCTOS</a></li>
                <li><a href="contacto.html">CONTÁCTANOS</a></li>
                <li class="cart"><a href="carrito.php">$0,00 🛒</a></li>
                <li class="user"><a href="registro.php">👤</a></li>
            </ul>
        </nav>
    </header>


    <section class="hero">
        <div class="hero-content">
            <h1>Los mejores descuentos en tecnología</h1>
            <p>Hasta 25% de Descuento en Productos Seleccionados</p>
            <div class="hero-buttons">
                <a href="productos.html" class="btn btn-primary">COMPRAR AHORA</a>
                <a href="productos.html" class="btn btn-secondary">EXPLORAR</a>
            </div>
        </div>
    </section>

 
    <section class="carousel">
        <div class="carousel-images" id="carouselImages">
            <a href="productos.html"><img src="../Imagenes/apple_logo.svg" alt="Apple"></a>
            <a href="productos.html"><img src="../Imagenes/infinix_logo.png" alt="Honor"></a>
            <a href="productos.html"><img src="../Imagenes/honor_logo.png" alt="Infinix"></a>
            <a href="productos.html"><img src="../Imagenes/tecno_logo.jpg" alt="Tecno"></a>
        </div>
    </section>

    <section class="highlighted-products">
        <div class="highlighted-product">
            <img src="../Imagenes/estiloAudifonos.webp" alt="Audífonos">
            <div class="info">
                <h3>20% EN AUDÍFONOS</h3>
                <p>Aprovecha nuestros descuentos en una amplia variedad de auriculares de las mejores marcas.</p>
                <a href="productos.html" class="btn btn-primary">VER MÁS</a>
            </div>
        </div>
        <div class="highlighted-product">
            <img src="../Imagenes/iphoneAzul.jpeg" alt="iPhone">
            <div class="info">
                <h3>Últimos Modelos de iPhone</h3>
                <p>Descubre la última generación de iPhones. Innovación, diseño y tecnología al alcance de tu mano.</p>
                <a href="productos.html" class="btn btn-primary">EXPLORAR</a>
            </div>
        </div>
        <div class="highlighted-product">
            <img src="../Imagenes/iphoneCeleste.webp" alt="Estilo de Vida">
            <div class="info">
                <h3>Tecnología al Estilo de Vida</h3>
                <p>Transforma tu día a día con los dispositivos inteligentes más innovadores del mercado.</p>
                <a href="productos.html" class="btn btn-primary">DESCUBRE MÁS</a>
            </div>
        </div>
    </section>


    <section class="services-info">
        <div class="service">
            <img src="../Iconos/envio.webp" alt="Envío Nacional">
            <h3>Envío Nacional</h3>
            <p>Recibe tus productos en cualquier parte del Ecuador con nuestro servicio de envío rápido y seguro.</p>
        </div>
        <div class="service">
            <img src="../Iconos/calidad.webp" alt="Calidad Garantizada">
            <h3>Calidad Garantizada</h3>
            <p>Ofrecemos productos de las marcas más confiables, asegurando la máxima calidad en cada compra.</p>
        </div>
        <div class="service">
            <img src="../Iconos/ofertas.webp" alt="Ofertas Exclusivas">
            <h3>Ofertas Exclusivas</h3>
            <p>Disfruta de descuentos únicos en los últimos dispositivos tecnológicos y accesorios.</p>
        </div>
        <div class="service">
            <img src="../Iconos/pago_seguro.webp" alt="Pagos Seguros">
            <h3>Pagos Seguros</h3>
            <p>Compra con confianza. Todos nuestros métodos de pago están cifrados para tu seguridad.</p>
        </div>
    </section>


    <footer>
        <div class="footer-content">
            <div class="logo-footer">
                <img src="../Imagenes/celularmarket_logo.png" alt="Logo Celular Market">
                <p>LO MEJOR EN TECNOLOGÍA</p>
            </div>
            <div class="footer-links">
                <h3>CELULARES</h3>
                <ul>
                    <li><a href="#">Samsung</a></li>
                    <li><a href="#">Apple</a></li>
                    <li><a href="#">Xiaomi</a></li>
                    <li><a href="#">Honor</a></li>
                    <li><a href="#">Infinix</a></li>
                </ul>
            </div>
            <div class="footer-links">
                <h3>ACCESORIOS</h3>
                <ul>
                    <li><a href="#">Relojes</a></li>
                    <li><a href="#">Parlantes</a></li>
                    <li><a href="#">Audífonos</a></li>
                    <li><a href="#">Cables</a></li>
                    <li><a href="#">Cargador</a></li>
                </ul>
            </div>
            <div class="subscribe">
                <h3>Subscribe</h3>
                <input type="email" placeholder="Your email address...">
                <button>SUBSCRIBE</button>
            </div>
        </div>
        <div class="social-media">
            <a href="#">Facebook</a>
            <a href="#">YouTube</a>
            <a href="#">Twitter</a>
            <a href="#">Instagram</a>
            <a href="#">Google</a>
        </div>
        <p>&copy; 2024 CELULAR MARKET. Powered by CELULAR MARKET.</p>
    </footer>
</body>
</html>
