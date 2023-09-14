<?php 

/**
 * Implementa el patrón Decorator en PHP para agregar champiñones extras a una pizza básica.
 */

 // Interfaz común
interface Pizza {
    public function getPrecio();
  }
  
  // Componente concreto
  class PizzaBase implements Pizza {
  
    public function getPrecio() {
      return 10;
    }
  
  }
  
  // Decorator
  class ChampinonesExtraDecorator implements Pizza {
  
    protected $pizza;
  
    public function __construct(Pizza $pizza) {
      $this->pizza = $pizza;
    }
  
    public function getPrecio() {
      return $this->pizza->getPrecio() + 3;
    }
  }
  
  // Uso
  $pizzaBase = new PizzaBase();
  echo $pizzaBase->getPrecio(); // 10
  
  $pizzaConChampinonesExtra = new ChampinonesExtraDecorator($pizzaBase);
  echo $pizzaConChampinonesExtra->getPrecio(); // 13