<?php
// op_eliminar.php
require '../../../../assets/config/db.php';

$id = $_GET['id'];

$sql = "DELETE FROM Rol WHERE idRol = ?";
$stmt = $pdo->prepare($sql);
$stmt->execute([$id]);

header('Location: ../');
?>
