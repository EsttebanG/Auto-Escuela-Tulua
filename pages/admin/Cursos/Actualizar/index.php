<?php
require '../../../../assets/config/db.php';

$id = $_GET['id'];

$stmt = $pdo->prepare('SELECT * FROM curso WHERE id_curso = ?');
$stmt->execute([$id]);
$curso = $stmt->fetch(PDO::FETCH_ASSOC);

if (!$curso) {
    echo "Curso no encontrado!";
    exit;
}
?>

<!DOCTYPE html>
<html>

<head>
    <?php include("../../../../assets/config/head.php"); ?>
    <title>Actualizar Curso</title>
</head>

<body>

    <?php include("../../../../assets/config/topbar_admin.php"); ?>

    <main>
        <section>
            <div class="container mt-lg-3">
                <div class="row">
                    <div class="col-12 d-flex justify-content-center align-items-center">
                        <h1>Actualizar Curso</h1>
                    </div>
                </div>
                <div class="container d-flex justify-content-center align-items-center">
                    <div class="row border border-1 rounded-2 m-5">
                        <div class="col-12 m-2">
                            <form class="text-center" action="op_actualizar_cursos.php" method="post">
                                <div class="mb-3 me-3 mx-auto ">
                                    <input type="hidden" name="id" value="<?php echo $curso['id_curso']; ?>">
                                    <label class="form-label" for="nombre">Nombre:</label>
                                    <input class="form-control" type="text" name="nombre" value="<?php echo $curso['nombre']; ?>" required><br>
                                </div>
                                <div class="mb-3 me-3 mx-auto ">
                                    <label class="form-label" for="nombre">Descripcion:</label>
                                    <input class="form-control" type="text" name="descripcion" value="<?php echo $curso['descripcion']; ?>"><br>
                                </div>
                                <div class="mb-3 me-3 mx-auto ">
                                    <label class="form-label" for="nombre">Precio:</label>
                                    <input class="form-control" type="number" step="0.01" name="precio" value="<?php echo $curso['precio']; ?>" required<br>
                                </div>
                                <div class="mb-3 me-3 mx-auto ">
                                    <label class="form-label" for="nombre">Duracion (horas):</label>
                                    <input class="form-control" type="number" step="0.01" name="duracion" value="<?php echo $curso['duracion']; ?>" required><br>
                                </div>
                                <div class="mb-3 me-3 mx-auto ">
                                    <label class="form-label" for="nombre">Cupos Disponibles:</label>
                                    <input class="form-control" type="number" name="cupos_disponibles" value="<?php echo $curso['cupos_disponibles']; ?>" required><br>
                                </div>
                                <div class="mb-3 me-3">
                                    <label class="form-label" for="Image">Subir Imagen</label>
                                    <input class="form-control" type="file" name="fileImage" id="FileImage">
                                </div>
                                <div class="mb-3 mx-auto">
                                    <button class="btn btn-warning" type="submit">Actualizar</button>
                                </div>
                                <a href="../">Regresar al Listado</a>
                            </form>
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