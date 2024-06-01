<?php
require '../../../assets/config/db.php';

$stmt = $pdo->query('SELECT * FROM curso');
$cursos = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Listado de Cursos</title>
</head>
<body>
    <h1>Listado de Cursos</h1>
    <a href="Crear/">Crear Nuevo Curso</a>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Descripción</th>
            <th>Precio</th>
            <th>Duración</th>
            <th>Cupos Disponibles</th>
            <th>Acciones</th>
        </tr>
        <?php foreach ($cursos as $curso): ?>
            <tr>
                <td><?php echo htmlspecialchars($curso['id_curso']); ?></td>
                <td><?php echo htmlspecialchars($curso['nombre']); ?></td>
                <td><?php echo htmlspecialchars($curso['descripcion']); ?></td>
                <td><?php echo htmlspecialchars($curso['precio']); ?></td>
                <td><?php echo htmlspecialchars($curso['duracion']); ?></td>
                <td><?php echo htmlspecialchars($curso['cupos_disponibles']); ?></td>
                <td>
                    <a href="Actualizar/?id=<?php echo $curso['id_curso']; ?>">Actualizar</a>
                    <a href="Eliminar/?id=<?php echo $curso['id_curso']; ?>">Eliminar</a>
                </td>
            </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>
