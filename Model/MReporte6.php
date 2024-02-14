<?php

//REPORTE DE OPINION DE PLATOS
    include("../Config/confg.php");
    include("../View/VPlantilla.php");

    $sql = "SELECT TP.nombreTipo,COUNT(PL.platoId) as total_platos
    FROM tipoplato as TP 
    INNER JOIN plato as PL ON TP.tipoId = PL.tipoId 
    GROUP BY TP.nombreTipo;";

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
$anchoTotal = 15 + 20 + 20 + 20 + 25 + 20;

// Calcular la posición X para centrar la tabla
$centroX = ($pdf->GetPageWidth() - $anchoTotal) / 2;

$pdf->SetX($centroX);

// Colores de fondo de las celdas (rojo claro)
$rojoClaro = 255; // Valor máximo para obtener un rojo claro
$pdf->SetFillColor($rojoClaro, $rojoClaro - 50, $rojoClaro - 50); // Rojo claro
$pdf->Cell(30, 4, 'Tipo de Plato', 1, 0, 'C', true);
$pdf->Cell(30, 4, 'Total', 1, 0, 'C', true);
$pdf->Ln();

while ($mostrar = mysqli_fetch_array($resultado)) {
    $pdf->SetX($centroX);
    $pdf->Cell(30, 4, $mostrar['nombreTipo'], 1, 0, 'C');
    $pdf->Cell(30, 4, $mostrar['total_platos'], 1, 0, 'C');
    $pdf->Ln(); // Salto de línea después de cada fila
}

$pdf->Output('I','Reporte_Total_Tipo_Platos.pdf');

?>
