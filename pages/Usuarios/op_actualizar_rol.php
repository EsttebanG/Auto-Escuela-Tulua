<?php
// op_actualizar_rol.php
require 'db.php';

$id = $_POST['id'];
$nombre = $_POST['nombre'];

$sql = "UPDATE Rol SET nombre = :nombre WHERE idRol = :id";
$stmt = $pdo->prepare($sql);
$stmt->execute(['nombre' => $nombre, 'id' => $id]);

header('Location: Rol.php');
?>
