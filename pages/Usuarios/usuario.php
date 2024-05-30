<?php
// usuario.php
require '../../assets/config/db.php';

// Obtener usuarios y sus roles
$sql = 'SELECT Usuario.*, Rol.nombre as rol_nombre FROM Usuario LEFT JOIN Rol ON Usuario.Rol_idRol = Rol.idRol';
$stmt = $pdo->query($sql);
$usuarios = $stmt->fetchAll();

?>

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
                    <div class="col-6 d-flex justify-content-center">
                        <h1>Lista de Usuarios</h1>
                        <a href="crear_usuario.php">Crear Usuario</a>
                        <table border="1">
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
                                        <a href="actualizar_usuario.php?id=<?= $usuario['idUsuario'] ?>">Actualizar</a>
                                        <a href="op_eliminar.php?id=<?= $usuario['idUsuario'] ?>">Eliminar</a>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        </table>
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