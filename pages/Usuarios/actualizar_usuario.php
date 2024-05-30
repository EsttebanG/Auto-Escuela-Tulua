<?php
// actualizar_usuario.php
require '../../assets/config/db.php';

$id = $_GET['id'];
$stmt = $pdo->prepare('SELECT * FROM Usuario WHERE idUsuario = ?');
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
    <meta charset="UTF-8">
    <title>Actualizar Usuario</title>
</head>
<body>
    <h1>Actualizar Usuario</h1>
    <form action="op_actualizar_usuario.php" method="post">
        <input type="hidden" name="id" value="<?= $usuario['idUsuario'] ?>">
        
        <label for="usuario">Usuario:</label>
        <input type="text" name="usuario" id="usuario" value="<?= htmlspecialchars($usuario['usuario']) ?>" required><br>
        
        <label for="nombre">Nombre:</label>
        <input type="text" name="nombre" id="nombre" value="<?= htmlspecialchars($usuario['nombre']) ?>" required><br>
        
        <label for="apellido">Apellido:</label>
        <input type="text" name="apellido" id="apellido" value="<?= htmlspecialchars($usuario['apellido']) ?>" required><br>
        
        <label for="contrasena">Contraseña:</label>
        <input type="password" name="contrasena" id="contrasena" value="<?= htmlspecialchars($usuario['contrasena']) ?>" required><br>
        
        <label for="correo">Correo:</label>
        <input type="email" name="correo" id="correo" value="<?= htmlspecialchars($usuario['correo']) ?>" required><br>
        
        <label for="telefono">Teléfono:</label>
        <input type="text" name="telefono" id="telefono" value="<?= htmlspecialchars($usuario['telefono']) ?>"><br>
        
        <label for="rol">Rol:</label>
        <select name="rol" id="rol" required>
            <?php foreach ($roles as $rol): ?>
                <option value="<?= htmlspecialchars($rol['idRol']) ?>" <?= $usuario['Rol_idRol'] == $rol['idRol'] ? 'selected' : '' ?>>
                    <?= htmlspecialchars($rol['nombre']) ?>
                </option>
            <?php endforeach; ?>
        </select><br>
        
        <input type="submit" value="Actualizar Usuario">
    </form>
    <a href="usuario.php">Volver a la lista de usuarios</a>
</body>
</html>
