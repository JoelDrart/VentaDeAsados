<?php

include("../Config/confg.php");

$idE = $_GET["id"];

// Elimina la imagen adjunta al id
$imagenSql="SELECT imagenP FROM plato WHERE platoId=$idE";
$EliminarImg=mysqli_query($conexion,$imagenSql);

if ($EliminarImg) {
    $imagen = mysqli_fetch_assoc($EliminarImg);
    $nombreImagen = $imagen['imagenP'];
    // Eliminar la imagen
    $rutaImagen = "../img/platos_IMG/" . $nombreImagen;
    unlink($rutaImagen);
}
$sql = "DELETE from plato where platoId = $idE";

$resultado=mysqli_query($conexion,$sql);

if ($resultado) {
    header("location:../View/VIngresarPlato.php");
}    else{
    echo "No se elimino";
}
?>