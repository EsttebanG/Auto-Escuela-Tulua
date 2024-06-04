<?php
// op_actualizar_usuario.php
require '../../../../assets/config/db.php';

$id = $_POST['id'];
$usuario = $_POST['usuario'];
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$contrasena = $_POST['contrasena'];
$correo = $_POST['correo'];
$telefono = $_POST['telefono'];
$rol = $_POST['rol'];


$fileImage1 = $_FILES['fileImage']['name'];
$tmpFileImage = $_FILES['fileImage']['tmp_name'];


if ($fileImage1) {
    // Obtener el nombre de la imagen actual
    $stmt = $pdo->prepare('SELECT usuario_img_name FROM Usuario WHERE cedula = ?');
    $stmt->execute([$id]);
    $usuario = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($usuario && $usuario['usuario_img_name']) {
        $currentImage = '../../../../img/Usuario/' . $usuario['usuario_img_name'];
        if (file_exists($currentImage)) {
            unlink($currentImage); // Eliminar la imagen actual
        }
    }

    // Mover la nueva imagen
    $ruteFile = '../../../../img/Usuario/' . $fileImage1;
    move_uploaded_file($tmpFileImage, $ruteFile);

    // Actualizar curso incluyendo la nueva imagen
    $stmt = $pdo->prepare('UPDATE usuario SET usuario = ?, nombre = ?, apellido = ?, contrasena = ?, correo = ?, telefono = ?, usuario_img_name = ?, Rol_idRol = ?   WHERE cedula = ?');
    $stmt->execute([$usuario, $nombre, $apellido, $contrasena, $correo, $telefono, $fileImage1, $rol, $id]);
} else {
    // Actualizar curso sin cambiar la imagen
    $stmt = $pdo->prepare('UPDATE usuario SET usuario = ?, nombre = ?, apellido = ?, contrasena = ?, correo = ?, telefono = ?, Rol_idRol = ? WHERE cedula = ?');
    $stmt->execute([$usuario, $nombre, $apellido, $contrasena, $correo, $telefono, $rol, $id]);
}


header('Location: ../');
?>