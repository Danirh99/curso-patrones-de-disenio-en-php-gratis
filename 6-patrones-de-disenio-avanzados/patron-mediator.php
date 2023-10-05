<?php

interface ChatMediator
{
    public function sendMessage(string $msg, User $user);

    public function addUser(User $user);
}

class Chatroom implements ChatMediator
{

    private $users;

    public function sendMessage(string $msg, User $user)
    {
        foreach ($this->users as $u) {
            if ($u !== $user) {
                $u->receive($msg);
            }
        }
    }

    public function addUser(User $user)
    {
        $this->users[] = $user;
    }
}

class User implements Colleague
{

    private $name;
    private $chatMediator;

    public function __construct(string $name, ChatMediator $chatMediator)
    {
        $this->name = $name;
        $this->chatMediator = $chatMediator;
    }

    public function send(string $msg)
    {
        $this->chatMediator->sendMessage($msg, $this);
    }

    public function receive(string $msg)
    {
        echo $this->name . ' received: ' . $msg;
    }
}

$mediator = new Chatroom();

$john = new User('John Doe', $mediator);
$jane = new User('Jane Doe', $mediator);

$mediator->addUser($john);
$mediator->addUser($jane);

$john->send('Hi there!');

// Output// Jane Doe received: Hi there!