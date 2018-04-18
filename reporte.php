<?php
require('modelos/fpdf.php');
include('conexion.php');

$pdf = new FPDF();

//CABECERA
$pdf->AddPage();
$pdf->SetFont('Arial','B',16);
$pdf->SetTextColor(0, 0, 255);
//$pdf->Image('img/logo.png', 10, 8, 10);
$pdf->Cell(18, 10, '', 0);
$pdf->Cell(130,10,'SYSTEM-APP', 0);
$pdf->SetFont('Arial','B',11);
$pdf->SetTextColor(0, 0, 0);
$pdf->Cell(50,10,'Fecha: '.date('d-m-Y').'', 0);
$pdf->Ln(20); //salto de línea

//REPORTE TARIFAS
if(isset($_POST['btnImprimirTAR']))
{
    //TITULO
    $pdf->SetFont('Arial', 'B', 14);
    $pdf->SetTextColor(255, 0, 0);
    $pdf->Cell(70, 8, '', 0);
    $pdf->Cell(150,10,'Listado de tarifas', 0);
    $pdf->Ln(15); //salto de línea

    //COLUMNAS
    $pdf->SetFont('Arial', 'B', 12);
    $pdf->SetFillColor(0,102,204);
    $pdf->SetTextColor(255, 255, 255);
    $pdf->Cell(20, 8, 'ID Tarifa', 1, 0, 'C', true);
    $pdf->Cell(20, 8, utf8_decode('AÑO'), 1, 0, 'C', true);
    $pdf->Cell(30, 8, 'CUOTA FIJA', 1, 0, 'C', true);
    $pdf->Cell(25, 8, 'RECARGO', 1, 0, 'C', true);
    $pdf->Cell(25, 8, 'T.A.R', 1, 0, 'C', true);
    $pdf->Cell(45, 8, 'INFRAESTRUCTURA', 1, 0, 'C', true);
    $pdf->Ln(8);

    //FILAS
    $pdf->SetFont('Arial', '', 12);
    $pdf->SetFillColor(153,204,255);
    $pdf->SetTextColor(0, 0, 0);
    $consulta = mysqli_query($conexion, "SELECT * FROM tarifas");
    $ban = false;

    while(($fila = mysqli_fetch_array($consulta))!=NULL)
    {
        $pdf->Cell(20, 8, $fila['idTarifa'], 0, 0, 'C', $ban);
        $pdf->Cell(20, 8, $fila['fecha'], 0, 0, 'C', $ban);
        $pdf->Cell(30, 8, $fila['coutaFija'], 0, 0, 'C', $ban);
        $pdf->Cell(25, 8, $fila['recargo'], 0, 0, 'C', $ban);
        $pdf->Cell(25, 8, $fila['tarifa'], 0, 0, 'C', $ban);
        $pdf->Cell(45, 8, $fila['infraestructura'], 0, 0, 'C', $ban);
        $pdf->Ln(8);
        $ban = !$ban;
    }
}

$pdf->Output();
?>