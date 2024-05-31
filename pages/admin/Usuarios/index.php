<?php
// usuario.php
require '../../../assets/config/db.php';

// Obtener usuarios y sus roles
$sql = 'SELECT Usuario.*, Rol.nombre as rol_nombre FROM Usuario LEFT JOIN Rol ON Usuario.Rol_idRol = Rol.idRol';
$stmt = $pdo->query($sql);
$usuarios = $stmt->fetchAll();

?>

<!DOCTYPE html>
<html lang="es">

<head>
    <?php include("../../../assets/config/head.php"); ?>
    <title>Auto Escuela Tuluá - Usuarios</title>
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
                                <h1>Lista de Usuarios</h1>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 d-flex align-items-center justify-content-end">
                                <a class="btn btn-warning me-lg-5 mb-lg-2 me-ss-0" href="Crear/">Crear Usuario</a>
                            </div>
                        </div>
                        <div class="row">
                            <div class="d-flex align-items-center justify-content-center">
                                <div class="col-12 d-flex justify-content-center align-items-center">
                                    <table class="table table-striped-columns text-center" border="1">
                                        <tr>
                                            <th>ID</th>
                                            <th>Usuario</th>
                                            <th>Nombre</th>
                                            <th>Apellido</th>
                                            <th>Correo</th>
                                            <th>Teléfono</th>
                                            <th>Rol</th>
                                            <th>Acciones</th>
                                        </tr>
                                        <?php foreach ($usuarios as $usuario) : ?>
                                            <tr>
                                                <td><?= htmlspecialchars($usuario['idUsuario']) ?></td>
                                                <td><?= htmlspecialchars($usuario['usuario']) ?></td>
                                                <td><?= htmlspecialchars($usuario['nombre']) ?></td>
                                                <td><?= htmlspecialchars($usuario['apellido']) ?></td>
                                                <td><?= htmlspecialchars($usuario['correo']) ?></td>
                                                <td><?= htmlspecialchars($usuario['telefono']) ?></td>
                                                <td><?= htmlspecialchars($usuario['rol_nombre']) ?></td>
                                                <td>
                                                    <a class="btn btn-warning m-lg-2 m-ss-2" href="actualizar/?id=<?= $usuario['idUsuario'] ?>">Actualizar</a>
                                                    <a class="btn btn-warning m-lg-2 m-ss-2" href="Eliminar/?id=<?= $usuario['idUsuario'] ?>">Eliminar</a>
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