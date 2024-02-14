<?php
include("../Config/confg.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtener los datos del formulario
    $usuario = mysqli_real_escape_string($conexion, $_POST['register-username']);
    $contraseña = mysqli_real_escape_string($conexion, $_POST['register-password']);
    $email = mysqli_real_escape_string($conexion, $_POST['register-email']);
    $nombre = mysqli_real_escape_string($conexion, $_POST['register-name']);
    $apellido = mysqli_real_escape_string($conexion, $_POST['register-lastname']);
    $telefono = mysqli_real_escape_string($conexion, $_POST['register-phone']);
    $tipoUsuario = 2;

    // Verificar si el usuario ya existe en la base de datos
    $sql_check = "SELECT * FROM Users WHERE nombreUsuario='$usuario' OR email='$email'";
    $result_check = mysqli_query($conexion, $sql_check);
    if (mysqli_num_rows($result_check) > 0) {
        echo "<h1>Error: Usuario o contraseña existentes</h1>";
        exit;
    }

    // Consulta SQL para insertar los datos en la tabla Users
    $sql = "INSERT INTO Users (nombreUsuario, nombre, apellido, email, telefono, clave, tipoUsuario) 
            VALUES ('$usuario', '$nombre', '$apellido', '$email', '$telefono', '$contraseña', '$tipoUsuario')";

    // Ejecutar la consulta
    $resultado = mysqli_query($conexion, $sql);

    // Verificar si la inserción fue exitosa
    if ($resultado) {
        echo "<script>alert('Usuario creado exitosamente');</script>"; 
        header("Location: ../View/VLogin.php");
        exit;
    } else {
        echo "<h1>Error al insertar los datos en la base de datos: " . mysqli_error($conexion) . "</h1>";
        exit;
    }
} else {
    echo "<h1>Error: Acceso no permitido</h1>";
    exit;
}

mysqli_close($conexion);
?>
