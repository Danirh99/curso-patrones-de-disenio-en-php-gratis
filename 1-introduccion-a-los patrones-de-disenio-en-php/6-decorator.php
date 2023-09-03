<?php
interface Coffee {
	public function cost();
	public function description();
}

class SimpleCoffee implements Coffee {
	public function cost() {
		return 5;
	}
	public function description() {
		return "Café simple";
	}
}

abstract class CoffeeDecorator implements Coffee {
	protected $decoratedCoffee;

	public function __construct(Coffee $coffee) {
		$this->decoratedCoffee = $coffee;
	}

	public function cost() {
		return $this->decoratedCoffee->cost();
	}

	public function description() {
		return $this->decoratedCoffee->description();
	}
}

class MilkDecorator extends CoffeeDecorator {
	public function cost() {
		return parent::cost() + 2;
	}

	public function description() {
		return parent::description() . ", leche";
	}
}

class SugarDecorator extends CoffeeDecorator {
	public function cost() {
		return parent::cost() + 1;
	}

	public function description() {
		return parent::description() . ", azúcar";
	}
}
