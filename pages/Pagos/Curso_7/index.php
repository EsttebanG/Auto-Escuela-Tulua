<!DOCTYPE html>
<html lang="es">

<head>
    <?php include("../../../assets/config/head.php"); ?>
    <title>Pagos_Curso_7</title>
</head>

<body>
    <?php include("../../../assets/config/header.php"); ?>
    <section>
        <h2>Pago del Curso - <p></p> Recategorización de Licencia - B1 A C1</h2>
        <div class="producto">
            <p>Resumen de la compra:</p>
            <h2>Recategorización de Licencia - B1 A C1</h2>
            <p>El vehículo que te llevará a tus nuevas aventuras</p>
            <p>$ 1.000.000</p>
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
                <input type="text" id="total" name="total" value="$ 1.000.000" readonly><br><br>
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
    </section>
        <!-- Botón de WhatsApp -->
        <?php include("../../../assets/config/whatsapp.php");?>
        <!-- Botón de WhatsApp fin -->

        <?php include("../../../assets/config/footer.php");?>
        <?php include("../../../assets/config/js.php");?>
</body>

</html>