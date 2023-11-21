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
    public function calculate(string $operation, $a, $b)
    {
        switch ($operation) {
            case 'add' || '+':
                return $this->additioner->process($a, $b);
            case 'subtract':
                return $this->subtraction->process($a, $b);
            case 'multiply':
                return $this->multiplication->process($a, $b);
            case 'divide':
                return $this->division->process($a, $b);
            default:
                return "Неподдерживаемая операция";
        }
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
        if ($b === 0) {
            return 'Ошибка деление на ноль';
        }
        return $a / $b;
    }
}

$additioner = new Additioner();
$subtraction = new Subtraction();
$multiplication = new Multiplication();
$division = new Division();

$calculator = new Calculator($additioner, $subtraction, $multiplication, $division);