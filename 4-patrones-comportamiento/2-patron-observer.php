<?php

class Post
{
    // Aributos clase Post
}

/* SUBJECT */
class Blog
{

    private $observers = [];

    public function attach(Observer $observer)
    {
        $this->observers[] = $observer;
    }

    public function detach(Observer $observer)
    {
        // Código para eliminar el observer
    }

    public function notifyObservers()
    {
        // Notifica a todos los observers
    }

    public function addPost(Post $post)
    {
        // Lógica para añadir entrada

        $this->notifyObservers();
    }
}


/* OBSERVERS */
interface Observer
{
    public function update(Blog $blog);
}

class User implements Observer
{

    private $email;

    public function __construct($email)
    {
        $this->email = $email;
    }

    public function update(Blog $blog)
    {
        // Enviar email de notificación
    }
}
