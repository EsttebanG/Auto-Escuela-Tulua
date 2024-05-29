<!DOCTYPE html>
<html lang="es">

<head>
    <?php include("../../../assets/config/head.php"); ?>
    <title>Pagos_Curso_1</title>
</head>

<body>
    <?php include("../../../assets/config/topbar.php"); ?>

    <Header>
        <div class="container">
            <div class="d-flex justify-content-center align-items-center">
                <H1>Pago del curso - Automovil y/o camnioneta particular</H1>
            </div>
        </div>
    </Header>

    <main>
        <section>
            <div class="container">
                <div class="row d-flex align-items-center justify-content-center m-5 ">
                    <div class="col-5 text-center border border-2 rounded rounded-4">
                        <p>Resumen de la compra:</p>
                        <h2>Automóvil y/o camioneta particular</h2>
                        <p>La alternativa cómoda y segura para compartir con tu familia</p>
                        <p>$ 1.138.000</p>
                        <p>Todas las especificaciones del curso elegido</p>
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
                            <div class="text-center m-3">
                                <p>Medios de Pago</p>
                                <div class="d-flex justify-content-center align-items-center">
                                    <div class="mx-auto">
                                        <img class="mx-2" id="Visa" src="/Auto-Escuela-Tulua/img/Visa.png" alt="Visa">
                                        <img class="mx-2" id="Mastercard" src="/Auto-Escuela-Tulua/img/Mastercard.png" alt="Mastercard">
                                        <img class="mx-2" id="AmericanExpress" src="/Auto-Escuela-Tulua/img/AmericanExpress.png" alt="AmericanExpress">
                                        <img class="mx-2" id="PSE" src="/Auto-Escuela-Tulua/img/PSE.png" alt="PSE">
                                    </div>
                                </div>
                            </div>
                            <div class="d-flex align-items-center justify-content-center m-3">
                                <button type="submit" class="btn btn-warning">Pagar</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <!-- <p>
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
    </section> -->
    <!-- Botón de WhatsApp -->
    <?php include("../../../assets/config/whatsapp.php"); ?>
    <!-- Botón de WhatsApp fin -->

    <?php include("../../../assets/config/footer.php"); ?>
    <?php include("../../../assets/config/js.php"); ?>
</body>

</html>