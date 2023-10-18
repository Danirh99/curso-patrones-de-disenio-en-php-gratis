<?php
// CLASE PARA GENERAR REPORTE DE VENTAS

class ReporteVentas
{

    public function generar()
    {

        // incluir libreria de graficos
        require 'libChart.php';

        // obtener ventas del mes
        $ventasMes = $db->query("SELECT ...");

        // obtener ventas del año anterior
        $ventasAñoAnt = $db->query("SELECT ...");

        // generar graficos
        $chart = new Chart();
        $chart->pieChart($ventasMes);
        $chart->barChart($ventasAñoAnt);

        // exportar a PDF
        $pdf = new PDF();
        $pdf->addChart($chart->pieChart());
        $pdf->addChart($chart->barChart());
        $pdf->export("reporteventas.pdf");
    }
}
