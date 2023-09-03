<?php
class Singleton {
	private static $instance;

	private function __construct() {
		// Constructor privado para evitar la creación directa de instancias
	}

	public static function getInstance() {
		if (!self::$instance) {
			self::$instance = new Singleton();
		}
		return self::$instance;
	}

	public function doSomething() {
		// Lógica de la instancia
	}
}