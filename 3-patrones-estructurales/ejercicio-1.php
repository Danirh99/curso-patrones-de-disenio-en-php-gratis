<?php

/**
 * Realiza un ejemplo de uso del patrón Adapter en PHP para adaptar una clase Lavadora a una interfaz 
 * Televisor con los métodos encender() y apagar().
 */

// Interfaz esperada por el cliente
interface Televisor
{
    public function encender();
    public function apagar();
}

// Clase a adaptar
class Lavadora
{
    public function lavar()
    {
        echo "Lavando...";
    }

    public function detener()
    {
        echo "Deteniendo lavado...";
    }
}

// Clase adaptador
class LavadoraAdapter implements Televisor
{

    protected $lavadora;

    public function __construct(Lavadora $lavadora)
    {
        $this->lavadora = $lavadora;
    }

    public function encender()
    {
        $this->lavadora->lavar();
    }

    public function apagar()
    {
        $this->lavadora->detener();
    }
}

// Cliente
$lavadora = new Lavadora();
$lavadoraAdaptada = new LavadoraAdapter($lavadora);

$lavadoraAdaptada->encender(); // Lavando...
$lavadoraAdaptada->apagar(); // Deteniendo lavado...