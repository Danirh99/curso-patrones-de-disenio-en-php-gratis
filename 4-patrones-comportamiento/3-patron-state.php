<?php
// Estado interface
interface OrderState
{
    public function next(OrderContext $order);
}

// Estados concretos
class PendingState implements OrderState
{

    public function next(OrderContext $order)
    {
        // Pasar al estado PagoPendiente
    }
}

class PaymentPendingState implements OrderState
{

    public function next(OrderContext $order)
    {
        // Pasar al estado Enviado
    }
}

// Contexto
class OrderContext
{

    private $state;

    public function setState(OrderState $state)
    {
        $this->state = $state;
    }

    public function onPaymentSuccessful()
    {
        $this->state->next($this); // Cambia el estado
    }
}
