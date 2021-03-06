<?php
require('modelos/fpdf.php');
require ("jpgraph/src/jpgraph.php");
require_once ('jpgraph/src/jpgraph_pie.php');
include('conexion.php');

$pdf = new FPDF();
$cont = 0;

function portrait ($pdf)
{
    //CABECERA
    $pdf->AddPage('P');
    $pdf->AliasNbPages();
    $pdf->SetFont('Arial','B',16);
    $pdf->SetTextColor(0, 0, 255);
    $pdf->Image('img/logo_reporte.gif', 10, 8, 33);
    $pdf->Cell(30, 30, '', 0, 0);
    $pdf->Cell(90,30,'SYSTEM-APP', 0, 0, 'C');
    $pdf->SetFont('Arial','B',11);
    $pdf->SetTextColor(0, 0, 0);
    $pdf->Cell(40,30,'Fecha: '.date('d-m-Y').'', 0, 'L');
    $pdf->Cell(35, 10, utf8_decode('Página '.$pdf->PageNo()).' de {nb}', 0, 0);
    $pdf->Ln(35); //salto de línea
}

function landscape ($pdf)
{
    //CABECERA LANSCAPE
    $pdf->AddPage('L');
    $pdf->AliasNbPages();
    $pdf->SetFont('Arial','B',16);
    $pdf->SetTextColor(0, 0, 255);
    $pdf->Image('img/logo_reporte.gif', 10, 8, 50);
    $pdf->Cell(55, 30, '', 0);
    $pdf->Cell(185,30,'SYSTEM-APP', 0, 0, 'C');
    $pdf->SetFont('Arial','B',11);
    $pdf->SetTextColor(0, 0, 0);
    $pdf->Cell(10,30,'Fecha: '.date('d-m-Y').'', 0);
    $pdf->Cell(0, 5, utf8_decode('Página '.$pdf->PageNo()).' de {nb}', 0, 0);
    $pdf->Ln(35); //salto de línea
}

function grafica($pdf, $data, $titulo, $leyenda)
{
    $graph = new PieGraph(300,200);
    $graph->SetShadow();
    $graph->title->Set($titulo);
    $p1 = new PiePlot($data);
    $p1->SetLegends($leyenda);
    $graph->legend->SetPos(0.7,0.98,'center','bottom'); //nuevo
    $graph->Add($p1);
    $graph->Stroke(_IMG_HANDLER);

    //$graph->Stroke(); //muestra la gráfica
    $fileName = "grafica1.png";
    $graph->img->Stream($fileName);
    $pdf->Image($fileName, 50, $pdf->getY()+10, 100);
}

