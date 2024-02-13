<?php
include("../Config/confg.php");

// Obtener el ID del usuario a eliminar
$userId = $_POST['userId'];

$sql = "DELETE FROM Users WHERE userId=$userId";
$resultado = mysqli_query($conexion, $sql);

if ($resultado) {
    header("Location: ../View/VInicioAdmin.php");
} else {
    echo "Error al eliminar el usuario";
}

mysqli_close($conexion);
?>
