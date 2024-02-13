<?php
include("../Config/confg.php");


$nombre_P = $_POST["nombreP"];
$precio_P = $_POST["precioP"];
$descripcion_P = $_POST["descripcionP"];
$tipoId_P = $_POST["tipoP"];

$resultado = $sql = "INSERT INTO `plato`( `nombrePlato`, `descripcionPlato`, `precio`, `tipoId`) VALUES ('$nombre_P','$descripcion_P','$precio_P','$tipoId_P') ";

mysqli_query($conexion, $sql);

?>