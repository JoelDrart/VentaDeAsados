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
    // Verificar si la actualización fue exitosa
    if (mysqli_affected_rows($conexion) > 0) {
        // Redirigir al usuario a la página de ingreso de datos con un mensaje de éxito
        header("Location: ../View/VIngresarPlato.php?success=true");
    } else {
        echo "No se encontró ningún plato para actualizar.";
    }
} else {
    echo "Error al actualizar el plato: " . mysqli_error($conexion);
}

mysqli_close($conexion);
?>


