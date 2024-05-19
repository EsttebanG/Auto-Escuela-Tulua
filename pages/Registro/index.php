<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro - Auto Escuela Tuluá</title>
    <link rel="icon" href="/Auto-Escuela-Tulua/img/a.png" type="image/png">
    <link rel="stylesheet" href="/Auto-Escuela-Tulua/assets/css/style.css">
</head>

<body>
    <header>
        <h1>Registro de Usuario</h1>
    </header>

    <section class="contenedor-formulario">
        <form action="/Auto-Escuela-Tulua/usuarios" method="POST" class="formulario">
            <div class="campo">
                <label for="nombre">Nombre:</label>
                <input type="text" id="nombre" name="nombre" required>
            </div>
            <div class="campo">
                <label for="apellido">Apellido:</label>
                <input type="text" id="apellido" name="apellido" required>
            </div>
            <div class="campo">
                <label for="correo">Correo Electrónico:</label>
                <input type="email" id="correo" name="correo" required>
            </div>
            <div class="campo">
                <label for="contrasena">Contraseña:</label>
                <input type="password" id="contrasena" name="contrasena" required>
            </div>
            <div class="campo">
                <label for="confirmar-contrasena">Confirmar Contraseña:</label>
                <input type="password" id="confirmar-contrasena" name="confirmar-contrasena" required>
            </div>
            <button type="submit" class="boton">Registrarse</button>
        </form>
        <nav>
            <ul>
                <li><a class="boton" href="/Auto-Escuela-Tulua/">Volver al Inicio</a></li>
                <li><a class="boton" href="/Auto-Escuela-Tulua/inicio_Seccion">Iniciar Sesión</a></li>
            </ul>
        </nav>
    </section>

    <footer>
        <div class="footer-container">
            <div class="footer-section">
                <h3>Nuestro Respaldo</h3>
                <img id="Iconte" src="/Auto-Escuela-Tulua/img/Iconte.png" alt="Iconte">
                <img id="VigiladoSuperTransporte" src="/Auto-Escuela-Tulua/img/VigiladoSuperTransporte.png" alt="VigiladoSuperTransporte">
                <img id="Transporte" src="/Auto-Escuela-Tulua/img/Transporte.png" alt="Transporte">
            </div>
            <hr>
            <div class="footer-section">
                <p>Horario de admisiones</p>
                <p>Lunes a viernes de 8:00 am a 7:00 pm</p>
                <p>Sábados 8:00 am a 5:00 pm</p>
            </div>
            <hr>
            <div class="footer-section">
                <p>Medios de Pago</p>
                <img id="Visa" src="/Auto-Escuela-Tulua/img/Visa.png" alt="Visa">
                <img id="Mastercard" src="/Auto-Escuela-Tulua/img/Mastercard.png" alt="Mastercard">
                <img id="AmericanExpress" src="/Auto-Escuela-Tulua/img/AmericanExpress.png" alt="AmericanExpress">
                <img id="PSE" src="/Auto-Escuela-Tulua/img/PSE.png" alt="PSE">
            </div>
        </div>
        <div>
            <p>AUTO ESCUELA centro de enseñanza automovilística Sede Calle 63: Calle 63 24-28</p>
            <p>Sede Cedritos: Autopista Norte 146-48 Local 253 Secretaria Educación Resolución 12-0348</p>
            <p>Mintrasporte Resolución 006436 | Vigilados Superintendencia</p>
            <p>Teléfonos: Sede calle 63: (601) 9144499 Sede Cedritos: (601) 9144499</p>
        </div>
    </footer>
</body>

</html>