<?php
include("../Config/confg.php");

// Obtener el ID del usuario a eliminar
$userId = $_POST['userId'];

// Verificar si se recibió el userId
if (isset($userId)) {
    $sql = "DELETE FROM users WHERE userId=$userId";
    $resultado = mysqli_query($conexion, $sql);

    if ($resultado) {
        header("Location: ../View/VInicioAdmin.php");
    } else {
        echo "Error al eliminar el usuario";
    }
} else {
    echo "Error: No se recibió el ID del usuario a eliminar";
}

mysqli_close($conexion);
?>
