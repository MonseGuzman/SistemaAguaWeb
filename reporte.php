<?php
require('modelos/fpdf.php');
include('conexion.php');

$pdf = new FPDF();

//CABECERA
$pdf->AddPage();
$pdf->SetFont('Arial','B',16);
$pdf->SetTextColor(0, 0, 255);
$pdf->Image('img/logo_reporte.gif', 10, 8, 33);
$pdf->Cell(40, 30, '', 0, 0);
$pdf->Cell(90,30,'SYSTEM-APP', 0, 0, 'C');
$pdf->SetFont('Arial','B',11);
$pdf->SetTextColor(0, 0, 0);
$pdf->Cell(40,30,'Fecha: '.date('d-m-Y').'', 0);
$pdf->Ln(35); //salto de línea

//REPORTE TARIFAS ADMI
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
//REPORTES PAGOS ADMI
if(isset($_POST['btnImprimirPagos']))
{
    //TITULO
    $pdf->SetFont('Arial', 'B', 14);
    $pdf->SetTextColor(255, 0, 0);
    $pdf->Cell(70, 8, '', 0);
    $pdf->Cell(150,10,'Historial de Pagos', 0);
    $pdf->Ln(15); //salto de línea

    //COLUMNAS
    $pdf->SetFont('Arial', 'B', 12);
    $pdf->SetFillColor(0,102,204);
    $pdf->SetTextColor(255, 255, 255);
    $pdf->Cell(20, 8, 'ID PAGO', 1, 0, 'C', true);
    $pdf->Cell(100, 8, 'CUENTA', 1, 0, 'C', true);
    $pdf->Cell(30, 8, 'FECHA PAGO', 1, 0, 'C', true);
    $pdf->Cell(30, 8, 'TOTAL', 1, 0, 'C', true);
    $pdf->Ln(8);

    //FILAS
    $pdf->SetFont('Arial', '', 12);
    $pdf->SetFillColor(204,204,255);
    $pdf->SetTextColor(0, 0, 0);
    $consulta = mysqli_query($conexion, "SELECT pagos.idPago, cuentas.nombreCliente, pagos.fecha, pagos.total FROM pagos INNER JOIN cuentas ON cuentas.idCuenta = pagos.idCuenta");
    $ban = false;

    while(($fila = mysqli_fetch_array($consulta))!=NULL)
    {
        $pdf->Cell(20, 8, $fila['idPago'], 0, 0, 'C', $ban);
        $pdf->Cell(100, 8, utf8_decode($fila['nombreCliente']), 0, 0, 'L', $ban);
        $pdf->Cell(30, 8, $fila['fecha'], 0, 0, 'C', $ban);
        $pdf->Cell(30, 8, '$ '.$fila['total'], 0, 0, 'C', $ban);
        $pdf->Ln(8);
        $ban = !$ban;
    }
}
//REPORTE CUENTAS/CLIENTES
if(isset($_POST['btnImprimirCuenta']))
{
    //TITULO
    $pdf->SetFont('Arial', 'B', 14);
    $pdf->SetTextColor(255, 0, 0);
    $pdf->Cell(70, 8, '', 0);
    $pdf->Cell(150,10,'Listado de Clientes', 0);
    $pdf->Ln(15); //salto de línea

    //COLUMNAS
    $pdf->SetFont('Arial', 'B', 12);
    $pdf->SetFillColor(0,102,204);
    $pdf->SetTextColor(255, 255, 255);
    $pdf->Cell(25, 10, 'ID CUENTA', 1, 0, 'C', true);
    $pdf->Cell(65, 10, 'NOMBRE', 1, 0, 'C', true);
    $pdf->Cell(60, 10, 'DOMICILIO', 1, 0, 'C', true);
    $pdf->Cell(33, 10, utf8_decode('ÚLTIMO PAGO'), 1, 0, 'C', true);
    $pdf->Ln(10);

    //FILAS
    $pdf->SetFont('Arial', '', 12);
    $pdf->SetFillColor(153,204,255);
    $pdf->SetTextColor(0, 0, 0);
    $consulta = mysqli_query($conexion, "SELECT idCuenta, nombre, nombreCliente, noExterior, noInterior,
    ultimoPagoM, ultimoPagoA FROM cuentas INNER JOIN calles on calles.idCalle = cuentas.idCuenta");
    $ban = false;

    while(($fila = mysqli_fetch_array($consulta))!=NULL)
    {
        $domicilio = utf8_decode($fila['nombre'])." #".$fila['noExterior']." Int ".$fila['noInterior'];
        $ultimoPago = $fila['ultimoPagoM']."/".$fila['ultimoPagoA'];

        $pdf->Cell(25, 10, $fila['idCuenta'], 1, 0, 'C', $ban);
        $pdf->Cell(65, 10, utf8_decode($fila['nombreCliente']), 1, 0, 'C', $ban);
        $pdf->Cell(60, 10, $domicilio, 1, 0, 'C', $ban);
        $pdf->Cell(33, 10, $ultimoPago, 1, 0, 'C', $ban);
        $pdf->Ln(10);
        $ban = !$ban;
        
     }
}

//                                      DALIA
//REPORTE CALLES
if(isset($_POST['btnImprimirCALLES']))
{
    //TITULO
    $pdf->SetFont('Arial', 'B', 14);
    $pdf->SetTextColor(255, 0, 0);
    $pdf->Cell(70, 8, '', 0);
    $pdf->Cell(150,10,'Listado de calles', 0);
    $pdf->Ln(15); //salto de línea

    //COLUMNAS
    $pdf->SetFont('Arial', 'B', 12);
    $pdf->SetFillColor(0,102,204);
    $pdf->SetTextColor(255, 255, 255);
    $pdf->Cell(20, 8, 'ID Calle', 1, 0, 'C', true);
    $pdf->Cell(100, 8, 'NOMBRE', 1, 0, 'C', true);
    $pdf->Cell(70, 8, 'COLONIA', 1, 0, 'C', true);
    $pdf->Ln(8);

    //FILAS
    $pdf->SetFont('Arial', '', 12);
    $pdf->SetFillColor(153,204,255);
    $pdf->SetTextColor(0, 0, 0);
    
    $consulta = mysqli_query($conexion, "SELECT * FROM calles");
    $ban = false;

    while(($fila = mysqli_fetch_array($consulta))!=NULL)
    {
        $pdf->Cell(20, 8, $fila['idCalle'], 0, 0, 'C', $ban);
        $pdf->Cell(100, 8, $fila['nombre'], 0, 0, 'C', $ban);
        $pdf->Cell(70, 8, $fila['colonia'], 0, 0, 'C', $ban);
        $pdf->Ln(8);
        $ban = !$ban;
    }
}
//REPORTE PAGOS POR PERIODO 
if(isset($_POST['btnImprimirPAGOSP']))
{
    $FI = $_POST['fechI'];
    $FF = $_POST['fechF'];
    //TITULO
    $pdf->SetFont('Arial', 'B', 14);
    $pdf->SetTextColor(255, 0, 0);
    $pdf->Cell(70, 8, '', 0);
    $pdf->Cell(150,10,'Pagos por periodo', 0);
    $pdf->Ln(15); //salto de línea
    $pdf->SetFont('Arial', 'B', 10);
    $pdf->SetTextColor(0,0, 0);
    $pdf->Cell(30,10,'Fecha Inicial: ', 0);
    $pdf->Cell(100,10,$FI, 0);
    $pdf->Cell(30,10,'Fecha Final: ', 0);
    $pdf->Cell(30,10,$FF, 0);
    $pdf->Ln(15); //salto de línea
    //COLUMNAS
    $pdf->SetFont('Arial', 'B', 12);
    $pdf->SetFillColor(0,102,204);
    $pdf->SetTextColor(255, 255, 255);
    $pdf->Cell(20, 8, 'IDPAGO', 1, 0, 'C', true);
    $pdf->Cell(100, 8,'CUENTA', 1, 0, 'C', true);
    $pdf->Cell(40, 8, 'FECHA DE PAGO', 1, 0, 'C', true);
    $pdf->Cell(30, 8, 'TOTAL', 1, 0, 'C', true);
    $pdf->Ln(8);

    //FILAS
    $pdf->SetFont('Arial', '', 12);
    $pdf->SetFillColor(153,204,255);
    $pdf->SetTextColor(0, 0, 0);
    
    $consulta = mysqli_query($conexion, "SELECT pagos.idPago, cuentas.nombreCliente, pagos.fecha, pagos.total FROM pagos INNER JOIN cuentas ON cuentas.idCuenta = pagos.idCuenta WHERE pagos.fecha BETWEEN '$FI' AND '$FF'");
    $ban = false;

    while (($fila = mysqli_fetch_array($consulta))!=NULL)
    {
        $pdf->Cell(20, 8, $fila['idPago'], 0, 0, 'C', $ban);
        $pdf->Cell(100, 8, $fila['nombreCliente'], 0, 0, 'C', $ban);
        $pdf->Cell(40, 8, $fila['fecha'], 0, 0, 'C', $ban);
        $pdf->Cell(30, 8, $fila['total'], 0, 0, 'C', $ban);
        $pdf->Ln(8);
        $ban = !$ban;
    }
}

$pdf->Output();
?>