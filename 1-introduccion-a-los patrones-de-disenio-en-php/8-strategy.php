<?php
interface PaymentStrategy {
	public function pay($amount);
}

class CreditCardPayment implements PaymentStrategy {
	private $cardNumber;
	private $expiryDate;

	public function __construct($cardNumber, $expiryDate) {
		$this->cardNumber = $cardNumber;
		$this->expiryDate = $expiryDate;
	}

	public function pay($amount) {
		return "Pagando $$amount con tarjeta $this->cardNumber";
	}
}

class PayPalPayment implements PaymentStrategy {
	private $email;

	public function __construct($email) {
		$this->email = $email;
	}

	public function pay($amount) {
		return "Pagando $$amount a través de PayPal ($this->email)";
	}
}