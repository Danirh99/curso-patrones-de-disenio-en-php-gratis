<?php
interface Producto {
    public function obtenerDescripcion();
}

class Libro implements Producto {
    public function obtenerDescripcion() {
        return "Este es un libro";
    }
}

class ProductoElectronico implements Producto {
    public function obtenerDescripcion() {
        return "Este es un producto electrónico";
    }
}

class Ropa implements Producto {
    public function obtenerDescripcion() {
        return "Esta es ropa";
    }
}

class CreadorDeProductos {
    public function crearProducto($tipo) {
        switch ($tipo) {
            case 'libro':
                return new Libro();
            case 'electronico':
                return new ProductoElectronico();
            case 'ropa':
                return new Ropa();
            default:
                throw new Exception("Tipo de producto no válido");
        }
    }
}

// Uso del Factory Method
$creador = new CreadorDeProductos();
$libro = $creador->crearProducto('libro');
echo $libro->obtenerDescripcion(); // Salida: "Este es un libro"