<?php
/* PHP incluye la interfaz Iterator e IteratorAggregate para estandarizar los recorridos: */
interface Iterator extends Traversable
{

    public function current();
    public function next();
    public function key();
    public function valid();
    public function rewind();
}

interface IteratorAggregate extends Traversable
{
    public function getIterator();
}

/* Para implementar un Iterator en nuestra clase, 
    implementamos la interfaz y hacemos que getIterator() 
    devuelva una instancia de la clase ConcreteIterator:
*/

class MiColeccion implements IteratorAggregate
{

    public $property1 = "Public property one";
    public $property2 = "Public property two";
    public $property3 = "Public property three";
    public $property4 = "";

    public function __construct()
    {
        $this->property4 = "last property";
    }

    public function getIterator(): Traversable
    {
        return new ArrayIterator($this);
    }
}

class MiColeccionIterator implements Iterator
{

    private $position = 0;
    private $array = array(
        "firstelement",
        "secondelement",
        "lastelement",
    );

    public function __construct()
    {
        $this->position = 0;
    }

    public function rewind(): void
    {
        var_dump(__METHOD__);
        $this->position = 0;
    }

    #[\ReturnTypeWillChange]
    public function current()
    {
        var_dump(__METHOD__);
        return $this->array[$this->position];
    }

    #[\ReturnTypeWillChange]
    public function key()
    {
        var_dump(__METHOD__);
        return $this->position;
    }

    public function next(): void
    {
        var_dump(__METHOD__);
        ++$this->position;
    }

    public function valid(): bool
    {
        var_dump(__METHOD__);
        return isset($this->array[$this->position]);
    }
}

/* Esto nos permite iterar la colección con foreach: */
$coleccion = new MiColeccion();

foreach ($coleccion as $elemento) {
    // Itera utilizando el Iterator
}
