<?php
$conexion = mysqli_connect('localhost','root','','VentaDeAsados');
function obtenerNombreUsuarioPorId($userId) {
    global $conexion;
    
    $sql = "SELECT nombre FROM Users WHERE userId = $userId";
    $resultado = $conexion->query($sql);

    if ($resultado->num_rows > 0) {
        $fila = $resultado->fetch_assoc();
        return $fila["nombre"];
    } else {
        return "Usuario no encontrado";
    }
}
function esAdmin($userId) {
    global $conexion;
    
    $sql = "SELECT tipoUsuario FROM Users WHERE userId = $userId";
    $resultado = $conexion->query($sql);

    if ($resultado->num_rows > 0) {
        $fila = $resultado->fetch_assoc();
        return $fila["tipoUsuario"] == 1;
    } else {
        return false;
    }
}

?>