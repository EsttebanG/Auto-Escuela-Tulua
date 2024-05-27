<!DOCTYPE html>
<html lang="es">

<head>
    <?php include("../../assets/config/head.php"); ?>
    <title>Iniciar Sesión - Auto Escuela Tuluá</title>
</head>

<body>
    <?php include("../../assets/config/header.php"); ?>
    <section>
        <form action="/Auto-Escuela-Tulua/pages/Usuarios/" class="formulario">
            <div class="campo">
                <label for="correo">Correo Electrónico:</label>
                <input type="email" id="correo" name="correo" required>
            </div>
            <div class="campo">
                <label for="contrasena">Contraseña:</label>
                <input type="password" id="contrasena" name="contrasena" required>
            </div>
            <div class="enlace-contrasena">
                <a href="#" class="olvidado">¿Olvidaste tu contraseña?</a>
            </div>
            <button type="submit" class="boton">Iniciar Sesión</button>
        </form>
    </section>

        <!-- Botón de WhatsApp -->
        <?php include("../../assets/config/whatsapp.php");?>
        <!-- Botón de WhatsApp fin -->

        <?php include("../../assets/config/footer.php");?>
</body>

</html>