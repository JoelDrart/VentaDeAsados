<?php
include("../Config/confg.php");

// Verificar si se recibió el formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Obtener los datos del formulario
    $idPlato = $_POST['idPlato'];
    $idUsuario = $_POST['idUsuario'];
    $calificacion = $_POST['calificacion'];
    $comentario = $_POST['comentario'];

    // Puedes realizar validaciones y procesamiento adicional aquí

    // Ahora puedes almacenar estos datos en la base de datos o realizar cualquier otra acción necesaria
    // ...
    $sql = "INSERT INTO Opinion (platoId, userId, puntuacion, opinion) VALUES ('$idPlato', '$idUsuario', '$calificacion', '$comentario')";
    $resultado = mysqli_query($conexion,$sql);
    if ($resultado) {
        echo "Opinión registrada correctamente";
        echo "<script>location.href='../controller/controlador.php?var1=8'</script>";
    } else {
        echo "Error al registrar la opinión: " . mysqli_error($conexion);
    }

    // Ejemplo de cómo podrías mostrar los datos
    echo "ID Plato: $idPlato<br>";
    echo "ID Usuario: $idUsuario<br>";
    echo "Calificación: $calificacion<br>";
    echo "Comentario: $comentario<br>";

    // Aquí puedes realizar las operaciones necesarias con estos datos en la base de datos
    // ...

} else {
    // Si el formulario no fue enviado, puedes redirigir o mostrar un mensaje de error
    echo "Error: El formulario no ha sido enviado.";
}
?>
