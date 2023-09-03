<?php
interface Observer {
	public function update($message);
}

class Subject {
	private $observers = [];
	private $state;

	public function addObserver(Observer $observer) {
		$this->observers[] = $observer;
	}

	public function setState($state) {
		$this->state = $state;
		$this->notifyObservers();
	}

	private function notifyObservers() {
		foreach ($this->observers as $observer) {
			$observer->update($this->state);
		}
	}
}