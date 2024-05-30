<?php
// op_crear_usuario.php
require '../../assets/config/db.php';

$usuario = $_POST['usuario'];
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$contrasena = $_POST['contrasena'];
$correo = $_POST['correo'];
$telefono = $_POST['telefono'];
$rol = $_POST['rol'];

$sql = "INSERT INTO Usuario (usuario, nombre, apellido, contrasena, correo, telefono, Rol_idRol) 
        VALUES (:usuario, :nombre, :apellido, :contrasena, :correo, :telefono, :rol)";
$stmt = $pdo->prepare($sql);
$stmt->execute(['usuario' => $usuario, 'nombre' => $nombre, 'apellido' => $apellido, 'contrasena' => $contrasena, 'correo' => $correo, 'telefono' => $telefono, 'rol' => $rol]);

header('Location: usuario.php');
?>
