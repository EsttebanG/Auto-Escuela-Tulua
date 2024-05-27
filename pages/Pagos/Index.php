<!DOCTYPE html>
<html lang="es">

<head>
    <?php include("../../assets/config/head.php"); ?>
    <title>Pagos</title>
</head>

<body>
    <?php include("../../assets/config/header.php"); ?>
    <section class="contenido">
        <h2>Seleccione el Servicio a Pagar</h2>
        <form action="#" method="POST" class="formulario">
            <div class="grupo">
                <label for="servicio">Servicio:</label>
                <select name="servicio" id="servicio" required>
                    <option value="">Seleccionar Servicio</option>
                    <option value="curso">Curso de Conducción</option>
                    <option value="matricula">Matrícula</option>
                    <option value="examen">Examen de Conducción</option>
                    <option value="certificado">Certificado de Conducción</option>
                </select>
            </div>
            <div class="grupo">
                <label for="monto">Monto:</label>
                <input type="number" id="monto" name="monto" required>
            </div>
            <button type="submit">Pagar</button>
        </form>
    </section>

    <section>
        <div class="footer-section">
            <p>Medios de Pago</p>
            <img id="Visa" src="img/Visa.png" alt="Visa">
            <img id="Mastercard" src="img/Mastercard.png" alt="Mastercard">
            <img id="AmericanExpress" src="img/AmericanExpress.png" alt="AmericanExpress">
            <img id="PSE" src="img/PSE.png" alt="PSE">
        </div>
    </section>
        <!-- Botón de WhatsApp -->
        <?php include("../../assets/config/whatsapp.php");?>
        <!-- Botón de WhatsApp fin -->

        <?php include("../../assets/config/footer.php");?>
</body>

</html>