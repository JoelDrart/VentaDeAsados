<?php
include("../Config/confg.php");
include("../View/VPlantilla.php");

$sql = "SELECT * FROM Users";
$resultado = mysqli_query($conexion, $sql);

$pdf = new PDF();
$pdf->AliasNbPages();
$pdf->AddPage();

$pdf->SetFont('Arial', 'B', 16);
$pdf->Cell(30, 6, 'UserId', 1, 0, 'C');
$pdf->Cell(30, 6, 'UserNombre', 1, 0, 'C');
$pdf->Cell(30, 6, 'Nombre', 1, 0, 'C');
$pdf->Cell(30, 6, 'Email', 1, 0, 'C');
$pdf->Cell(30, 6, 'Teléfono', 1, 0, 'C');
$pdf->Cell(30, 6, 'Contraseña', 1, 0, 'C');
$pdf->Cell(30, 6, 'Tipo', 1, 0, 'C');
$pdf->Ln(); // Salto de línea después de la fila de encabezado

while ($mostrar = mysqli_fetch_array($resultado)) {
    $pdf->Cell(30, 6, $mostrar['userId'], 1, 0, 'C');
    $pdf->Cell(30, 6, $mostrar['nombreUsuario'], 1, 0, 'C');
    $pdf->Cell(30, 6, $mostrar['nombre'], 1, 0, 'C');
    $pdf->Cell(30, 6, $mostrar['apellido'], 1, 0, 'C');
    $pdf->Cell(30, 6, $mostrar['email'], 1, 0, 'C');
    $pdf->Cell(30, 6, $mostrar['telefono'], 1, 0, 'C');
    $pdf->Cell(30, 6, $mostrar['clave'], 1, 0, 'C');
    $pdf->Cell(30, 6, $mostrar['tipoUsuario'], 1, 0, 'C');
    $pdf->Ln(); // Salto de línea después de cada fila
}

$pdf->Output('I');
?>
