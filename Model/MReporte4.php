<?php

//REPORTE DE OPINION DE PLATOS
    include("../Config/confg.php");
    include("../View/VPlantilla.php");

    $sql = "SELECT US.nombreUsuario, PL.nombrePlato, PL.precio, OP.opinion, ROUND(AVG(OP.puntuacion), 2) as promedio_puntuacion 
    FROM tipoplato as TP 
    INNER JOIN plato as PL ON TP.tipoId = PL.tipoId 
    INNER JOIN opinion as OP ON OP.platoId = PL.platoId 
    INNER JOIN users US ON US.userId = OP.userId 
    GROUP BY PL.nombrePlato, PL.precio, OP.opinion 
    ORDER BY promedio_puntuacion DESC 
    LIMIT 5;
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
$anchoTotal = 15 + 20 + 20 + 20 + 25 + 20;

// Calcular la posición X para centrar la tabla
$centroX = ($pdf->GetPageWidth() - $anchoTotal) / 2;

$pdf->SetX($centroX);

// Colores de fondo de las celdas (rojo claro)
$rojoClaro = 255; // Valor máximo para obtener un rojo claro
$pdf->SetFillColor($rojoClaro, $rojoClaro - 50, $rojoClaro - 50); // Rojo claro
$pdf->Cell(20, 4, 'USUARIO', 1, 0, 'C', true);
$pdf->Cell(30, 4, 'PLATO', 1, 0, 'C', true);
$pdf->Cell(25, 4, 'PRECIO', 1, 0, 'C', true);
$pdf->Cell(40, 4, 'OPINION', 1, 0, 'C', true);
$pdf->Cell(30, 4, 'VALORACION', 1, 0, 'C', true);
$pdf->Ln();

while ($mostrar = mysqli_fetch_array($resultado)) {
    $pdf->SetX($centroX);
    $pdf->Cell(20, 4, $mostrar['nombreUsuario'], 1, 0, 'C');
    $pdf->Cell(30, 4, $mostrar['nombrePlato'], 1, 0, 'C');
    $pdf->Cell(25, 4, "$".$mostrar['precio'], 1, 0, 'C');
    $pdf->Cell(40, 4, $mostrar['opinion'], 1, 0, 'C');
    $pdf->Cell(30, 4, $mostrar['promedio_puntuacion'], 1, 0, 'C');
    $pdf->Ln(); // Salto de línea después de cada fila
}

$pdf->Output('I','Reporte_Opinion.pdf');

?>
