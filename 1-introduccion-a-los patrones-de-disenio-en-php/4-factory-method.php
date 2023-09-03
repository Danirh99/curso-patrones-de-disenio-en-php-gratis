<?php
interface Product {
    public function getInfo();
}

class ConcreteProductA implements Product {
    public function getInfo() {
        return "Soy el producto A";
    }
}

class ConcreteProductB implements Product {
    public function getInfo() {
        return "Soy el producto B";
    }
}

abstract class Creator {
    abstract public function createProduct(): Product;
}

class ConcreteCreatorA extends Creator {
    public function createProduct(): Product {
        return new ConcreteProductA();
    }
}

class ConcreteCreatorB extends Creator {
    public function createProduct(): Product {
        return new ConcreteProductB();
}