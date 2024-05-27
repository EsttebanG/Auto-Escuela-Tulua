<!DOCTYPE html>
<html lang="es">

<head>
    <?php include("../../aseets/config/head.php");?>
    <title>Pagos</title>
</head>
<body>
<?php include("assets/config/header.php");?>
    <section class="contenedor-formulario">
        <form action="/Auto-Escuela-Tulua/pages/Usuarios/"  class="formulario">
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
    </section>

        <!-- Botón de WhatsApp -->
        <?php include("../../assets/config/whatsapp.php");?>
        <!-- Botón de WhatsApp fin -->

        <?php include("../../assets/config/footer.php");?>
</body>

</html>