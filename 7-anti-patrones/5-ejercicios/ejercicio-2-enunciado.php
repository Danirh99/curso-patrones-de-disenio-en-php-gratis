<?php
class Reporte {

    public function generaReporte($datos) {
  
  // ... lógica para recopilar datos del reporte
  
      $pdf = new TCPDF();
      $pdf->addPage();
      $pdf->setTextColor(0,0,0);
      $pdf->setFont('helvetica');
      $pdf->write(0, "REPORTE DE VENTAS ANUAL");
      $pdf->ln(20);
  
      foreach($datos as $item) {
        $pdf->write(0, $item);
        $pdf->ln(10);
      }
  
      $pdf->output("reporteventas.pdf");
  
    }
  
  }
  