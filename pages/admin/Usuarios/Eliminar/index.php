<?php
// op_eliminar.php
require '../../../../assets/config/db.php';

$id = $_GET['id'];

$sql = "DELETE FROM usuario WHERE cedula = ?";
$stmt = $pdo->prepare($sql);
$stmt->execute([$id]);

header('Location: ../');
?>
