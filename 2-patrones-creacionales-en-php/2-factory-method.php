<?php

/**
 * Se crea una interfaz genérica para el producto(Estructura Punto 1º) 
 * y varias clases que la implementan(Estructura Punto 2º):
 */
interface PaymentMethod
{
    public function pay();
}

class PayPal implements PaymentMethod
{
    public function pay()
    {
        // Código de pago PayPal
    }
}

class CreditCard implements PaymentMethod
{
    public function pay()
    {
        // Código de pago tarjeta de crédito
    }
}

/**
 * Luego se declara el método fábrica(Estructura Punto 3º) en la clase creadora:
 */
abstract class Payment
{

    protected abstract function getMethod();

    public function pay()
    {
        $method = $this->getMethod();
        $method->pay();
    }
}

/**
 * Finalmente las subclases concretas(Estructura Punto 4º) definen la implementación del método fábrica:
 */
class PayPalPayment extends Payment
{

    protected function getMethod()
    {
        return new PayPal();
    }
}

class CreditCardPayment extends Payment
{

    protected function getMethod()
    {
        return new CreditCard();
    }
}


/**
 * Y se utiliza así(Estructura Punto 5º):
 */
$paypal = new PayPalPayment();
$paypal->pay(); // Usa PayPal

$creditcard = new CreditCardPayment();
$creditcard->pay(); // Usa tarjeta de crédito