<?php

class Editor
{
    private $content;

    public function type(string $words)
    {
        $this->content = $this->content . ' ' . $words;
    }

    public function getContent()
    {
        return $this->content;
    }

    public function save()
    {
        return new EditorState($this->content);
    }

    public function restore(EditorState $state)
    {
        $this->content = $state->getContent();
    }
}

// Memento
class EditorState
{
    private $content;

    public function __construct(string $content)
    {
        $this->content = $content;
    }

    public function getContent()
    {
        return $this->content;
    }
}

// Cuidador
class History
{
    private $states = [];

    public function push(EditorState $state)
    {
        $this->states[] = $state;
    }

    public function pop()
    {
        return array_pop($this->states);
    }
}

$editor = new Editor();

// Type some stuff
$editor->type('This is the first sentence.');
$editor->type('This is second.');

// Guardar el estado
$history = new History();
$history->push($editor->save());

// Type more
$editor->type('And this is third.');

// Deshacer
$editorState = $history->pop();
$editor->restore($editorState);

echo $editor->getContent();// This is the first sentence. This is second.