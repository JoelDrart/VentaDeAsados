<?php
include("../Config/confg.php");
include("../View/VPlantilla.php");

$sql = "SELECT * FROM users";
$resultado = mysqli_query($conexion, $sql);

$pdf = new PDF();
$pdf->AliasNbPages();
$pdf->AddPage();

$pdf->SetFont('Arial', 'I', 4);
$pdf->Ln(20);

// Calcular el ancho total de la tabla
$anchoTotal = 15 + 20 + 20 + 20 + 25 + 20 + 20 + 15;

// Calcular la posición X para centrar la tabla
$centroX = ($pdf->GetPageWidth() - $anchoTotal) / 2;

$pdf->SetX($centroX);

// Colores de fondo de las celdas (rojo claro)
$rojoClaro = 255; // Valor máximo para obtener un rojo claro
$pdf->SetFillColor($rojoClaro, $rojoClaro - 50, $rojoClaro - 50); // Rojo claro
$pdf->Cell(15, 4, 'UserId', 1, 0, 'C', true);
$pdf->Cell(20, 4, 'UserNombre', 1, 0, 'C', true);
$pdf->Cell(20, 4, 'Nombre', 1, 0, 'C', true);
$pdf->Cell(20, 4, 'Apellido', 1, 0, 'C', true);
$pdf->Cell(25, 4, 'Email', 1, 0, 'C', true);
$pdf->Cell(20, 4, 'Teléfono', 1, 0, 'C', true);
$pdf->Cell(20, 4, 'Contraseña', 1, 0, 'C', true);
$pdf->Cell(15, 4, 'Tipo', 1, 0, 'C', true);
$pdf->Ln();

while ($mostrar = mysqli_fetch_array($resultado)) {
    $pdf->SetX($centroX);
    $pdf->Cell(15, 4, $mostrar['userId'], 1, 0, 'C');
    $pdf->Cell(20, 4, $mostrar['nombreUsuario'], 1, 0, 'C');
    $pdf->Cell(20, 4, $mostrar['nombre'], 1, 0, 'C');
    $pdf->Cell(20, 4, $mostrar['apellido'], 1, 0, 'C');
    $pdf->Cell(25, 4, $mostrar['email'], 1, 0, 'C');
    $pdf->Cell(20, 4, $mostrar['telefono'], 1, 0, 'C');
    $pdf->Cell(20, 4, $mostrar['clave'], 1, 0, 'C');
    $pdf->Cell(15, 4, $mostrar['tipoUsuario'], 1, 0, 'C');
    $pdf->Ln(); // Salto de línea después de cada fila
}

$pdf->Output('I');
?>
