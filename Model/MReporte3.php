<?php
    include("../Config/confg.php");
    include("../View/VPlantilla.php");

    $sql = "SELECT R.reservaId AS IDReserva, U.nombre AS NombreCliente, R.fechaReserva AS FechaReserva, R.horaReserva AS HoraReserva, TR.nombreReserva AS Tipo, R.totalPrecio AS TotalCobrar
            FROM Reserva R JOIN Users U ON R.userId = U.userId
                JOIN TipoReserva TR ON R.tipoReserva = TR.tipoReserva 
    ";

        // Perform the query
        $resultado = mysqli_query($conexion, $sql);


    //     // Close the database connection
    //     mysqli_close($conexion);

    $pdf = new PDF();
    $pdf->AliasNbPages();
    // Títulos de las columnas
    // $header = array('ID Reserva', 'Fecha', 'Hora', 'Tipo', 'Cliente', 'TotalCobrar');
    // Carga de datos
    // $data = $pdf->LoadData('paises.txt');
    $pdf->AddPage();
    $pdf->SetFont('Arial', 'I', 4);
    $pdf->Ln(20);
    // $pdf->FancyReservaTable($header,$data);
    // $pdf->Output();

    // Calcular el ancho total de la tabla
$anchoTotal = 15 + 20 + 20 + 20 + 25 + 20;

// Calcular la posición X para centrar la tabla
$centroX = ($pdf->GetPageWidth() - $anchoTotal) / 2;

$pdf->SetX($centroX);

// Colores de fondo de las celdas (rojo claro)
$rojoClaro = 255; // Valor máximo para obtener un rojo claro
$pdf->SetFillColor($rojoClaro, $rojoClaro - 50, $rojoClaro - 50); // Rojo claro
$pdf->Cell(15, 4, 'IDReserva', 1, 0, 'C', true);
$pdf->Cell(20, 4, 'NombreCliente', 1, 0, 'C', true);
$pdf->Cell(20, 4, 'FechaReserva', 1, 0, 'C', true);
$pdf->Cell(20, 4, 'HoraReserva', 1, 0, 'C', true);
$pdf->Cell(25, 4, 'Tipo', 1, 0, 'C', true);
$pdf->Cell(20, 4, 'TotalCobrar', 1, 0, 'C', true);
// $pdf->Cell(20, 4, 'Contraseña', 1, 0, 'C', true);
// $pdf->Cell(15, 4, 'Tipo', 1, 0, 'C', true);
$pdf->Ln();

while ($mostrar = mysqli_fetch_array($resultado)) {
    $pdf->SetX($centroX);
    $pdf->Cell(15, 4, $mostrar['IDReserva'], 1, 0, 'C');
    $pdf->Cell(20, 4, $mostrar['NombreCliente'], 1, 0, 'C');
    $pdf->Cell(20, 4, $mostrar['FechaReserva'], 1, 0, 'C');
    $pdf->Cell(20, 4, $mostrar['HoraReserva'], 1, 0, 'C');
    $pdf->Cell(25, 4, $mostrar['Tipo'], 1, 0, 'C');
    $pdf->Cell(20, 4, $mostrar['TotalCobrar'], 1, 0, 'C');
    // $pdf->Cell(20, 4, $mostrar['clave'], 1, 0, 'C');
    // $pdf->Cell(15, 4, $mostrar['tipoUsuario'], 1, 0, 'C');
    $pdf->Ln(); // Salto de línea después de cada fila
}

$pdf->Output('I');

?>
