<?php
interface OrderState
{
  public function next(OrderContext $order);
}

class OrderContext
{

  private $state;

  public function __construct(OrderState $state)
  {
    $this->transitionTo($state);
  }

  public function transitionTo(OrderState $state)
  {
    echo "Context: Transition to " . get_class($state) . "<br>";
    $this->state = $state;
    $this->state->next($this);
  }

}

// Pedido creado
class OrderedState implements OrderState
{
  public function next(OrderContext $order)
  {
    echo "Pedido recibido.<br>";
  }
}

// Pagado
class PaidState implements OrderState
{
  public function next(OrderContext $order)
  {
    echo "Pedido pagado.<br>";
  }
}

// Enviado
class ShippedState implements OrderState
{
  public function next(OrderContext $order)
  {
    echo "Pedido enviado.<br>";
  }
}

// Inicialmente pedido creado
// Context: Transition to OrderedState
// Pedido recibido.
$order = new OrderContext(new OrderedState());

// Pagar pedido
// Context: Transition to PaidState
// Pedido pagado.
$order->transitionTo(new PaidState());

// Enviar pedido
// Context: Transition to ShippedState
// Pedido enviado.
$order->transitionTo(new ShippedState());
