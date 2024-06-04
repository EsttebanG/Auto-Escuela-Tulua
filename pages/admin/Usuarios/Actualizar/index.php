<?php
// actualizar_usuario.php
require '../../../../assets/config/db.php';

$id = $_GET['id'];
$stmt = $pdo->prepare('SELECT * FROM Usuario WHERE cedula = ?');
$stmt->execute([$id]);
$usuario = $stmt->fetch();

if (!$usuario) {
    die('Usuario no encontrado');
}

// Obtener los roles
$stmt = $pdo->query('SELECT idRol, nombre FROM Rol');
$roles = $stmt->fetchAll();
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
            <div class="container">
                <div class="container d-flex align-items-center justify-content-center">
                    <div class="col-12 text-center">
                        <h1>Actualizar Usuario</h1>
                    </div>
                </div>
                <div class="container d-flex justify-content-center align-items-center">
                    <div class="row border border-1 rounded-2 m-5">
                        <div class="col-12 m-2">
                            <form class="text-center" action="op_actualizar_usuario.php" method="post" enctype="multipart/form-data">
                                <input type="hidden" name="id" value="<?= $usuario['cedula'] ?>">
                                <div class="mb-3 me-3 mx-auto">
                                    <label class="form-label" for="usuario">Usuario:</label>
                                    <input class="form-control" type="text" name="usuario" id="usuario" value="<?= htmlspecialchars($usuario['usuario']) ?>" required>
                                </div>
                                <div class="mb-3 me-3">
                                    <label class="form-label" for="nombre">Nombre:</label>
                                    <input class="form-control" type="text" name="nombre" id="nombre" value="<?= htmlspecialchars($usuario['nombre']) ?>" required>
                                </div>
                                <div class="mb-3 me-3">
                                    <label class="form-label" for="apellido">Apellido:</label>
                                    <input class="form-control" type="text" name="apellido" id="apellido" value="<?= htmlspecialchars($usuario['apellido']) ?>" required>
                                </div>
                                <div class="mb-3 me-3">
                                    <label class="form-label" for="contrasena">Contraseña:</label>
                                    <input class="form-control" type="password" name="contrasena" id="contrasena" value="<?= htmlspecialchars($usuario['contrasena']) ?>" required>
                                </div>
                                <div class="mb-3 me-3">
                                    <label class="form-label" for="correo">Correo:</label>
                                    <input class="form-control" type="email" name="correo" id="correo" value="<?= htmlspecialchars($usuario['correo']) ?>" required>
                                    <p class="form-text">Nunca compartiremos su correo electrónico con nadie más.</p>
                                </div>
                                <div class="mb-3 me-3">
                                    <label class="form-label" for="telefono">Teléfono:</label>
                                    <input class="form-control" type="text" name="telefono" id="telefono" value="<?= htmlspecialchars($usuario['telefono']) ?>">
                                </div>
                                <div class="mb-3 me-3">
                                    <label class="form-label" for="Image">Subir Imagen</label>
                                    <input class="form-control" type="file" name="fileImage" id="FileImage">
                                </div>
                                <div class="mb-3 me-3">
                                    <label class="form-label" for="rol">Rol:</label>
                                    <select class="form-control mb-3" name="rol" id="rol" required>
                                        <?php foreach ($roles as $rol) : ?>
                                            <option value="<?= htmlspecialchars($rol['idRol']) ?>" <?= $usuario['Rol_idRol'] == $rol['idRol'] ? 'selected' : '' ?>>
                                                <?= htmlspecialchars($rol['nombre']) ?>
                                            </option>
                                        <?php endforeach; ?>
                                </div>
                                <div class="d-flex justify-content-center align-items-center m-3 mt-5">
                                    <input class="btn btn-warning" type="submit" value="Actualizar Usuario">
                                </div>
                                <a href="/Auto-Escuela-Tulua/pages/Admin/Usuarios/">Volver a la lista de usuarios</a>
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