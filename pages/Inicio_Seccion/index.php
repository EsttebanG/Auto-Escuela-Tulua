<!DOCTYPE html>
<html lang="es">

<head>
    <?php include("../../assets/config/head.php"); ?>
    <title>Iniciar Sesión - Auto Escuela Tuluá</title>
</head>

<body>
    <?php include("../../assets/config/topbar.php"); ?>
    <section>
        <div class="container d-flex justify-content-center align-items-center">
            <div class="row border border-1 rounded-2 m-5">
                <div class="col-12 m-2">
                    <form class="text-center" action="/Auto-Escuela-Tulua/pages/Usuarios/" type="formulario">
                        <div class="mb-3 mx-auto ">
                            <label for="exampleInputEmail1" class="form-label">Correo Electronico</label>
                            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                            <div id="emailHelp" class="form-text">Nunca compartiremos su correo electrónico con nadie más.</div>
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Contraseña</label>
                            <input type="password" class="form-control" id="exampleInputPassword1">
                        </div>
                        <div class="mb-3 d-flex justify-content-center align-items-center">
                            <div class="form-check mx-auto">
                                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                <label class="form-check-label" for="exampleCheck1">Me echas un vistazo</label>
                            </div>
                            <div class="mx-auto">
                                <a href="#">¿Olvidaste tu contraseña?</a>
                            </div>
                        </div>
                        <div class="d-flex justify-content-center align-items-center m-3">
                            <button type="submit" class="btn btn-warning">Iniciar Seccion</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- Botón de WhatsApp -->
    <?php include("../../assets/config/whatsapp.php"); ?>
    <!-- Botón de WhatsApp fin -->

    <?php include("../../assets/config/footer.php"); ?>
    <?php include("../../assets/config/js.php"); ?>
</body>

</html>