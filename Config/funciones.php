<?php
include("../config/confg.php");
function obtenerNombreUsuarioPorId($userId) {
    global $conexion;
    
    $sql = "SELECT nombre FROM users WHERE userId = $userId";
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
    
    $sql = "SELECT tipoUsuario FROM users WHERE userId = $userId";
    $resultado = $conexion->query($sql);

    if ($resultado->num_rows > 0) {
        $fila = $resultado->fetch_assoc();
        return $fila["tipoUsuario"] == 1;
    } else {
        return false;
    }
}
function obtenerNombrePlatoPorId($platoId) {
    global $conexion;
    
    $sql = "SELECT nombrePlato FROM plato WHERE platoId = $platoId";
    $resultado = $conexion->query($sql);

    if ($resultado->num_rows > 0) {
        $fila = $resultado->fetch_assoc();
        return $fila["nombrePlato"];
    } else {
        return "Plato no encontrado";
    }
}

?>