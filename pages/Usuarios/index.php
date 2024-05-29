<!DOCTYPE html>
<html lang="es">

<head>
    <?php include("../../assets/config/head.php"); ?>
    <title>Auto Escuela Tuluá - Usuarios</title>
</head>

<body>
    <?php include("../../assets/config/topbar.php"); ?>

    <main>
        <section>
            <div class="container">
                <div class="row m-5 d-flex justify-content-center align-items-center">
                    <div class="col-6">
                        <div class="mx-auto d-flex align-items-center justify-content-center">
                            <picture class="rounded-5">
                                <source srcset="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT37XYCmx_TcTnP5dIjY0otg-eq09BsXRlS2w&s" type="image/svg+xml">
                                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT37XYCmx_TcTnP5dIjY0otg-eq09BsXRlS2w&s" class="img-fluid img-thumbnail rounded-5" alt="...">
                            </picture>
                        </div>
                        <div class="mt-3 mx-auto d-flex align-items-center justify-content-center">
                            <input class="mx-auto btn btn-warning" type="file" id="file-input" accept="image/*">
                        </div>
                    </div>
                    <div class="col-6 d-flex justify-content-center">
                        <div>
                            <p><strong>Nombre</strong>: <span>Pepe</span></p>
                            <p><strong>Apellido</strong>: <span>Ramirez</span></p>
                            <p><strong>Correo Electrónico</strong>: <span>ejemplo@correo.com</span></p>
                            <p><strong>Fecha de Registro</strong>: <span>28 de abril de 2024</span></p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>


    <!-- <section>
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
            </div>
        </div>
    </section> -->
    <!-- Botón de WhatsApp -->
    <?php include("../../assets/config/whatsapp.php"); ?>
    <!-- Botón de WhatsApp fin -->

    <?php include("../../assets/config/footer.php"); ?>
    <?php include("../../assets/config/js.php"); ?>

</body>

</html>