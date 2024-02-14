<?php
include("../Config/confg.php");
include("../View/VPlantilla.php");

$sql = "SELECT * FROM plato as PL inner join tipoplato as TP on TP.tipoId = PL.tipoId";
$resultado = mysqli_query($conexion, $sql);

$pdf = new PDF();
$pdf->AliasNbPages();
$pdf->AddPage();

$pdf->SetFont('Arial', 'I', 10);
$pdf->Ln(20);

// Calcular el ancho total de la tabla
$anchoTotal = 15 + 20 + 20 + 20 + 25 + 20 + 20 + 15;

// Calcular la posición X para centrar la tabla
$centroX = ($pdf->GetPageWidth() - $anchoTotal) / 2;

$pdf->SetX($centroX);

// Colores de fondo de las celdas (rojo claro)
$rojoClaro = 255; // Valor máximo para obtener un rojo claro
$pdf->SetFillColor($rojoClaro, $rojoClaro - 50, $rojoClaro - 50); // Rojo claro
$pdf->Cell(15, 5, 'ID Plato', 1, 0, 'C', true);
$pdf->Cell(30, 5, 'Nombre', 1, 0, 'C', true);
$pdf->Cell(25, 5, 'Imagen', 1, 0, 'C', true);
$pdf->Cell(40, 5, 'Descripcion', 1, 0, 'C', true);
$pdf->Cell(25, 5, 'Precio', 1, 0, 'C', true);
$pdf->Cell(35, 5, 'Tipo', 1, 0, 'C', true);
$pdf->Ln();

while ($mostrar = mysqli_fetch_array($resultado)) {
    $pdf->SetX($centroX);
    // Iniciar una nueva fila
    $pdf->Cell(15, 20, $mostrar['platoId'], 1, 0, 'C',);
    $pdf->Cell(30, 20, $mostrar['nombrePlato'], 1, 0, 'C');
    // Mostrar la imagen dentro de la celda
    $pdf->Cell(25, 20, $pdf->Image('../img/platos_IMG/' . $mostrar['imagenP'], $pdf->GetX(), $pdf->GetY(), 25, 20), 1, 0, 'C');
    $pdf->Cell(40, 20, $mostrar['descripcionPlato'], 1, 0, 'L');
    $pdf->Cell(25, 20, "$".$mostrar['precio'], 1, 0, 'C');
    $pdf->Cell(35, 20, $mostrar['nombreTipo'], 1, 0, 'C');
    $pdf->Ln(); // Salto de línea después de cada fila
}


$pdf->Output('I', 'reporte_Platos.pdf');
?>
