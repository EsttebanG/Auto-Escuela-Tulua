<!DOCTYPE html>
<html lang="es">

<head>
<?php include("../../aseets/config/head.php");?>
    <title>Pagos_Curso_7</title>
</head>
<body>
<?php include("assets/config/header.php");?>
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