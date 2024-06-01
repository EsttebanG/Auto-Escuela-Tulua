<?php
// Rol.php
require '../../../assets/config/db.php';

$stmt = $pdo->query('SELECT * FROM Rol');
$roles = $stmt->fetchAll();

?>

<!DOCTYPE html>
<html lang="es">

<head>
    <?php include("../../../assets/config/head.php"); ?>
    <title>Auto Escuela Tuluá - Rol Usuarios</title>
</head>

<body>
    <?php include("../../../assets/config/topbar_admin.php"); ?>


    <main>
        <section>
            <div class="container">
                <div class="row m-5 d-flex justify-content-center align-items-center">
                    <div class="col-12">
                        <div class="row">
                            <div class="col-12 d-flex align-items-center justify-content-center">
                                <h1>Lista de Roles</h1>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 d-flex align-items-center justify-content-end">
                                <a class="btn btn-warning me-lg-5 mb-lg-2 me-ss-0" href="Crear/">Crear Rol</a>
                            </div>
                        </div>
                        <div class="row">
                            <div class="d-flex align-items-center justify-content-center">
                                <div class="col-12 d-flex justify-content-center align-items-center">
                                    <table class="table table-striped-columns text-center" border="1">
                                        <tr>
                                            <th>ID</th>
                                            <th>Nombre</th>
                                            <th>Acciones</th>
                                        </tr>
                                        <?php foreach ($roles as $rol) : ?>
                                            <tr>
                                                <td><?= htmlspecialchars($rol['idRol']) ?></td>
                                                <td><?= htmlspecialchars($rol['nombre']) ?></td>
                                                <td>
                                                    <a class="btn btn-warning m-lg-2" href="/Auto-Escuela-Tulua/pages/Admin/Rol/Actualizar/?id=<?= $rol['idRol'] ?>">Actualizar</a>
                                                    <a class="btn btn-warning m-lg-2" href="/Auto-Escuela-Tulua/pages/Admin/Rol/Eliminar/?id=<?= $rol['idRol'] ?>">Eliminar</a>
                                                </td>
                                            </tr>
                                        <?php endforeach; ?>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <!-- Botón de WhatsApp -->
    <?php include("../../../assets/config/whatsapp.php"); ?>
    <!-- Botón de WhatsApp fin -->

    <?php include("../../../assets/config/footer.php"); ?>
    <?php include("../../../assets/config/js.php"); ?>
</body>

</html>