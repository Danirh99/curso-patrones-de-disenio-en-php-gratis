<?php
// Interfaz Observer
interface NotificationObserver
{
    public function update(Notification $notification);
}

// Observadores concretos
class EmailNotification implements NotificationObserver
{
    public function update(Notification $notification)
    {
        // Enviar email
    }
}

class SmsNotification implements NotificationObserver
{
    public function update(Notification $notification)
    {
        // Enviar SMS
    }
}

// Sujeto
class Notification
{

    protected $observers = [];

    public function attach(NotificationObserver $observer)
    {
        $this->observers[] = $observer;
    }

    public function notifyObservers()
    {
        // Notifica a los observadores
    }
}

// Cliente
$notification = new Notification();

$notification->attach(new EmailNotification());
$notification->attach(new SmsNotification());

$notification->notifyObservers();// Envía emails y SMS