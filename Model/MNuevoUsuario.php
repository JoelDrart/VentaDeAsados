<?php
include("../Config/confg.php");
<link rel="stylesheet" href="../javascript/scriptLog.js">
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtener los datos del formulario
    $usuario = mysqli_real_escape_string($conexion, $_POST['register-username']);
    $contraseña = mysqli_real_escape_string($conexion, $_POST['register-password']);
    $email = mysqli_real_escape_string($conexion, $_POST['register-email']);
    $nombre = mysqli_real_escape_string($conexion, $_POST['register-name']);
    $apellido = mysqli_real_escape_string($conexion, $_POST['register-lastname']);
    $telefono = mysqli_real_escape_string($conexion, $_POST['register-phone']);
    $tipoUsuario = mysqli_real_escape_string($conexion, $_POST['register-type']);

    // Verificar si el usuario ya existe en la base de datos
    $sql_check = "SELECT * FROM Users WHERE nombreUsuario='$usuario' OR email='$email'";
    $result_check = mysqli_query($conexion, $sql_check);
    if (mysqli_num_rows($result_check) > 0) {
        // Mostrar mensaje de error en un alert
        echo "<script>alert('Error: El usuario o el correo electrónico ya están registrados');</script>";
        exit;
    }

    // Consulta SQL para insertar los datos en la tabla Users
    $sql = "INSERT INTO Users (nombreUsuario, nombre, apellido, email, telefono, clave, tipoUsuario) 
            VALUES ('$usuario', '$nombre', '$apellido', '$email', '$telefono', '$contraseña', '$tipoUsuario')";

    // Ejecutar la consulta
    $resultado = mysqli_query($conexion, $sql);

    // Verificar si la inserción fue exitosa
    if ($resultado) {
        // Redirigir según el tipo de usuario registrado
        if ($tipoUsuario == 1) {
            header("Location: ../View/VInicioAdmin.php"); // Redirigir a la página de inicio de Admin
        } elseif ($tipoUsuario == 2) {
            header("Location: ../View/VInicioCliente.php"); // Redirigir a la página de inicio de Usuario
        } else {
            // Tipo de usuario desconocido, manejar de acuerdo a tus necesidades
            echo "<script>alert('Error: Tipo de usuario desconocido');</script>";
            exit;
        }
    } else {
        // Mostrar mensaje de error en un alert
        echo "<script>alert('Error al insertar los datos en la base de datos: " . mysqli_error($conexion) . "');</script>";
        exit;
    }
} else {
    // Si el formulario no se envió por el método POST, redirigir a alguna página de error o mostrar un mensaje adecuado.
    echo "<script>alert('Error: Acceso no permitido');</script>";
    exit;
}

mysqli_close($conexion);
?>
