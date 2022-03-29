<?php
require('PDF/fpdf.php'); //direccion de la libreria FPDF(FREE PORTABLE DOCUMENT FILE)

class PDF extends FPDF
{
// Cabecera de página
function Header()
{
    
    // Arial bold 15
    $this->SetFont('Arial','UB',20);
    // Movernos a la derecha
    $this->Cell(60);
    // Título
    $this->Cell(70,10,'Reporte de Inventario',0,0,'C');
    // Salto de línea
    $this->Ln(20);
	// Arial bold 15
    $this->SetFont('Arial','B',12);
	$this->Cell(70,10,utf8_decode('Artículo'),1,0,'C',0);
	$this->Cell(20,10,utf8_decode('Cantidad'),1,0,'C',0);
	$this->Cell(60,10,utf8_decode('Sección'),1,0,'C',0);
	$this->Cell(20,10,utf8_decode('Precio'),1,0,'C',0);
	$this->Cell(20,10,utf8_decode('Subtotal'),1,1,'C',0);
}

// Pie de página
function Footer()
{
    // Posición: a 1,5 cm del final
    $this->SetY(-15);
    // Arial italic 8
    $this->SetFont('Arial','I',8);
    // Número de página
    $this->Cell(0,10,utf8_decode('Pág ').$this->PageNo().'/{nb}',0,0,'C');
}
}

require 'imprimirbbdd.php';
require("datos_conexion.php");
$conexion = mysqli_connect($db_host,$db_usuario,$db_contra,$db_nombre);
$consulta = "SELECT * FROM inventario";
$resultado = $mysqli->query($consulta);
$tabla2 = "SELECT ROUND(cantidad*precio,2) FROM inventario"; //PARA MULTIPLICAR CANTIDAD * PRECIO
$resultado_tabla2 = mysqli_query($conexion,$tabla2);

$pdf = new PDF();
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->SetFont('Arial','',16);
while(($row = $resultado->fetch_assoc()) && (($fila2=mysqli_fetch_row($resultado_tabla2))==true)){
	$pdf->Cell(70,10,$row['articulo'],1,0,'C',0);// Cell = celda(ancho,alto,texto,borde,salto de linea,justificado,relleno)
	$pdf->Cell(20,10,$row['cantidad'],1,0,'C',0);
	$pdf->Cell(60,10,$row['seccion'],1,0,'C',0);
	$pdf->Cell(20,10,$row['precio'],1,0,'C',0);
	$pdf->Cell(20,10,$fila2[0],1,1,'C',0);
}


$pdf->Output();
?>