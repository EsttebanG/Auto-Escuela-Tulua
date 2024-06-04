<?php
// op_crear_usuario.php
require '../../../../assets/config/db.php';

$usuario = $_POST['usuario'];
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$contrasena = $_POST['contrasena'];
$correo = $_POST['correo'];
$telefono = $_POST['telefono'];
$rol = $_POST['rol'];
$fileImage1 = $_FILES['fileImage']['name'];
$tmpFileImage = $_FILES['fileImage']['tmp_name'];
$ruteFile = '../../../../img/Usuario/' . $fileImage1;

move_uploaded_file($tmpFileImage, $ruteFile);

$sql = "INSERT INTO usuario (usuario, nombre, apellido, contrasena, correo, telefono, Rol_idRol, usuario_img_name) 
        VALUES (:usuario, :nombre, :apellido, :contrasena, :correo, :telefono, :rol, :usuario_img_name)";
$stmt = $pdo->prepare($sql);
$stmt->execute(['usuario' => $usuario, 'nombre' => $nombre, 'apellido' => $apellido, 'contrasena' => $contrasena, 'correo' => $correo, 'telefono' => $telefono, 'rol' => $rol, 'usuario_img_name' => $fileImage1]);

header('Location: ../');
?>
