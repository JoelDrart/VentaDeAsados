<?php
include("../Config/confg.php");

// Obtener los datos del formulario
$platoId = $_POST['platoId'];
$nombre = $_POST['nombreP'];
$descripcion = $_POST['descripcionP'];
$precio = $_POST['precioP'];
$tipo = $_POST['tipoP'];

// Actualizar el plato en la base de datos
$sql = "UPDATE Plato SET nombrePlato='$nombre', descripcionPlato='$descripcion', precio='$precio', tipoId='$tipo' WHERE platoId='$platoId'";

if (mysqli_query($conexion, $sql)) {
    header("Location: ../View/VEditarPlato.php?id=$platoId&success=true");
} else {
    echo "Error al actualizar el plato: " . mysqli_error($conexion);
}

mysqli_close($conexion);
?>
