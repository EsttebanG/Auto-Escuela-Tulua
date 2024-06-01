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
    <title>Actualizar Curso</title>
</head>
<body>
    <h1>Actualizar Curso</h1>
    <form action="op_actualizar_cursos.php" method="post">
        <input type="hidden" name="id" value="<?php echo $curso['id_curso']; ?>">
        <label>Nombre:</label><br>
        <input type="text" name="nombre" value="<?php echo $curso['nombre']; ?>" required><br>
        <label>Descripción:</label><br>
        <input type="text" name="descripcion" value="<?php echo $curso['descripcion']; ?>"><br>
        <label>Precio:</label><br>
        <input type="number" step="0.01" name="precio" value="<?php echo $curso['precio']; ?>" required><br>
        <label>Duración (horas):</label><br>
        <input type="number" step="0.01" name="duracion" value="<?php echo $curso['duracion']; ?>" required><br>
        <label>Cupos Disponibles:</label><br>
        <input type="number" name="cupos_disponibles" value="<?php echo $curso['cupos_disponibles']; ?>" required><br>
        <button type="submit">Actualizar</button>
    </form>
    <a href="../">Regresar al Listado</a>
</body>
</html>
