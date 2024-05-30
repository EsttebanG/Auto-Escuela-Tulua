<?php
// actualizar_rol.php
require '../../assets/config/db.php';

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
    <meta charset="UTF-8">
    <title>Actualizar Rol</title>
</head>
<body>
    <h1>Actualizar Rol</h1>
    <form action="op_actualizar_rol.php" method="post">
        <input type="hidden" name="id" value="<?= $rol['idRol'] ?>">
        
        <label for="nombre">Nombre:</label>
        <input type="text" name="nombre" id="nombre" value="<?= htmlspecialchars($rol['nombre']) ?>" required><br>
        
        <input type="submit" value="Actualizar Rol">
    </form>
    <a href="Rol.php">Volver a la lista de roles</a>
</body>
</html>
