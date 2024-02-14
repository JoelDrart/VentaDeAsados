<?php
session_start();

// Destruye todas las variables de sesión
session_destroy();

// Redirige a la página de inicio de sesión u otra página deseada
header("Location: ../Controller/controlador.php?var1=1");
exit;
?>