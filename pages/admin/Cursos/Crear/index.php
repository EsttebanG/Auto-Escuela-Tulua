<!DOCTYPE html>
<html>

<head>
    <?php include("../../../../assets/config/head.php"); ?>
    <title>Crear Usuario</title>
</head>

<body>
    <?php include("../../../../assets/config/topbar_admin.php"); ?>



    <main>
        <section>
            <div class="container">
                <div class="row mt-5 d-flex justify-content-center align-items-center">
                    <div class="col-12">
                        <div class="row text-center">
                            <h1>Crear Nuevo Curso</h1>
                        </div>
                    </div>
                </div>
                <div class="container d-flex justify-content-center align-items-center">
                    <div class="row border border-1 rounded-4 m-5">
                        <div class="col-12 m-2">
                            <form class="text-center" action="op_crear_cursos.php" method="post" enctype="multipart/form-data">

                                <div class="mb-3 me-3">
                                    <label class="form-label" for="nombre">Nombre:</label>
                                    <input class="form-control" type="text" name="nombre" id="nombre" required>
                                </div>

                                <div class="mb-3 me-3">
                                    <label class="form-label" for="descripción">Descripción:</label>
                                    <input class="form-control" type="text" name="descripcion" id="descripcion" required>
                                </div>

                                <div class="mb-3 me-3">
                                    <label class="form-label" for="precio">Precio:</label>
                                    <input class="form-control" type="number" name="precio" id="precio" required>
                                </div>

                                <div class="mb-3 me-3">
                                    <label class="form-label" for="duración">Duración (horas):</label>
                                    <input class="form-control" type="number" name="duracion" id="duracion" required>
                                </div>

                                <div class="mb-3 me-3">
                                    <label class="form-label" for="cupos_disponibles">Cupos Disponibles:</label>
                                    <input class="form-control" type="number" name="cupos_disponibles" id="cupos_disponibles" required>
                                </div>

                                <div class="mb-3 me-3">
                                    <label class="form-label" for="Image">Subir Imagen</label>
                                    <input class="form-control" type="file" name="fileImage" id="FileImage" required>
                                </div>

                                <div class="d-flex justify-content-center align-items-center mb-3">
                                <button type="submit" class="btn btn-warning">Crear</button>
                                </div>
                                <a href="../">Regresar al Listado</a>
                            </form> <br>

                        </div>
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