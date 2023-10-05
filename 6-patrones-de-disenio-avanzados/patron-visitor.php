<?php
// Elementos a visitar
interface Shape
{
    public function accept(Visitor $visitor);
}

class Circle implements Shape
{
    public $radius;

    public function accept(Visitor $visitor)
    {
        $visitor->visitCircle($this);
    }
}

class Square implements Shape
{
    public $side;

    public function accept(Visitor $visitor)
    {
        $visitor->visitSquare($this);
    }
}

// Visitor
interface Visitor
{
    public function visitCircle(Circle $circle);
    public function visitSquare(Square $square);
}

// ConcreteVisitor
class AreaCalculator implements Visitor
{

    public function visitCircle(Circle $circle)
    {
        $area = pi() * pow($circle->radius, 2);
        echo "Circle area: " . $area;
    }

    public function visitSquare(Square $square)
    {
        $area = pow($square->side, 2);
        echo "Square area: " . $area;
    }
}

// Object structure
$shapes = [
    new Circle(2),
    new Square(5)
];

$areaCalc = new AreaCalculator();

foreach ($shapes as $shape) {
    $shape->accept($areaCalc);
}

// Output// Circle area: 12.566370614359172// Square area: 25
