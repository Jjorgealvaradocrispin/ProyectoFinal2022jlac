<?php
require('pdfs/fpdf.php');

class PDF extends FPDF
{
// Cabecera de página
function Header()
{
    // Logo
    $this->Image('images/adidas.png',10,8,33);
    // Arial bold 15
    $this->SetFont('Arial','B',15);
    // Movernos a la derecha
    $this->Cell(80);
    // Título
    $this->Cell(140,10,'Datos',0,0,'C');
    // Salto de línea
    $this->Ln(20);

    $this->Cell(20,10,'No.',1,0,'C',0);
    $this->Cell(60,10,'Nombre',1,0,'C',0);
    $this->Cell(30,10,'Telefono',1,0,'C',0);
    $this->Cell(70,10,'Correo',1,0,'C',0);
    $this->Cell(90,10,'Mensaje',1,1,'C',0);


}

// Pie de página
function Footer()
{
    // Posición: a 1,5 cm del final
    $this->SetY(-15);
    // Arial italic 8
    $this->SetFont('Arial','I',8);
    // Número de página
    $this->Cell(0,10,utf8_decode('Página ').$this->PageNo().'',0,0,'C');
}
}
require 'bd.php';
$consulta="SELECT * FROM mensajes";
$resultado=$conn->query($consulta);

// Creación del objeto de la clase heredada
$pdf = new PDF();
$pdf->AddPage('landscape');
$pdf->SetFont('Times','',12);

while ($row=$resultado->fetch_assoc()){
    $pdf->Cell(20,10,$row['nomensaje'],1,0,'C',0);
    $pdf->Cell(60,10,utf8_decode($row['nombre']),1,0,'C',0);
    $pdf->Cell(30,10,utf8_decode($row['telefono']),1,0,'C',0);
    $pdf->Cell(70,10,utf8_decode($row['correo']),1,0,'C',0);
    $pdf->Cell(90,10,utf8_decode($row['mensaje']),1,1,'C',0);
}

$pdf->Output();
?>