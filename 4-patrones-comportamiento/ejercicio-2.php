<?php
// Strategy interface
interface ReportStrategy
{
    public function export(Report $report);
}

class PdfStrategy implements ReportStrategy
{
    public function export(Report $report)
    {
        // Generar PDF
    }
}

class CsvStrategy implements ReportStrategy
{
    public function export(Report $report)
    {
        // Generar CSV
    }
}

// Contexto
class Report
{

    protected $strategy;

    public function setExportStrategy(ReportStrategy $strategy)
    {
        $this->strategy = $strategy;
    }

    public function export()
    {
        $this->strategy->export($this);
    }
}

// Cliente
$report = new Report();
$report->setExportStrategy(new PdfStrategy());
$report->export(); // Exporta a PDF

$report->setExportStrategy(new CsvStrategy());
$report->export();// Ahora a CSV