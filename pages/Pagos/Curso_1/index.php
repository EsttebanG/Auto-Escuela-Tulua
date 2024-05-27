<!DOCTYPE html>
<html lang="es">

<head>
    <?php include("../../aseets/config/head.php");?>
    <title>Pagos_Curso_1</title>
</head>
<body>
<?php include("assets/config/header.php");?>
    <p>
    <h2>Pago del Curso - Automóvil y/o camioneta particular</h2>
    </p>
    <section>
        <div class="producto">
            <div class="footer-section"></div>
            <p>Resumen de la compra:</p>
            <h2>Automóvil y/o camioneta particular</h2>
            <p>La alternativa cómoda y segura para compartir con tu familia</p>
            <p>$ 1.138.000</p>
            <p>Todas las especificaciones del curso elegido</p>
            <!-- Opciones de compra -->
            <form action="#" method="post">
                <label for="nombre">Nombre:</label>
                <input type="text" id="nombre" name="nombre" required><br><br>
                <label for="apellido">Apellido:</label>
                <input type="text" id="apellido" name="apellido" required><br><br>
                <label for="correo">Correo Electrónico:</label>
                <input type="email" id="correo" name="correo" required><br><br>
                <input type="checkbox" id="examenMedico" name="examenMedico">
                <label for="examenMedico">Agregar exámenes médicos</label><br><br>
                <label for="total">Total a pagar:</label>
                <input type="text" id="total" name="total" value="$ 1.138.000" readonly><br><br>
                <p>Medios de Pago</p>
                <img id="Visa" src="/Auto-Escuela-Tulua/img/Visa.png" alt="Visa">
                <img id="Mastercard" src="/Auto-Escuela-Tulua/img/Mastercard.png" alt="Mastercard">
                <img id="AmericanExpress" src="/Auto-Escuela-Tulua/img/AmericanExpress.png" alt="AmericanExpress">
                <img id="PSE" src="/Auto-Escuela-Tulua/img/PSE.png" alt="PSE">
                <p>
                    <button type="submit" class="boton-pagar">Pagar</button>
                </p>
            </form>
        </div>
        </div>
    </section>
        <!-- Botón de WhatsApp -->
        <?php include("../../assets/config/whatsapp.php");?>
        <!-- Botón de WhatsApp fin -->

        <?php include("../../assets/config/footer.php");?>
</body>

</html>