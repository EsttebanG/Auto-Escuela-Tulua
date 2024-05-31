<?php
// op_eliminar.php
require '../../../../assets/config/db.php';

$id = $_GET['id'];

$sql = "DELETE FROM usuario WHERE idUsuario = ?";
$stmt = $pdo->prepare($sql);
$stmt->execute([$id]);

header('Location: ../');
?>
