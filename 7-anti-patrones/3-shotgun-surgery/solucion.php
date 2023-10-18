<?php
interface Grafico
{

    public function generaGrafico();

}

class GraficoBarras implements Grafico
{
    /* Código */
    public function generaGrafico() {
		return true;
	}
}
class GraficoPie implements Grafico
{
    public function generaGrafico() {
		return true;
	}
}

class ReporteVentas
{

    private $grafico;

    public function __construct(Grafico $grafico)
    {
        $this->grafico = $grafico;
    }

    public function generar()
    {
        $this->grafico->generaGrafico();
    }
}
