<?php
session_start();

// Destruye todas las variables de sesión
session_destroy();

// Redirige a la página de inicio de sesión u otra página deseada
header("Location: ../View/VIinicio.php");
exit;
?>