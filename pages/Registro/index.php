<!DOCTYPE html>
<html lang="es">

<head>
    <?php include("../../assets/config/head.php"); ?>
    <title>Pagos</title>
</head>

<body>
    <?php include("../../assets/config/topbar.php"); ?>
    <main>

        <section>
            <div class="container d-flex justify-content-center align-items-center">
                <div class="row border border-1 rounded-2 m-5">
                    <div class="col-12 m-2">
                        <form class="text-center" action="/Auto-Escuela-Tulua/pages/Usuarios/" type="formulario">
                            <div class="mb-3 me-3  mx-auto ">
                                <label for="NameUser1" class="form-label">Nombre:</label>
                                <input type="text" class="form-control" id="NameUser1" aria-describedby="NameUserHelp">
                                <div id="NameUserHelp" class="form-text"></div>
                            </div>
                            <div class="mb-3 me-3  mx-auto ">
                                <label for="LastName1" class="form-label">Apellido:</label>
                                <input type="text" class="form-control" id="LastName1" aria-describedby="LastNameHelp">
                                <div id="LastNameHelp" class="form-text"></div>
                            </div>
                            <div class="mb-3 me-3  mx-auto ">
                                <label for="EmailUser" class="form-label">Correo Electronico</label>
                                <input type="email" class="form-control" id="EmailUser" aria-describedby="emailHelp">
                                <div id="emailHelp" class="form-text">ejemplo@gmail.com</div>
                            </div>
                            <div class="mb-3 me-3 ">
                                <label for="exampleInputPassword1" class="form-label">Contraseña</label>
                                <input type="password" class="form-control" id="exampleInputPassword1">
                            </div>
                            <div class="mb-3 me-3 ">
                                <a href="/Auto-Escuela-Tulua/pages/Inicio_Seccion/">¿Ya estas Registrado?</a>
                            </div>
                            <div class="d-flex justify-content-center align-items-center m-3">
                                <button type="submit" class="btn btn-warning">Registrarse</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <!-- Botón de WhatsApp -->
    <?php include("../../assets/config/whatsapp.php"); ?>
    <!-- Botón de WhatsApp fin -->

    <?php include("../../assets/config/footer.php"); ?>
    <?php include("../../assets/config/js.php"); ?>
</body>

</html>