<?php
interface Target {
	public function request();
}

class Adaptee {
	public function specificRequest() {
		return "Respuesta específica del Adaptee";
	}
}

class Adapter implements Target {
	private $adaptee;

	public function __construct(Adaptee $adaptee) {
		$this->adaptee = $adaptee;
	}

	public function request() {
		return "Adapter: " . $this->adaptee->specificRequest();
	}
}