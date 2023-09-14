<?php
/* Imaginemos una clase CuentaBancaria que permite depositar/retirar diner */
class CuentaBancaria
{

    protected $saldo;

    public function depositar($monto)
    {
        $this->saldo += $monto;
    }

    public function retirar($monto)
    {
        $this->saldo -= $monto;
    }

    public function getSaldo()
    {
        return $this->saldo;
    }
}


/* Podemos crear un Proxy para controlar el acceso: */
class ProxyCuentaBancaria
{

    protected $cuenta;

    public function __construct(CuentaBancaria $cuenta)
    {
        $this->cuenta = $cuenta;
    }

    public function depositar($monto)
    {
        $this->cuenta->depositar($monto);
    }

    public function retirar($monto)
    {
        if ($this->cuenta->getSaldo() >= $monto) {
            $this->cuenta->retirar($monto);
        } else {
            throw new Exception('Saldo insuficiente');
        }
    }

    public function getSaldo()
    {
        return $this->cuenta->getSaldo();
    }
}


/* Ejecución */
$cuenta = new CuentaBancaria();
$proxy = new ProxyCuentaBancaria($cuenta);

$proxy->depositar(100);
$proxy->retirar(20); //Ok

$proxy->retirar(120); //Exception saldo insuficiente
