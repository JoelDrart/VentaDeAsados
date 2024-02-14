<?php
require('../fpdf182/fpdf.php');

class PDF extends FPDF
{
    // Cabecera de página
    function Header()
    {
        // Logo
        $this->Image('../images/logo.png',10,8,33);
        // Título
        $this->SetFont('Arial','I',15);
        $this->Cell(0,10,'LA ESQUINA DEL SABOR',0,1,'C');
        // Línea de separación
        $this->Line(10, 42, 200, 42);
        $this->Ln(10); // Espacio después del título
    }

    // Pie de página
    function Footer()
    {
        // Posición: a 1,5 cm del final
        $this->SetY(-15);

        // Número de página
        $this->SetFont('Arial','I',8);
        $this->Cell(0,10,'Page '.$this->PageNo().'/{nb}',0,0,'C');
        // Nombre de la empresa
        $this->Ln(5); // Espacio antes del nombre
        $this->SetFont('Arial','',10);
        $this->Cell(0,10,'LA ESQUINA DEL SABOR',0,0,'C');
    }
}
?>
