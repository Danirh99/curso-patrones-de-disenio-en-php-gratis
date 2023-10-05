<?php

// ENUNCIADO
// Refactoriza el siguiente código para implementar el patrón Mediator y eliminar el acoplamiento:
class Student
{
    public function talkToTeacher(Teacher $teacher, string $message)
    {
        $teacher->receiveMessage($message);
    }
}

class Teacher
{
    public function receiveMessage(string $message)
    {
        echo "Message from student: " . $message;
    }
}

$student = new Student();
$teacher = new Teacher();

$student->talkToTeacher($teacher, 'Hello teacher!');