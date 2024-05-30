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
    <meta charset="UTF-8">
    <title>Lista de Usuarios</title>
</head>
<body>
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
        <?php foreach ($usuarios as $usuario): ?>
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
</body>
</html>
