<?php
// crear_usuario.php
require '../../../../assets/config/db.php';

// Obtener los roles
$stmt = $pdo->query('SELECT idRol, nombre FROM Rol');
$roles = $stmt->fetchAll();
?>

<!DOCTYPE html>
<html lang="es">

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
                            <h1>Crear Usuario</h1>
                        </div>
                    </div>
                </div>
                <div class="container d-flex justify-content-center align-items-center">
                    <div class="row border border-1 rounded-4 m-5">
                        <div class="col-12 m-2">
                            <form class="text-center" action="op_crear_usuario.php" method="post">

                                <div class="mb-3 me-3">
                                    <label class="form-label" for="usuario">Usuario:</label>
                                    <input class="form-control" type="text" name="usuario" id="usuario" required>
                                </div>

                                <div class="mb-3 me-3">
                                    <label class="form-label" for="nombre">Nombre:</label>
                                    <input class="form-control" type="text" name="nombre" id="nombre" required>
                                </div>

                                <div class="mb-3 me-3">
                                    <label class="form-label" for="apellido">Apellido:</label>
                                    <input class="form-control" type="text" name="apellido" id="apellido" required>
                                </div>

                                <div class="mb-3 me-3">
                                    <label class="form-label" for="contrasena">Contraseña:</label>
                                    <input class="form-control" type="password" name="contrasena" id="contrasena" required>
                                </div>

                                <div class="mb-3 me-3">
                                    <label class="form-label" for="correo">Correo:</label>
                                    <input class="form-control" type="email" name="correo" id="correo" required>
                                </div>

                                <div class="mb-3 me-3">
                                    <label class="form-label" for="telefono">Teléfono:</label>
                                    <input class="form-control" type="text" name="telefono" id="telefono">
                                </div>

                                <div class="mb-3 me-3">
                                    <label class="form-label" for="rol">Rol:</label>
                                    <select class="form-control" name="rol" id="rol" required>
                                        <option value="" selected disabled>Seleccione un rol</option>
                                        <?php foreach ($roles as $rol) : ?>
                                            <option value="<?= htmlspecialchars($rol['idRol']) ?>"><?= htmlspecialchars($rol['nombre']) ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>

                                <div class="d-flex justify-content-center align-items-center mb-3">
                                    <input class="btn btn-warning" type="submit" value="Crear Usuario">
                                </div>
                                <a href="usuario.php">Volver a la lista de usuarios</a>
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