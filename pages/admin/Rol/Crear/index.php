<!DOCTYPE html>
<html lang="es">

<head>
    <?php include("../../../../assets/config/head.php"); ?>
    <title>Iniciar Sesión - Auto Escuela Tuluá</title>
</head>

<body>
<?php include("../../../../assets/config/topbar_admin.php"); ?>

    <main>
        <section>
            <div class="container d-flex justify-content-center align-items-center">
                <div class="row border border-1 rounded-2 m-5">
                    <div class="col-12 m-2">
                        <form class="text-center" action="op_crear_rol.php" method="post">
                            <div class="mb-3 mx-auto me-2">
                                <label class="form-label" for="nombre">Nombre Rol:</label>
                                <input class="form-control" type="text" name="nombre" id="nombre" required>
                                <p class="form-text">Ingresa nombre del Rol a crear</p>
                            </div>
                            <div class="d-flex justify-content-center align-items-center m-3">
                                <input class="btn btn-warning" type="submit" value="Crear Rol">
                            </div>
                            <a href="../">Volver a la lista de roles</a>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <!-- Botón de WhatsApp -->
    <?php include("../../../../assets/config/whatsapp.php"); ?>
    <!-- Botón de WhatsApp fin -->

    <?php include("../../../../assets/config/footer.php"); ?>
    <?php include("../../../../assets/config/js.php"); ?>
</body>

</html>