//REPORTE TARIFAS ADMI
if(isset($_POST['btnImprimirTAR']))
{
    portrait($pdf);
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
        $cont++;

        if($cont>=26)
        {
            portrait($pdf);
            $cont=0;
        }

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
    portrait($pdf);
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
    $consulta = mysqli_query($conexion, "SELECT pagos.idPago, cuentas.idCuenta, cuentas.nombreCliente, pagos.fecha, pagos.total FROM pagos INNER JOIN cuentas ON cuentas.idCuenta = pagos.idCuenta");
    $ban = false;
    $clientes = array();

    while(($fila = mysqli_fetch_array($consulta))!=NULL)
    {
        $cont++;
        $clientes[] = $fila['idCuenta'];

        if($cont>=26)
        {
            portrait($pdf);
            $cont=0;
        }

        $pdf->Cell(20, 8, $fila['idPago'], 0, 0, 'C', $ban);
        $pdf->Cell(100, 8, utf8_decode($fila['nombreCliente']), 0, 0, 'L', $ban);
        $pdf->Cell(30, 8, $fila['fecha'], 0, 0, 'C', $ban);
        $pdf->Cell(30, 8, '$ '.$fila['total'], 0, 0, 'C', $ban);
        $pdf->Ln(8);
        $ban = !$ban;
    }

    //grafica
    $anterior=0;
    $cont2=0;
    
    while($cont2 != count($clientes))
    {
        $total=0;
        for($x=0; $x<count($clientes); $x++)
        {
            if($clientes[$anterior] == $clientes[$x])
            {
                $total++;
            }
        }
        $cont2 += $total;
        $data[] = $total;
        $leyenda[] = $clientes[$anterior];
        $anterior = $cont2; //iterador        
    }
     
    $titulo = utf8_decode("Pagos por idCuenta");
    grafica($pdf, $data, $titulo, $leyenda);
}
//REPORTE CUENTAS ADMI
if(isset($_POST['btnImprimirCuenta']))
{
    portrait($pdf);
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
    $consulta = mysqli_query($conexion, "SELECT cuentas.idCuenta, calles.nombre, cuentas.nombreCliente, cuentas.noExterior, 
    cuentas.noInterior, cuentas.ultimoPagoM, cuentas.ultimoPagoA FROM cuentas INNER JOIN calles on calles.idCalle = cuentas.idCalle");
    $ban = false;
    $anuales = array();

    while(($fila = mysqli_fetch_array($consulta))!=NULL)
    {
        $cont++;
        $anuales[] = $fila['ultimoPagoA'];

        if($cont>=26)
        {
            portrait($pdf);
            $cont=0;
        }

        $domicilio = utf8_decode($fila['nombre'])." #".$fila['noExterior']." Int ".$fila['noInterior'];
        $ultimoPago = $fila['ultimoPagoM']."/".$fila['ultimoPagoA'];

        $pdf->Cell(25, 10, $fila['idCuenta'], 1, 0, 'C', $ban);
        $pdf->Cell(65, 10, utf8_decode($fila['nombreCliente']), 1, 0, 'C', $ban);
        $pdf->Cell(60, 10, $domicilio, 1, 0, 'C', $ban);
        $pdf->Cell(33, 10, $ultimoPago, 1, 0, 'C', $ban);
        $pdf->Ln(10);
        $ban = !$ban;
    }

    //grafica
    $anterior=0;
    $cont2=0;
    
    while($cont2 != count($anuales))
    {
        $total=0;
        for($x=0; $x<count($anuales); $x++)
        {
            if($anuales[$anterior] == $anuales[$x])
            {
                $total++;
            }
        }
        $cont2 += $total;
        $data[] = $total;
        $leyenda[] = $anuales[$anterior];
        $anterior = $cont2; //iterador        
    }
     
    $titulo = utf8_decode("Últimos pagos anuales");
    grafica($pdf, $data, $titulo, $leyenda);
}
//REPORTE SITUACIONES ADMI
if(isset($_POST['btnImprimirSITUACION']))
{
    portrait($pdf);
    //TITULO
    $pdf->SetFont('Arial', 'B', 14);
    $pdf->SetTextColor(255, 0, 0);
    $pdf->Cell(70, 8, '', 0);
    $pdf->Cell(150,10, utf8_decode('Listado de situación'), 0);
    $pdf->Ln(15); //salto de línea

    //COLUMNAS
    $pdf->SetFont('Arial', 'B', 12);
    $pdf->SetFillColor(0,102,204);
    $pdf->SetTextColor(255, 255, 255);
    $pdf->Cell(35, 8, utf8_decode('ID SITUACIÓN'), 1, 0, 'C', true);
    $pdf->Cell(110, 8, utf8_decode('DESCRIPCIÓN'), 1, 0, 'C', true);
    $pdf->Cell(40, 8, 'DESCUENTO', 1, 0, 'C', true);
    $pdf->Ln(8);

    //FILAS
    $pdf->SetFont('Arial', '', 12);
    $pdf->SetFillColor(153,204,255);
    $pdf->SetTextColor(0, 0, 0);
    $consulta = mysqli_query($conexion, "SELECT * FROM situaciones");
    $ban = false;

    while(($fila = mysqli_fetch_array($consulta))!=NULL)
    {
        $cont++;

        if($cont>=26)
        {
            portrait($pdf);
            $cont=0;
        }

        $pdf->Cell(35, 8, $fila['idSituacion'], 0, 0, 'C', $ban);
        $pdf->Cell(110, 8, utf8_decode($fila['descripcion']), 0, 0, 'L', $ban);
        $pdf->Cell(40, 8, $fila['descuento'], 0, 0, 'C', $ban);
        $pdf->Ln(8);
        $ban = !$ban;
    }   
}
//REPORTE HISTORIAL DE PAGOS
if(isset($_POST['btnImprimirPAGOSCLIENTES']))
{
    session_start();
    portrait($pdf);
    //TITULO
    $pdf->SetFont('Arial', 'B', 14);
    $pdf->SetTextColor(255, 0, 0);
    $pdf->Cell(70, 8, '', 0);
    $pdf->Cell(150,10, 'Historial de pagos', 0);
    $pdf->Ln(15); //salto de línea

    //COLUMNAS
    $pdf->SetFont('Arial', 'B', 12);
    $pdf->SetFillColor(0,102,204);
    $pdf->SetTextColor(255, 255, 255);
    $pdf->Cell(35, 8, 'ID PAGO', 1, 0, 'C', true);
    $pdf->Cell(110, 8, 'FECHA', 1, 0, 'C', true);
    $pdf->Cell(40, 8, 'TOTAL', 1, 0, 'C', true);
    $pdf->Ln(8);

    //FILAS
    $pdf->SetFont('Arial', '', 12);
    $pdf->SetFillColor(153,204,255);
    $pdf->SetTextColor(0, 0, 0);
    $consulta = mysqli_query($conexion, "SELECT pagos.idPago, pagos.fecha, pagos.total FROM pagos INNER JOIN cuentas ON cuentas.idCuenta = pagos.idCuenta WHERE cuentas.idUsuario = ".$_SESSION['id']);
    $ban = false;

    while(($fila = mysqli_fetch_array($consulta))!=NULL)
    {
        $cont++;

        if($cont>=26)
        {
            portrait($pdf);
            $cont=0;
        }

        $pdf->Cell(35, 8, $fila['idPago'], 0, 0, 'C', $ban);
        $pdf->Cell(110, 8, $fila['fecha'], 0, 0, 'C', $ban);
        $pdf->Cell(40, 8, '$ '.$fila['total'], 0, 0, 'C', $ban);
        $pdf->Ln(8);
        $ban = !$ban;
    }
    $query = "SELECT sum(pagos.total) FROM pagos INNER JOIN cuentas ON cuentas.idCuenta = pagos.idCuenta WHERE cuentas.idUsuario = ".$_SESSION['id'];
    $consulta = mysqli_query($conexion, $query);
    $fila = mysqli_fetch_array($consulta);
    
    $pdf->Cell(160, 8, "Total", 0, 0, 'C', $ban);
    $pdf->Cell(30, 8, '$ '.$fila[0], 0, 0, 'C', $ban);
    $pdf->Ln(8);
}

//                                      DALIA
//REPORTE CALLES ADMI
if(isset($_POST['btnImprimirCALLES']))
{
    portrait($pdf);
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
        $cont++;

        if($cont>=26)
        {
            portrait($pdf);
            $cont=0;
        }
        $pdf->Cell(20, 8, $fila['idCalle'], 0, 0, 'C', $ban);
        $pdf->Cell(100, 8, utf8_decode($fila['nombre']), 0, 0, 'C', $ban);
        $pdf->Cell(70, 8, utf8_decode($fila['colonia']), 0, 0, 'C', $ban);
        $pdf->Ln(8);
        $ban = !$ban;
    }
}
//REPORTE PAGOS POR PERIODO 
if(isset($_POST['btnImprimirPAGOSP']))
{
    portrait($pdf);
    $FI = $_POST['fechaI'];
    $FF = $_POST['fechaF'];
    //NUEVO formato de fechas
    $date = date_create($FF);
    $date2 = date_create($FI);

    $nueva = date_format($date2, 'd-m-Y');
    $nueva2 = date_format($date, 'd-m-Y');

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

    $query = "SELECT pagos.idPago, cuentas.nombreCliente, pagos.fecha, pagos.total FROM pagos INNER JOIN cuentas ON cuentas.idCuenta = pagos.idCuenta WHERE pagos.fecha BETWEEN '$nueva' AND '$nueva2'";
    $consulta = mysqli_query($conexion, $query);
    $ban = false;
    
    //var_dump($consulta); IMPRIMIR TODO EL OBJETO
    while(($fila = mysqli_fetch_array($consulta))!=NULL)
    {
        $cont++;

        if($cont>=26)
        {
            portrait($pdf);
            $cont=0;
        }

        $pdf->Cell(20, 8, $fila[0], 0, 0, 'C', $ban);
        $pdf->Cell(100, 8, utf8_decode($fila[1]), 0, 0, 'C', $ban);
        $pdf->Cell(40, 8, $fila[2], 0, 0, 'C', $ban);
        $pdf->Cell(30, 8, $fila[3], 0, 0, 'C', $ban);
        $pdf->Ln(8);
        $ban = !$ban;
    }
    $query = "SELECT sum(total) FROM pagos WHERE pagos.fecha BETWEEN '$nueva' AND '$nueva2'";
    $consulta = mysqli_query($conexion, $query);
    $fila = mysqli_fetch_array($consulta);
    
    $pdf->Cell(20, 8, "Total", 0, 0, 'C', $ban);
    $pdf->Cell(100, 8, "", 0, 0, 'C', $ban);
    $pdf->Cell(40, 8, "", 0, 0, 'C', $ban);
    $pdf->Cell(30, 8, $fila[0], 0, 0, 'C', $ban);
    $pdf->Ln(8);
}
//REPORTE DE PAGOS INDIVIDUALES
if(isset($_POST['btnImprimirPAGOSI']))
{
    //CABECERA
    landscape($pdf);
    //$nombre = $_POST['nombreP'];
    //TITULO
    $pdf->SetFont('Arial', 'B', 16);
    $pdf->SetTextColor(255, 0, 0);
    $pdf->Cell(120, 8, '', 0);
    $pdf->Cell(150,10,'Consulta de pagos', 0);
    $pdf->SetFont('Arial', 'B', 10);
    $pdf->SetTextColor(0,0, 0);
    $pdf->Ln(15); //salto de línea
    //COLUMNAS
    $pdf->SetFont('Arial', 'B', 9);
    $pdf->SetFillColor(0,102,204);
    $pdf->SetTextColor(255, 255, 255);
    $pdf->Cell(20, 8, 'IDPAGO', 1, 0, 'C', true);
    $pdf->Cell(40, 8, 'FECHA', 1, 0, 'C', true);
    $pdf->Cell(35, 8, utf8_decode('SITUACIÓN'), 1, 0, 'C', true);
    $pdf->Cell(20, 8, 'TARIFA', 1, 0, 'C', true);
    $pdf->Cell(20, 8, 'MES I.', 1, 0, 'C', true);
    $pdf->Cell(20, 8, 'MES F.', 1, 0, 'C', true);
    $pdf->Cell(22, 8, 'CUOTA FIJA', 1, 0, 'C', true);
    $pdf->Cell(20, 8, 'RECARGO', 1, 0, 'C', true);
    $pdf->Cell(20, 8, 'T.A.R', 1, 0, 'C', true);
    $pdf->Cell(20, 8, 'INFRA', 1, 0, 'C', true);
    $pdf->Cell(25, 8, 'DESCUENTO', 1, 0, 'C', true);
    $pdf->Cell(20, 8, 'TOTAL', 1, 0, 'C', true);
    $pdf->Ln(8);

    //FILAS
    $pdf->SetFont('Arial', '', 9);
    $pdf->SetFillColor(153,204,255);
    $pdf->SetTextColor(0, 0, 0);
    $idPago = $_POST['idPago'];
    $consulta = mysqli_query($conexion, "SELECT pagos.idPago, pagos.fecha, situaciones.descripcion, tarifas.fecha AS Tarifa, detallepago.MesInicial, detallepago.MesFinal, detallepago.coutaFija, detallepago.recargo, detallepago.tarifa, detallepago.infraestructura, detallepago.descuento, pagos.total FROM detallepago INNER JOIN situaciones ON situaciones.idSituacion = detallepago.idSituacion INNER JOIN tarifas ON tarifas.idTarifa = detallepago.idTarifa INNER JOIN pagos ON detallepago.idPago = pagos.idPago WHERE pagos.idPago= $idPago");
    $ban = false;

    while (($fila = mysqli_fetch_array($consulta))!=NULL)
    {
        $pdf->Cell(20, 8, $fila['idPago'], 0, 0, 'C', $ban);
        $pdf->Cell(40, 8, $fila['fecha'], 0, 0, 'C', $ban);
        $pdf->Cell(35, 8, utf8_decode($fila['descripcion']), 0, 0, 'C', $ban);
        $pdf->Cell(20, 8, $fila['Tarifa'], 0, 0, 'C', $ban);
        $pdf->Cell(20, 8, $fila['MesInicial'], 0, 0, 'C', $ban);
        $pdf->Cell(20, 8, $fila['MesFinal'], 0, 0, 'C', $ban);
        $pdf->Cell(22, 8, $fila['coutaFija'], 0, 0, 'C', $ban);
        $pdf->Cell(20, 8, $fila['recargo'], 0, 0, 'C', $ban);
        $pdf->Cell(20, 8, $fila['tarifa'], 0, 0, 'C', $ban);
        $pdf->Cell(20, 8, $fila['infraestructura'], 0, 0, 'C', $ban);
        $pdf->Cell(25, 8, $fila['descuento'], 0, 0, 'C', $ban);
        $pdf->Cell(20, 8, $fila['total'], 0, 0, 'C', $ban);

        $pdf->Ln(8);
        $ban = !$ban;
    }
}

$pdf->Output();
?>
