<?php

interface Command
{
    public function execute();
    public function undo();
}

// Comando concreto
class CreateUserCommand implements Command
{

    public function __construct(User $user)
    {
        // ...
    }

    public function execute()
    {
        // Código para crear el usuario
    }

    public function undo()
    {
        // Código para eliminar el usuario
    }
}

// Invocador
class CommandInvoker
{

    private $commands = [];

    public function execute(Command $command)
    {
        $this->commands[] = $command;
        $command->execute();
    }

    public function undo()
    {
        $command = array_pop($this->commands);
        $command->undo();
    }
}
