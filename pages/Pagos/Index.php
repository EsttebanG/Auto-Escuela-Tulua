<!DOCTYPE html>
<html lang="es">

<head>
    <?php include("../../assets/config/head.php"); ?>
    <title>Pagos</title>
</head>

<body>
    <?php include("assets/config/header.php"); ?>
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
    <footer>
        <div class="footer-container">
            <div class="footer-section">
                <h3>Nuestro Respaldo</h3>
                <img id="Iconte" src="img/Iconte.png" alt="Iconte">
                <img id="VigiladoSuperTransporte" src="img/VigiladoSuperTransporte.png" alt="VigiladoSuperTransporte">
                <img id="Transporte" src="img/Transporte.png" alt="Transporte">
            </div>
            <hr>
            <div class="footer-section">
                <p>Horario de admisiones</p>
                <p>Lunes a viernes de 8:00 am a 7:00 pm</p>
                <p>Sábados 8:00 am a 5:00 pm</p>
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