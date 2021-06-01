<?php
require('fpdf.php');

class PDF extends FPDF
{
// Cabecera de página
function Header()
{
    // Logo
   /*  $this->Image('logo.png',10,8,33); */
    // Arial bold 15
    $this->SetFont('Arial','B',11);
    // Movernos a la derecha
    $this->Cell(65);
    // Título
    $this->Cell(70,10,'Lista de Productos',0,0,'C');
    // Salto de línea
    $this->Ln(20);

    $this->Cell(25, 10, 'Empresa', 1, 0, 'C', 0);
    $this->Cell(25, 10, 'Producto', 1, 0, 'C', 0);
    $this->Cell(25, 10, 'Descripcion', 1, 0, 'C', 0);
    $this->Cell(30, 10, 'Costo Compra', 1, 0, 'C', 0);
    $this->Cell(25, 10, 'Costo Venta', 1, 0, 'C', 0);
    $this->Cell(25, 10, 'Stock', 1, 0, 'C', 0);
    $this->Cell(25, 10, 'Fecha', 1, 1, 'C', 0);
}

// Pie de página
function Footer()
{
    // Posición: a 1,5 cm del final
    $this->SetY(-15);
    // Arial italic 8
    $this->SetFont('Arial','I',8);
    // Número de página
    $this->Cell(0,10,'AlejandroNes '.$this->PageNo().'/{nb}',0,0,'C');
}
}



require 'cn.php';
$consulta = 'SELECT p.*, pr.empresa  
FROM producto p 
INNER JOIN proveedor pr
ON p.id_proveedor = pr.id_proveedor WHERE p.estado = "activo" ';  
/* $consulta = 'SELECT * FROM producto'; */
$resultado = $mysqli->query($consulta);

$pdf = new PDF();
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->SetFont('Arial','',10);

while ($row = $resultado->fetch_assoc()) {
    $pdf->Cell(25, 10, $row['empresa'], 1, 0, 'C', 0);
    $pdf->Cell(25, 10, $row['nombreproducto'], 1, 0, 'C', 0);
    $pdf->Cell(25, 10, $row['descripcion'], 1, 0, 'C', 0);
    $pdf->Cell(30, 10, $row['costocompra'], 1, 0, 'C', 0);
    $pdf->Cell(25, 10, $row['costoventa'], 1, 0, 'C', 0);
    $pdf->Cell(25, 10, $row['stock'], 1, 0, 'C', 0);
    $pdf->Cell(25, 10, $row['fecha'], 1, 1, 'C', 0);


}


$pdf->Output();


?>
