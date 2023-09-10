<?php

/**
 * Se define una interfaz de fábrica abstracta(Estructura Punto 1º) y varias implementaciones concretas(Estructura Punto 2º):
 */
interface GUIFactory
{
    public function createButton();
    public function createCheckbox();
}

class WinFactory implements GUIFactory
{
    public function createButton()
    {
        return new WinButton();
    }

    public function createCheckbox()
    {
        return new WinCheckbox();
    }
}

class MacFactory implements GUIFactory
{
    public function createButton()
    {
        return new MacButton();
    }

    public function createCheckbox()
    {
        return new MacCheckbox();
    }
}

/**
 * Luego se crean las interfaces(Estructura Punto 3º) e implementaciones(Estructura Punto 4º) de los productos:
 */
interface Button
{
    public function paint();
}

class WinButton implements Button
{
    public function paint()
    {
        // Pintar botón Windows
    }
}

class MacButton implements Button
{
    public function paint()
    {
        // Pintar botón Mac
    }
}

interface Checkbox
{
    public function paint();
}

class WinCheckbox implements Checkbox
{
    public function paint()
    {
        // Pintar botón Windows
    }
}

class MacCheckbox implements Checkbox
{
    public function paint()
    {
        // Pintar botón Mac
    }
}

// Lo mismo para Checkbox

/**
 * Y se utiliza así(Estructura Punto 5º):
 */
$gui = new WinFactory();
$button = $gui->createButton();
$checkbox = $gui->createCheckbox();
