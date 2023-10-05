<?php
// Resultado
interface Mediator
{
    public function send(string $message, Colleague $colleague);
}

class Chatroom implements Mediator
{

    public function send(string $message, Colleague $colleague)
    {
        // Lógica para reenviar el mensaje
    }
}

abstract class Colleague
{
    protected $mediator;

    public function __construct(Mediator $mediator)
    {
        $this->mediator = $mediator;
    }
}

class Student extends Colleague
{
    public function send(string $message)
    {
        $this->mediator->send($message, $this);
    }
}

class Teacher extends Colleague
{
    public function receive(string $message)
    {
        echo "Message from student: " . $message;
    }
}

$chatroom = new Chatroom();

$student = new Student($chatroom);
$teacher = new Teacher($chatroom);

$student->send("Hello teacher!");
