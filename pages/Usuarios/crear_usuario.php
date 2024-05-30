<?php
// crear_usuario.php
require '../../assets/config/db.php';

// Obtener los roles
$stmt = $pdo->query('SELECT idRol, nombre FROM Rol');
$roles = $stmt->fetchAll();
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Crear Usuario</title>
</head>
<body>
    <h1>Crear Usuario</h1>
    <form action="op_crear_usuario.php" method="post">
        <label for="usuario">Usuario:</label>
        <input type="text" name="usuario" id="usuario" required><br>
        
        <label for="nombre">Nombre:</label>
        <input type="text" name="nombre" id="nombre" required><br>
        
        <label for="apellido">Apellido:</label>
        <input type="text" name="apellido" id="apellido" required><br>
        
        <label for="contrasena">Contraseña:</label>
        <input type="password" name="contrasena" id="contrasena" required><br>
        
        <label for="correo">Correo:</label>
        <input type="email" name="correo" id="correo" required><br>
        
        <label for="telefono">Teléfono:</label>
        <input type="text" name="telefono" id="telefono"><br>
        
        <label for="rol">Rol:</label>
        <select name="rol" id="rol" required>
            <option value="" selected disabled>Seleccione un rol</option>
            <?php foreach ($roles as $rol): ?>
                <option value="<?= htmlspecialchars($rol['idRol']) ?>"><?= htmlspecialchars($rol['nombre']) ?></option>
            <?php endforeach; ?>
        </select><br>
        
        <input type="submit" value="Crear Usuario">
    </form>
    <a href="usuario.php">Volver a la lista de usuarios</a>
</body>
</html>
