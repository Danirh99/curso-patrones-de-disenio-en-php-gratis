<?php
class OrdenCompra{

    public function __construct()
    {
      // constructor
    }
  
    // Logica de orden de compra
    public function generarNumeroOrden(){return true;}
    public function calcularTotal(){return true;}
    public function aplicarDescuento(){return true;}
    public function verificarStock(){return true;}
  
    // Logica de validacion
    public function validarCliente(){return true;}
    public function validarDireccion(){return true;}
  
    // Logica de envio
    public function enviarEmailConfirmacion(){return true;}
    public function enviarEmailFactura(){return true;}
    public function programarEnvio(){return true;}
  
    // Logica de persintencia
    public function guardarEnBD(){return true;}
    public function leerDeBD(){return true;}
    public function borrarDeBD(){return true;}
    
    // etc etc
  }