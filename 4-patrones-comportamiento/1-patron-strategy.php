<?php
// Interfaz Strategy
interface ShippingStrategy
{
    public function getCost(Order $order);
}

// ConcreteStrategy A
class NormalShipping implements ShippingStrategy
{

    public function getCost(Order $order)
    {
        return $order->getTotal() * 0.05;
    }
}

// ConcreteStrategy B
class ExpressShipping implements ShippingStrategy
{

    public function getCost(Order $order)
    {
        return $order->getTotal() * 0.1;
    }
}

// Contexto
class Order
{

    private $shippingStrategy;
    private $total;

    // Inyectamos la estrategia en el constructor
    public function __construct(ShippingStrategy $strategy)
    {
        $this->shippingStrategy = $strategy;
    }

    public function calculateTotal()
    {
        $cost = $this->shippingStrategy->getCost($this);
        return $this->total + $cost;
    }

    public function getTotal()
    {
        return $this->total;
    }

    public function setStrategy(ExpressShipping $express)
    {
        $this->shippingStrategy = $express;
    }
}

// Cliente
$order = new Order(new NormalShipping());
echo $order->calculateTotal(); // Usa NormalShipping

$order->setStrategy(new ExpressShipping());
echo $order->calculateTotal();// Ahora usa ExpressShipping
