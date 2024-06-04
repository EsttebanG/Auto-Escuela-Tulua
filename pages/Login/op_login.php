<?php
// Incluir la configuración de la base de datos
require '../../assets/config/db.php';

// Verificar si el formulario fue enviado
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Verificar si las variables están definidas
    if (isset($_POST['email']) && isset($_POST['password'])) {
        $email = $_POST['email'];
        $password = $_POST['password'];

        try {
            // Preparar y ejecutar la consulta para verificar credenciales
            $stmt = $pdo->prepare('SELECT cedula FROM usuario WHERE correo = :email AND contrasena = :password');
            $stmt->execute([':email' => $email, ':password' => $password]);

            // Obtener el resultado
            $usuario = $stmt->fetch(PDO::FETCH_ASSOC);

            // Verificar si el usuario existe
            if ($usuario) {
                // Usuario encontrado, redirigir a la página usuarios.php con el ID del usuario
                $cedula = $usuario['cedula'];
                header("Location: redirect.php?id=$cedula");
                exit;
            } else {
                // Usuario no encontrado, manejar error
                echo '<p class="alert alert-danger">Inicio de sesión fallido</p>';
            }
        } catch (PDOException $e) {
            // Manejar errores potenciales
            echo 'Error de base de datos: ' . $e->getMessage();
        }
    } else {
        echo '<p class="alert alert-danger">Por favor, complete ambos campos: email y contraseña.</p>';
    }
} else {
    echo '<p class="alert alert-danger">Método de solicitud no válido.</p>';
}
?>
