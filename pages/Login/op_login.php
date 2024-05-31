<?php

// Incluir archivo de conexión a la base de datos
require '../../assets/config/db.php';

// Iniciar sesión
session_start();

// Validar datos del formulario
$email = $_POST['email'];
$password = $_POST['password'];

// Sanitizar datos
$email = mysqli_real_escape_string($conn, $email);
$password = mysqli_real_escape_string($conn, $password);

// Consultar base de datos
$sql = "SELECT cedula, nombre, email, password FROM usuarios WHERE email = '$email' AND password = '$password'";
$result = mysqli_query($conn, $sql);

// Comprobar resultados
if (mysqli_num_rows($result) > 0) {
    // Iniciar sesión del usuario
    $row = mysqli_fetch_assoc($result);
    $_SESSION['id'] = $row['id_usuario'];
    $_SESSION['nombre'] = $row['nombre'];
    $_SESSION['email'] = $row['email'];

    // Redirigir a la página de usuario
    header("Location: ../Usuario/index.php?id=$row[id_usuario]");
} else {
    // Mostrar mensaje de error
    if (empty($email) || empty($password)) {
        echo "Campos vacíos";
    } else {
        echo "Acceso denegado";
    }
}

// Cerrar conexión a la base de datos
mysqli_close($conn);
