<?php
include("../Config/confg.php");

$usuario = $_POST['login-username'];
$contraseña = $_POST['login-password'];
$tipoUsuario = $_POST['login-type']; // Utilizar el campo login-type

$sql = "SELECT * FROM Users WHERE nombreUsuario='$usuario' AND clave ='$contraseña'";
$resultado = mysqli_query($conexion, $sql);

$filas = mysqli_num_rows($resultado);

if ($filas) {
    $usuario_info = mysqli_fetch_assoc($resultado);
    $tipoUsuarioDB = $usuario_info['tipoUsuario'];
    
    // Redireccionar según el tipo de usuario
    if ($tipoUsuarioDB == 1) {
        header("Location: ../View/VInicioAdmin.php");
        exit;
    } elseif ($tipoUsuarioDB == 2) {
        header("Location: ../View/VInicioCliente.php");
        exit;
    }
} else {
    echo "<h1>Error: Usuario o contraseña incorrectos</h1>";
}

mysqli_free_result($resultado);
mysqli_close($conexion);
?>


