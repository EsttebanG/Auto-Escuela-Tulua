<?php
// op_actualizar_usuario.php
require '../../assets/config/db.php';

$id = $_POST['id'];
$usuario = $_POST['usuario'];
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$contrasena = $_POST['contrasena'];
$correo = $_POST['correo'];
$telefono = $_POST['telefono'];
$rol = $_POST['rol'];

$sql = "UPDATE Usuario SET usuario = :usuario, nombre = :nombre, apellido = :apellido, contrasena = :contrasena, correo = :correo, telefono = :telefono, Rol_idRol = :rol WHERE idUsuario = :id";
$stmt = $pdo->prepare($sql);
$stmt->execute(['usuario' => $usuario, 'nombre' => $nombre, 'apellido' => $apellido, 'contrasena' => $contrasena, 'correo' => $correo, 'telefono' => $telefono, 'rol' => $rol, 'id' => $id]);

header('Location: usuario.php');
?>
