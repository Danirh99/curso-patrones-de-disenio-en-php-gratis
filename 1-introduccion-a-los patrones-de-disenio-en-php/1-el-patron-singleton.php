<?php
class UserManager {
    private static $instance;

    private function __construct() {
        // Constructor privado para evitar la creación directa de instancias
    }

    public static function getInstance() {
        if (!self::$instance) {
            self::$instance = new UserManager();
        }
        return self::$instance;
    }

    // Métodos y funcionalidades del UserManager
}