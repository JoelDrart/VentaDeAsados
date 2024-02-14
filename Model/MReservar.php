<?php
session_start();
// Verificar si se recibió el formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Recibir otros datos del formulario (fechaReserva, horaReserva, numPersonas, etc.)
    $userid = $_SESSION['userId'];
    $fechaReserva = $_POST['fechaReserva'];
    $horaReserva = $_POST['horaReserva'];
    $numPersonas = $_POST['numPersonas'];

    // Recibir cantidades de platos
    $platoCantidades = $_POST['platoCantidad'];

    // Filtrar y eliminar platos con cantidad igual a 0
    $platoCantidades = array_filter($platoCantidades, function ($cantidad) {
        return $cantidad > 0;
    });

    // Ahora, $platoCantidades contiene solo los platos con cantidades mayores a 0

    // Aquí puedes realizar la lógica de almacenamiento en la base de datos
    // ...

    // Ejemplo de cómo podrías mostrar los platos reservados
    echo "Fecha de reserva: $fechaReserva<br>";
    echo "Hora de reserva: $horaReserva<br>";
    echo "Número de personas: $numPersonas<br>";
    echo "USER ID: $userid<br>";
    echo "Platos reservados:";
    foreach ($platoCantidades as $platoId => $cantidad) {
        echo "Plato ID: $platoId, Cantidad: $cantidad","<br>";
        // Aquí puedes almacenar la información en la base de datos
        // ...
    }
} else {
    // Si el formulario no fue enviado, puedes redirigir o mostrar un mensaje de error
    echo "Error: El formulario no ha sido enviado.";
}

?>
