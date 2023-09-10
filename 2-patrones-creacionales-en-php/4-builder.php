<?php

/**
 * Primero se define una interfaz de builder(Estructura Punto 1º) con los métodos para la construcción(Estructura Punto 2º):
 */
interface Builder
{
    public function buildPartA();
    public function buildPartB();
    public function buildPartC();
    public function getResult();
}

/**
 * Luego se implementan builders concretos:
 */
class TextBuilder implements Builder
{
    private $result;

    public function buildPartA()
    {
        $this->result .= "Texto A \\n";
    }

    public function buildPartB()
    {
        $this->result .= "Texto B \\n";
    }

    public function buildPartC()
    {
        $this->result .= "Texto C \\n";
    }

    public function getResult()
    {
        return $this->result;
    }
}

class HTMLBuilder implements Builder
{
    private $result;

    public function buildPartA()
    {
        $this->result .= "<p>Texto A </p>";
    }

    public function buildPartB()
    {
        $this->result .= "<p>Texto B </p>";
    }

    public function buildPartC()
    {
        $this->result .= "<p>Texto C </p>";
    }

    public function getResult()
    {
        return $this->result;
    }
}

/**
 * El director(Estructura Punto 3º) ordena el proceso:
 */

class Director
{

    private $builder;

    public function construct(Builder $builder)
    {
        $this->builder = $builder;

        $this->builder->buildPartA();
        $this->builder->buildPartB();
        $this->builder->buildPartC();
    }
}

/**
 * Y se utiliza de la siguiente manera(Estructura Punto 4º):
 */
$textBuilder = new TextBuilder();
$director = new Director($textBuilder);
$director->construct($textBuilder);

echo $textBuilder->getResult();

// Obtiene texto

$htmlBuilder = new HTMLBuilder();
$director->construct($htmlBuilder);

echo $htmlBuilder->getResult();

// Obtiene HTML
