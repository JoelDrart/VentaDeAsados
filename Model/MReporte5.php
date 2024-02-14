<?php

//REPORTE DE OPINION DE PLATOS
    include("../Config/confg.php");
    include("../View/VPlantilla.php");

    $sql = "SELECT P.platoId AS IDPlato, P.nombrePlato AS NombrePlato, COUNT(DR.platoId) AS TotalReservas
    FROM detallereserva DR
    JOIN plato P ON DR.platoId = P.platoId
    GROUP BY P.platoId, P.nombrePlato
    ORDER BY TotalReservas DESC
    LIMIT 10;    
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
    $pdf->SetFont('Arial', 'I', 8);
    $pdf->Ln(20);
    // $pdf->FancyReservaTable($header,$data);
    // $pdf->Output();

    // Calcular el ancho total de la tabla
$anchoTotal = 15 + 20 + 20;

// Calcular la posición X para centrar la tabla
$centroX = ($pdf->GetPageWidth() - $anchoTotal) / 2;

$pdf->SetX($centroX);

// Colores de fondo de las celdas (rojo claro)
$rojoClaro = 255; // Valor máximo para obtener un rojo claro
$pdf->SetFillColor($rojoClaro, $rojoClaro - 50, $rojoClaro - 50); // Rojo claro
$pdf->Cell(20, 4, 'ID Plato', 1, 0, 'C', true);
$pdf->Cell(30, 4, 'PLATO', 1, 0, 'C', true);
$pdf->Cell(25, 4, 'Total Reservas', 1, 0, 'C', true);
// $pdf->Cell(40, 4, 'OPINION', 1, 0, 'C', true);
// $pdf->Cell(30, 4, 'VALORACION', 1, 0, 'C', true);
$pdf->Ln();

while ($mostrar = mysqli_fetch_array($resultado)) {
    $pdf->SetX($centroX);
    $pdf->Cell(20, 4, $mostrar['IDPlato'], 1, 0, 'C');
    $pdf->Cell(30, 4, $mostrar['NombrePlato'], 1, 0, 'C');
    $pdf->Cell(25, 4, $mostrar['TotalReservas'], 1, 0, 'C');
    // $pdf->Cell(40, 4, $mostrar['opinion'], 1, 0, 'C');
    // $pdf->Cell(30, 4, $mostrar['promedio_puntuacion'], 1, 0, 'C');
    $pdf->Ln(); // Salto de línea después de cada fila
}

$pdf->Output('I','Reporte_Platos_Mejores.pdf');

?>
