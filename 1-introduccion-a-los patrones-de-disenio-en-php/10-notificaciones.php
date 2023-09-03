<?php
// Clase para usuarios suscritos a notificaciones
class Usuario implements Observador {

	// Métodos para mostrar notificación
	public function actualizar(Notificacion $notificacion) {
		// Envía notificación al usuario
	}

}

// Sujeto : sistema de notificaciones
class SistemaNotificaciones {

	private $observadores = [];

	public function agregar(Observador $observador) {
		$this->observadores[] = $observador;
	}

	public function notificar($mensaje) {
		$notificacion = new Notificacion($mensaje);
		foreach ($this->observadores as $observador) {
			$observador->actualizar($notificacion);
		}
	}

}

// Código que usa el patrón

$sistema = new SistemaNotificaciones();

// Agregamos observadores (usuarios)
$usuario1 = new Usuario();
$sistema->agregar($usuario1);

$sistema->notificar('Nuevo mensaje'); // Notifica a los usuarios