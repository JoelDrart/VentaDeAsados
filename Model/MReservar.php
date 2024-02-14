<?php
session_start();
include('../Config/confg.php');

// Verificar si se recibió el formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Recibir otros datos del formulario (fechaReserva, horaReserva, numPersonas, etc.)
    $userid = $_SESSION['userId'];
    $fechaReserva = $_POST['fechaReserva'];
    $horaReserva = $_POST['horaReserva'];
    $numPersonas = $_POST['numPersonas'];
    $opcionSeleccionada = $_POST['tipoReserva'];

    // Recibir cantidades de platos
    $platoCantidades = $_POST['platoCantidad'];

    // Filtrar y eliminar platos con cantidad igual a 0
    $platoCantidades = array_filter($platoCantidades, function ($cantidad) {
        return $cantidad > 0;
    });

    // Validar si hay al menos un plato seleccionado
    if (empty($platoCantidades)) {
        echo "Error: Debes seleccionar al menos un plato.";
    } else {
        // Aquí puedes realizar la lógica de almacenamiento en la base de datos
        // ...


        // Calcular el total de la reserva
        $totalReserva = 0;

        foreach ($platoCantidades as $platoId => $cantidad) {
            // Obtener el precio del plato desde la base de datos
            $sqlPrecio = "SELECT precio FROM plato WHERE platoId = $platoId";
            $resultadoPrecio = mysqli_query($conexion, $sqlPrecio);

            if ($filaPrecio = mysqli_fetch_assoc($resultadoPrecio)) {
                $precioPlato = $filaPrecio['precio'];

                // Calcular el subtotal del plato (cantidad * precio)
                $subtotal = $cantidad * $precioPlato;

                // Sumar al total general
                $totalReserva += $subtotal;
            }
        }

        // Insertar en la base de datos
        $sqlInsertar = "INSERT INTO Reserva (fechaReserva, horaReserva, tipoReserva, userId, totalPrecio) 
                VALUES ('$fechaReserva', '$horaReserva', $opcionSeleccionada, $userid, $totalReserva)";
        
        $resultadoReserva = mysqli_query($conexion, $sqlInsertar);

        if ($resultadoReserva) {
            echo "Reserva realizada con éxito. Total: $totalReserva <br>";

            // Obtener el último reservaId
            $sqlReservaId = "SELECT reservaId FROM Reserva ORDER BY reservaId DESC LIMIT 1";
            $resultado = mysqli_query($conexion, $sqlReservaId);
            $ultimoReservaId = 0;

            if ($resultado) {
                $fila = mysqli_fetch_assoc($resultado);

                if ($fila) {
                    $ultimoReservaId = $fila['reservaId'];
                    echo "El último reservaId es: $ultimoReservaId <br>";

                    // Insertar detalles de reserva
                    foreach ($platoCantidades as $platoId => $cantidad) {
                        $sqlPrecio = "SELECT precio FROM plato WHERE platoId = $platoId";
                        $resultadoPrecio = mysqli_query($conexion, $sqlPrecio);

                        if ($filaPrecio = mysqli_fetch_assoc($resultadoPrecio)) {
                            $precioPlato = $filaPrecio['precio'];
                            $subtotal = $cantidad * $precioPlato;

                            // Agregar el plato al id de la reserva en la tabla detallereserva
                            $sqlInsertarDetalle = "INSERT INTO DetalleReserva (reservaId, platoId, cantidad, precio, subtotal) 
                                     VALUES ($ultimoReservaId, $platoId, $cantidad, $precioPlato, $subtotal)";
                            
                            $resultadoDetalle = mysqli_query($conexion, $sqlInsertarDetalle);

                            if ($resultadoDetalle) {
                                echo "Detalle de reserva realizado con éxito. Subtotal: $subtotal <br>";
                            } else {
                                echo "Error al realizar el detalle de reserva: " . mysqli_error($conexion);
                                // Redireccionar a la página de fallo
                                header("Location: ../View/VReservaFallo.php");
                                exit();
                            }
                        }
                    }

                    // Cerrar la conexión
                    mysqli_close($conexion);

                    // Redireccionar a la página de éxito
                    header("Location: ../View/VReservaExito.php");
                    exit(); // Asegurarse de que no haya más salida después de la redirección
                } else {
                    echo "No se encontraron resultados en la tabla Reserva.";
                    // Redireccionar a la página de fallo
                    header("Location: ../View/VReservaFallo.php");
                    exit();
                }
            } else {
                echo "Error en la consulta: " . mysqli_error($conexion);
                // Redireccionar a la página de fallo
                header("Location: ../View/VReservaFallo.php");
                exit();
            }

            echo "ReservaId: $ultimoReservaId<br>";
        } else {
            echo "Error al realizar la reserva: " . mysqli_error($conexion);
            // Redireccionar a la página de fallo
            header("Location: ../View/VReservaFallo.php");
            exit();
        }
    }
} else {
    // Si el formulario no fue enviado, puedes redirigir o mostrar un mensaje de error
    echo "Error: El formulario no ha sido enviado.";
}
