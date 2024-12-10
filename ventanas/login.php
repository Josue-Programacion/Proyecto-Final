<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar Sesión - Celular Market</title>
    <link rel="stylesheet" href="../modelo/EstilosProyecto.css">
    <script defer src="../controlador/ProyectoJs.js"></script>
</head>
<body>
    <header>
        <nav class="navbar">
            <div class="logo">
                <img src="../Imagenes/celularmarket_logo.png" alt="Logo Celular Market">
                <span>CELULAR MARKET</span>
            </div>
            <ul class="nav-links">
                <li><a href="Index.php">INICIO</a></li>
                <li><a href="#">CONTÁCTANOS</a></li>
                <li class="cart"><a href="#">$0,00 🛒</a></li>
                <li class="user"><a href="registro.php">👤</a></li>
            </ul>
        </nav>
    </header>

    <section class="login-section">
        <h2>Inicia sesión en tu cuenta</h2>
        <form class="login-form" id="loginForm">
            <label for="email">Correo electrónico:</label>
            <input type="email" id="email" name="email" required>

            <label for="password">Contraseña:</label>
            <input type="password" id="password" name="password" required>

            <button type="submit">Iniciar sesión</button>
            <p class="register-link">¿No tienes una cuenta? <a href="registro.php">Regístrate aquí</a></p>
        </form>
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
