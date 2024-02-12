<?php
include("../Config/confg.php");


    $userId = $_POST['userId'];
    $nombreUsuario = $_POST['nombreUsuario'];
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $email = $_POST['email'];
    $telefono = $_POST['telefono'];
    $clave = $_POST['clave'];
    $tipoUsuario = $_POST['tipoUsuario'];

    // Actualizar los datos del usuario en la base de datos
    $sql = "UPDATE Users SET nombre='$nombre', apellido='$apellido', email='$email', telefono='$telefono', tipoUsuario=$tipoUsuario WHERE userId=$userId";
    $resultado = mysqli_query($conexion, $sql);
    if ($resultado)
    header("location:../View/VLogin.php");
    else
        echo "Error al Editar";

 
?>
