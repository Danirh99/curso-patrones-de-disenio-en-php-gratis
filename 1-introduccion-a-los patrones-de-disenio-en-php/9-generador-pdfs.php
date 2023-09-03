<?php
interface GeneradorPDF {
	public function generarPDF($datos);
}

class GeneradorPDFSimple implements GeneradorPDF {
	// Crea PDF simple
}

class GeneradorPDFProfesional implements GeneradorPDF {
	// Crea PDF con más opciones
}

class FabricaPDF {

	public function crearGeneradorPDF($tipo) {
		switch ($tipo) {
		case 'simple':
			return new GeneradorPDFSimple();
		case 'profesional':
			return new GeneradorPDFProfesional();
		}
	}

}

// Código que usa la fábrica
$fabrica = new FabricaPDF();
$pdf = $fabrica->crearGeneradorPDF('profesional');
$pdf->generarPDF($datos);