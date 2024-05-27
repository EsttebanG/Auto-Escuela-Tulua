<!DOCTYPE html>
<html lang="es">

<head>
    <?php include("../../assets/config/head.php"); ?>
    <title>Auto Escuela Tuluá - Usuarios</title>
</head>

<body>
    <?php include("assets/config/header.php"); ?>
    <section>
        <h2>Información de Usuario</h2>
        <div class="user-info">
            <div class="user-profile">
                <img id="user-image" src="/Auto-Escuela-Tulua/img/default-profile.png" alt="Foto de Perfil">
                <input type="file" id="file-input" accept="image/*">
                <label for="file-input" class="boton">Cargar Foto</label>
                <h3 id="user-name">Nombre de Usuario</h3>
            </div>
            <div class="user-details">
                <p>Correo Electrónico: <span id="user-email">ejemplo@correo.com</span></p>
                <p>Fecha de Registro: <span id="registration-date">28 de abril de 2024</span></p>
                <!-- Aquí puedes agregar más detalles del usuario -->
            </div>
        </div>
    </section>
        <!-- Botón de WhatsApp -->
        <?php include("../../assets/config/whatsapp.php");?>
        <!-- Botón de WhatsApp fin -->

        <?php include("../../assets/config/footer.php");?>

    <script>
        // Obtener el nombre de la URL
        var urlParams = new URLSearchParams(window.location.search);
        var nombreUsuario = urlParams.get('nombre');

        // Mostrar el nombre en el elemento HTML correspondiente
        document.getElementById("user-name").textContent = nombreUsuario;
    </script>
</body>

</html>