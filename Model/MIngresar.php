<?php
include("../Config/confg.php");


$nombre_P = $_POST["nombreP"];
$imagen_P = $_FILES['archivo']['name'];
$precio_P = $_POST["precioP"];
$descripcion_P = $_POST["descripcionP"];
$tipoId_P = $_POST["tipoP"];

$imagen_Temp = $_FILES['archivo']['tmp_name'];

move_uploaded_file($imagen_Temp,"../img/platos_IMG/".$imagen_P);

$resultado = $sql = "INSERT INTO `plato`( `nombrePlato`, `imagenP`, `descripcionPlato`, `precio`, `tipoId`) VALUES ('$nombre_P','$imagen_P','$descripcion_P','$precio_P','$tipoId_P') ";

mysqli_query($conexion, $sql);
header("location:../View/VIngresarPlato.php");
?>