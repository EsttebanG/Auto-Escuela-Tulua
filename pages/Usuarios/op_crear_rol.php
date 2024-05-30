<?php
// op_crear_rol.php
require 'db.php';

$nombre = $_POST['nombre'];

$sql = "INSERT INTO Rol (nombre) VALUES (:nombre)";
$stmt = $pdo->prepare($sql);
$stmt->execute(['nombre' => $nombre]);

header('Location: Rol.php');
?>
