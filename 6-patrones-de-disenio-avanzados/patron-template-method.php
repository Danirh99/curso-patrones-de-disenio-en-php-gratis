<?php
abstract class SortAlgorithm
{

    // Plantilla del algoritmo
    final public function sort(array $dataset): array
    {
        $result = array();
        $this->preProcessDataset($dataset);

        // Algoritmo concreto
        $result = $this->sortAlgorithm($dataset);

        $result = $this->postProcessDataset($result);

        return $result;
    }

    // Pasos concretos
    final protected function preProcessDataset(array &$dataset): array
    {
        // Lógica de preprocesamiento
        echo "Preprocesando dataset..." . PHP_EOL;
        return array();
    }

    final protected function postProcessDataset(array &$result): array
    {
        // Lógica de postprocesamiento
        echo "Postprocesando resultado..." . PHP_EOL;
        return array();
    }

    // Pasos abstractos
    abstract protected function sortAlgorithm(array $dataset): array;
}


// Subclase concreta 1
class BubbleSort extends SortAlgorithm
{
    protected function sortAlgorithm(array $dataset): array
    {
        $result = array();
        echo "Ordenando con Bubble Sort" . PHP_EOL;
        // ... código burbuja
        return $result;
    }
}

// Subclase concreta 2
class QuickSort extends SortAlgorithm
{
    protected function sortAlgorithm(array $dataset): array
    {
        $result = array();
        echo "Ordenando con Quick Sort" . PHP_EOL;
        // ... código quicksort
        return $result;
    }
}

$dataset = [5, 1, 4, 2, 8];

$bubbleSort = new BubbleSort();
$result = $bubbleSort->sort($dataset);

// Output// Preprocesando dataset...// Ordenando con Bubble Sort// Postprocesando resultado...

$quickSort = new QuickSort();
$result = $quickSort->sort($dataset);

// Output// Preprocesando dataset...// Ordenando con Quick Sort// Postprocesando resultado...