<?php
// Verificar si el ID está presente en la URL
if (isset($_GET['id'])) {
    $idUsuario = $_GET['id'];
} else {
    echo 'ID de usuario no proporcionado';
    exit;
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Redirigiendo...</title>
</head>
<body>
    <form id="redirectForm" action="../Usuario/" method="post">
        <input type="hidden" name="id" value="<?php echo htmlspecialchars($idUsuario); ?>">
    </form>

    <script type="text/javascript">
        document.getElementById('redirectForm').submit();
    </script>
</body>
</html>
