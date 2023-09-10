<?php
/**
 * Para implementar Singleton en PHP se restringe la creación de instancias de la clase mediante el constructor privado. 
 * Luego se proporciona un método estático para acceder a la instancia única (Estructura Punto 1º).
 */
class Singleton {

  private static $instance;

  private function __construct() {
    // Inicialización
  }

  public static function getInstance() {
    if (!self::$instance) {
      self::$instance = new self();
    }
    return self::$instance;
  }

}

/**
 * El código cliente(Estructura Punto 2º) obtiene la instancia única a través del método estático getInstance():
 */
$singleton = Singleton::getInstance();
