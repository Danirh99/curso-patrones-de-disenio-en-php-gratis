<?php
interface GeneradorPDF {
    public function generarPDF($datos);
  }
  
  class Reporte {
  
    private $pdf;
  
    public function __construct(GeneradorPDF $pdf) {
      $this->pdf = $pdf;
    }
  
    public function genera() {
  //...
      $this->pdf->generarPDF($datos);
    }
  
  }
  
  class TCPDF implements GeneradorPDF {
  // implementación
  }
  