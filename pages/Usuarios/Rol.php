<?php
// Rol.php
require '../../assets/config/db.php';

$stmt = $pdo->query('SELECT * FROM Rol');
$roles = $stmt->fetchAll();

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Lista de Roles</title>
</head>
<body>
    <h1>Lista de Roles</h1>
    <a href="crear_rol.php">Crear Rol</a>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Acciones</th>
        </tr>
        <?php foreach ($roles as $rol): ?>
        <tr>
            <td><?= htmlspecialchars($rol['idRol']) ?></td>
            <td><?= htmlspecialchars($rol['nombre']) ?></td>
            <td>
                <a href="actualizar_rol.php?id=<?= $rol['idRol'] ?>">Actualizar</a>
                <a href="op_eliminar.php?id=<?= $rol['idRol'] ?>">Eliminar</a>
            </td>
        </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>
