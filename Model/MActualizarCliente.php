<?php
include("../Config/confg.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtener los datos del formulario
    $usuario = $_POST['register-username'];
    $contraseña = $_POST['register-password'];

    // Verificar si existen el register-username y register-password
    if (isset($usuario) && isset($contraseña)) {
        // Consultar todos los datos del usuario
        $sql = "SELECT * FROM Users WHERE nombreUsuario='$usuario' AND clave ='$contraseña'";
        $resultado = mysqli_query($conexion, $sql);

        $filas = mysqli_num_rows($resultado);

        if ($filas) {
            $usuario_info = mysqli_fetch_assoc($resultado);
            // Obtener los datos del usuario
            $userId = $usuario_info['userId'];
            $nombre = $usuario_info['nombre'];
            $apellido = $usuario_info['apellido'];
            $email = $usuario_info['email'];
            $telefono = $usuario_info['telefono'];
            $clave = $usuario_info['clave'];
            $tipoUsuario = $usuario_info['tipoUsuario'];

            // Mostrar el formulario para editar los datos del usuario
            ?>
            <!DOCTYPE html>
            <html lang="en">
            <head>
                <meta charset="UTF-8">
                <meta http-equiv="X-UA-Compatible" content="IE=edge">
                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                <title>Editar Usuario</title>
                <link rel="stylesheet" href="../css/styleEditar.css">
            </head>
            <body>
                <form action="../model/MActualizar.php" method="POST">
                    <h1>DATOS DEL USUARIO</h1>
                    <table border="1">
                        <tr>
                            <td>ID</td>
                            <td>Nombre de Usuario</td>
                            <td>Nombre</td>
                            <td>Apellido</td>
                            <td>Email</td>
                            <td>Teléfono</td>
                            <td>Clave</td>
                            <td>Tipo de Usuario</td>
                        </tr>
                        <tr>
                            <td><input type="text" size="4" name="userId" value="<?php echo $userId; ?>" readonly /></td>
                            <td><input type="text" name="nombreUsuario" value="<?php echo $usuario; ?>" /></td>
                            <td><input type="text" name="nombre" value="<?php echo $nombre; ?>" /></td>
                            <td><input type="text" name="apellido" value="<?php echo $apellido; ?>" /></td>
                            <td><input type="text" name="email" value="<?php echo $email; ?>" /></td>
                            <td><input type="text" name="telefono" value="<?php echo $telefono; ?>" /></td>
                            <td><input type="text" name="clave" value="<?php echo $clave; ?>" /></td>
                            <td>
                                <select name="tipoUsuario">
                                    <option value="1" <?php if ($tipoUsuario == 1) echo "selected"; ?>>Admin</option>
                                    <option value="2" <?php if ($tipoUsuario == 2) echo "selected"; ?>>Cliente</option>
                                </select>
                            </td>
                        </tr>
                    </table>
                    <input type="submit" value="Editar">
                </form>
            </body>
            </html>
            <?php
        } else {
            echo "<h1>Error: Usuario o contraseña incorrectos</h1>";
        }

        mysqli_free_result($resultado);
        mysqli_close($conexion);
    } else {
        echo "<script>alert('Error: Debes ingresar un usuario y contraseña');</script>";
        exit;
    }
} else {
    // Si el formulario no se envió por el método POST, redirigir a alguna página de error o mostrar un mensaje adecuado.
    echo "<script>alert('Error: Acceso no permitido');</script>";
    exit;
}
?>
