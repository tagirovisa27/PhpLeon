<?php
class Calculator
{
    private Additioner $additioner;
    private Subtraction $subtraction;
    private Multiplication $multiplication;
    private Division $division;

    public function __construct(Additioner $additioner, Subtraction $subtraction, Multiplication $multiplication, Division $division)
    {
        $this->additioner = $additioner;
        $this->subtraction = $subtraction;
        $this->multiplication = $multiplication;
        $this->division = $division;
    }
    public function calculator(string $operation, int $a, int $b) 
    {
        $this ->additioner->process($a , $b);
    }
}

class Additioner
{
    public function process(int $a, int $b)
    {
        return $a + $b;
    }
}

class Subtraction
{
    public function process(int $a, int $b)
    {
        return $a - $b;
    }
}

class Multiplication
{
    public function process(int $a, int $b)
    {
        return $a * $b;
    }
}

class Division
{
    public function process(int $a, int $b)
    {
        return $a / $b;
    }
}
