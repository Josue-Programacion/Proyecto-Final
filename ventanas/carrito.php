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

    <section class="cart-section">
    <div class="cart-container">
        <h2>Tu Carrito de Compras</h2>
        <table class="cart-table">
            <thead>
                <tr>
                    <th>Producto</th>
                    <th>Precio</th>
                    <th>Cantidad</th>
                    <th>Total</th>
                    <th>Eliminar</th>
                </tr>
            </thead>
            <tbody>
                <!-- Producto 1 -->
                <tr>
                    <td class="product-name">Smartphone XYZ</td>
                    <td class="product-price">$300.00</td>
                    <td class="product-quantity">
                        <input type="number" value="1" min="1" max="10" />
                    </td>
                    <td class="product-total">$300.00</td>
                    <td class="product-remove">
                        <button class="remove-btn">Eliminar</button>
                    </td>
                </tr>
                <!-- Producto 2 -->
                <tr>
                    <td class="product-name">Auriculares Bluetooth</td>
                    <td class="product-price">$50.00</td>
                    <td class="product-quantity">
                        <input type="number" value="2" min="1" max="10" />
                    </td>
                    <td class="product-total">$100.00</td>
                    <td class="product-remove">
                        <button class="remove-btn">Eliminar</button>
                    </td>
                </tr>
            </tbody>
        </table>
        <div class="cart-summary">
            <div class="cart-total">
                <h3>Total: <span>$400.00</span></h3>
            </div>
            <button class="checkout-btn">Proceder al pago</button>
        </div>
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
