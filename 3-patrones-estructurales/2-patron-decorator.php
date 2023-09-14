<?php
/* Imaginemos que tenemos una interfaz Cafe con los métodos getDescripcion() y getPrecio(): */
interface Cafe
{
    public function getDescripcion();
    public function getPrecio();
}
/* Y una implementación concreta CafeSimple: */
class CafeSimple implements Cafe
{

    public function getDescripcion()
    {
        return "Café simple";
    }

    public function getPrecio()
    {
        return 1.50;
    }
}

/* Podemos crear decoradores como LecheDecorator que envuelven un Cafe y le añaden funcionalidad: */
class LecheDecorator implements Cafe
{

    protected $cafe;

    public function __construct(Cafe $cafe)
    {
        $this->cafe = $cafe;
    }

    public function getDescripcion()
    {
        return $this->cafe->getDescripcion() . ", leche";
    }

    public function getPrecio()
    {
        return $this->cafe->getPrecio() + 0.5;
    }
}

/* Ejecución */
$CafeSimple = new CafeSimple();
echo $CafeSimple->getDescripcion(); // Café simple

$cafeConLeche = new LecheDecorator($CafeSimple);
echo $cafeConLeche->getDescripcion(); // Café simple, leche
