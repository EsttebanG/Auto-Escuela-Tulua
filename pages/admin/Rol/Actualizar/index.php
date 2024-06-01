<?php
// actualizar_rol.php
require '../../../../assets/config/db.php';

$id = $_GET['id'];
$stmt = $pdo->prepare('SELECT * FROM Rol WHERE idRol = ?');
$stmt->execute([$id]);
$rol = $stmt->fetch();

if (!$rol) {
    die('Rol no encontrado');
}
?>

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
            <div class="container mt-lg-3">
                <div class="row">
                    <div class="col-12 d-flex justify-content-center align-items-center">
                        <h1>Actualizar Rol</h1>
                    </div>
                </div>
                <div class="container d-flex justify-content-center align-items-center">
                    <div class="row border border-1 rounded-2 m-5">
                        <div class="col-12 m-2">
                            <form class="text-center" action="op_actualizar_rol.php" method="post">
                                <div class="mb-3 me-3 mx-auto ">
                                    <input class="form-control" type="hidden" name="id" value="<?= $rol['idRol'] ?>">
                                    <label class="form-label" for="nombre">Nombre:</label>
                                    <input class="form-control" type="text" name="nombre" id="nombre" value="<?= htmlspecialchars($rol['nombre']) ?>" required>
                                </div>
                                <input class="btn btn-warning" type="submit" value="Actualizar Rol">
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