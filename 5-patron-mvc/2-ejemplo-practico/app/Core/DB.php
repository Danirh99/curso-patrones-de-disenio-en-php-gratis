<?php
class DB
{
    private static $instance = null;

    public static function getInstance()
    {
        if (!self::$instance) {
            self::$instance = new PDO('mysql:host=localhost;dbname=ejemplo-mvc-php', 'root', '');
        }
        return self::$instance;
    }
}
